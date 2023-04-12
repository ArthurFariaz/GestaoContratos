<?php

namespace App\Http\Controllers;

use App\Models\{Administrator,contract};
use Illuminate\Http\Request;

class AdministratorsController extends Controller
{

    public function create()
    {
        return view('Administrators.create');
    }

    public function store(Request $request)
    {
        $adminstrator = new Administrator();
        $adminstrator->nome = $request->input('NameInput');
        $adminstrator->cpf = $request->input('CpfInput');
        $adminstrator->contato = $request->input('ContatoInput');
        $adminstrator->cargo = $request->input('TipoInput');

        if (($adminstrator->save())) {
            toast('Gestor cadastrado.','success')->position('bottom-end');
            //Salvando tabela contract_adm
            $adminstrator->relContract()->attach($adminstrator->id);
        }

        return to_route('Contracts.index');
    }

}
