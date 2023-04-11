<?php

namespace App\Http\Controllers;

use App\Models\{administrator,contract_adm,contract};
use Illuminate\Http\Request;

class AdministratorsController extends Controller
{

    public function create(contract $Contract)
    {
        dd($Contract);
        return view('Administrators.create',compact('Contract'));
    }

    public function store(contract $Contract,Request $request)
    {
        dd($Contract);/*
        $adminstrator = new administrator();
        $adminstrator->nome = $request->input('NameInput');
        $adminstrator->cpf = $request->input('CpfInput');
        $adminstrator->contato = $request->input('ContatoInput');
        $adminstrator->cargo = $request->input('TipoInput');

        if (($adminstrator->save())) {
            alert()->error('Gestor cadastrada')->toToast();
        }

        //Salvando tabela contract_adm
        $contract_adm = new contract_adm();
        $contract_adm->contratos_id = $Contract->id;
        $contract_adm->adm_id = $adminstrator->id;
        $contract_adm->save();

        return to_route('Contracts.index');*/
    }

}
