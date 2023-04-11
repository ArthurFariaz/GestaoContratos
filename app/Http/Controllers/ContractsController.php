<?php

namespace App\Http\Controllers;

use App\Models\{administrator,contract_adm,contract};
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class ContractsController extends Controller
{
    public function index(){
        $Contracts = contract::query()->orderBy('numero_contrato')->get();
        return view('Contracts.index',compact(['Contracts']));
    }

    public function create(){
        return view('Contracts.create');
    }

    public function store(Request $request){
        $contract = new contract();
        $contract->numero_contrato = $request->input('NumeroContratoInput');
        $contract->numero_processo = $request->input('NumeroProcessoInput');
        $contract->objeto = $request->input('ObjetoInput');
        $contract->status = $request->input('StatusInput');
        if(!($contract->save())){
            alert()->error('ERRO','Contrato não cadastrada')->toToast();
        }
        return to_route('Contracts.index');
    }

    public function show(contract $Contract){

        $Fiscais = contract_adm::query()->get();

        $Gestor = contract_adm::query()->get();

        return view('Contracts.show',compact(['Contract','Fiscais','Gestor']));
    }

}
