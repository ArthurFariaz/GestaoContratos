<?php

namespace App\Http\Controllers;

use App\Models\{Administrator, Contract};
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    public function index(){
        $Contracts = Contract::query()->orderBy('numero_contrato')->get();
        return view('Contracts.index',compact(['Contracts']));
    }

    public function create(){
        return view('Contracts.create');
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

        if(!($contract->save())){
            alert()->error('ERRO','Contrato não cadastrada')->toToast();
        }

        $contract->relAdministrator()->attach($gestor);
        $contract->relAdministrator()->attach($fiscal1);
        $contract->relAdministrator()->attach($fiscal2);

        return to_route('Contracts.index');
    }
    public function show(Contract $Contract){

        $Fiscais = $Contract->relAdministrator()->where('cargo',0)->get();
        $Gestor = $Contract->relAdministrator()->where('cargo',1)->get();
        return view('Contracts.show',compact(['Contract','Fiscais','Gestor']));
    }

    public function edit(Contract $Contract){

        $Fiscais = $Contract->relAdministrator()->where('cargo',0)->get();
        $Gestor = $Contract->relAdministrator()->where('cargo',1)->get();

        return view('Contracts.edit',compact(['Contract','Fiscais','Gestor']));
    }

    public function update(Contract $Contract,Request $request){

        $Contract->numero_contrato = $request->input('NumeroContratoInput');
        $Contract->numero_processo = $request->input('NumeroProcessoInput');
        $Contract->objeto = $request->input('ObjetoInput');
        $Contract->status = $request->input('StatusInput');

        $Contract->save();
    }
}
