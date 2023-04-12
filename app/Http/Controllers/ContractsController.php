<?php

namespace App\Http\Controllers;

use App\Models\{Contract};
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
        if(!($contract->save())){
            alert()->error('ERRO','Contrato não cadastrada')->toToast();
        }
        return to_route('Contracts.index');
    }

    public function edit(Contract $contract){
        return view('Contracts.edit');
    }
    public function show(Contract $Contract){

        $Fiscais = $Contract->relAdministrator()->get();
        $Gestor = $Contract->relAdministrator()->get();

        return view('Contracts.show',compact(['Contract','Fiscais','Gestor']));
    }

}
