<?php

namespace App\Http\Controllers;

use App\Models\{Administrator, Company, Contract};
use App\Repositories\AdminstratorsRepository;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    public function index(){
        $Contracts = Contract::query()->orderBy('numero_contrato')->get();
        return view('Contracts.index',compact(['Contracts']));
    }

    public function create(){

        /*
        $adm = new AdminstratorsRepository();
        $adm->add();
        */

        $FiscaisBD = Administrator::where('cargo',0)->orderBy('nome')->get();
        $GestoresBD = Administrator::where('cargo',1)->orderBy('nome')->get();
        $CompanyBD = Company::query()->orderBy('nome')->get();

        return view('Contracts.create',compact(['FiscaisBD','GestoresBD','CompanyBD']));
    }

    public function store(Request $request){
        $contract = new Contract();
        $contract->numero_contrato = $request->input('NumeroContratoInput');
        $contract->numero_processo = $request->input('NumeroProcessoInput');
        $contract->objeto = $request->input('ObjetoInput');
        $contract->status = $request->input('StatusInput');
        $gestor = $request->input('GestorInput');
        $fiscal1 = $request->input('FiscalInput1');
        $fiscal2 = $request->input('FiscalInput2');
        $empresa = $request->input('EmpresaInput');

        if(!($contract->save())){
            alert()->error('ERRO','Contrato não cadastrada')->toToast();
        }

        $contract->relAdministrator()->attach($gestor);
        $contract->relAdministrator()->attach($fiscal1);
        $contract->relAdministrator()->attach($fiscal2);
        $contract->relCompanie()->attach($empresa);

        return to_route('Contracts.index');
    }
    public function show(Contract $Contract){

        $Fiscais = $Contract->relAdministrator()->where('cargo',0)->get();
        $Gestor = $Contract->relAdministrator()->where('cargo',1)->get();
        $Empresa = $Contract->relCompanie()->get();

        return view('Contracts.show',compact(['Contract','Fiscais','Gestor','Empresa']));
    }

    public function edit(Contract $Contract){

        $FiscaisBD = Administrator::where('cargo',0)->get();
        $GestoresBD = Administrator::where('cargo',1)->get();
        $CompanyBD = Company::query()->orderBy('nome')->get();

        $Fiscais = $Contract->relAdministrator()->where('cargo',0)->get();
        $Gestor = $Contract->relAdministrator()->where('cargo',1)->get();
        $Empresa = $Contract->relCompanie()->get();
        return view('Contracts.edit',
            compact(['Contract','Fiscais','Gestor','Empresa','FiscaisBD','GestoresBD','CompanyBD'])
            );
    }

    public function update(Contract $Contract,Request $request){

        $Contract->numero_contrato = $request->input('NumeroContratoInput');
        $Contract->numero_processo = $request->input('NumeroProcessoInput');
        $Contract->objeto = $request->input('ObjetoInput');
        $Contract->status = $request->input('StatusInput');

        $Contract->relAdministrator()->detach();
        $Contract->relCompanie()->detach();

        $gestorbd = Administrator::where('nome',$request->input('GestorInput'))->get();
        $fiscal1bd = Administrator::where('nome',$request->input('FiscalInput1'))->get();
        $fiscal2bd = Administrator::where('nome',$request->input('FiscalInput2'))->get();

        $Contract->relAdministrator()->attach($gestorbd);
        $Contract->relAdministrator()->attach($fiscal1bd);
        $Contract->relAdministrator()->attach($fiscal2bd);
        $Contract->relCompanie()->attach($request->input('EmpresaInput'));

        $Contract->save();

        return to_route('Contracts.index');

    }

    public function destroy(Contract $Contract){
        $Contract->relCompanie()->detach();
        $Contract->relAdministrator()->detach();
        $Contract->delete();

        return to_route('Contracts.index');
    }

}
