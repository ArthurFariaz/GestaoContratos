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
        /*
        $gestor1 = new Administrator();
        $gestor2 = new Administrator();
        $fiscal1 = new Administrator();
        $fiscal2 = new Administrator();
        $fiscal3 = new Administrator();
        $fiscal4 = new Administrator();

        $gestor1->nome = 'Joao';
        $gestor1->cpf = 'xxxxxx';
        $gestor1->contato = '111111';
        $gestor1->cargo = 1;
        $gestor1->save();

        $gestor2->nome = 'Lucas';
        $gestor2->cpf = 'xxxxxx';
        $gestor2->contato = '111112';
        $gestor2->cargo = 1;
        $gestor2->save();

        $fiscal1->nome = 'Marcela';
        $fiscal1->cpf = 'xxxxxx';
        $fiscal1->contato = '111113';
        $fiscal1->cargo = 0;
        $fiscal1->save();

        $fiscal2->nome = 'Pedro';
        $fiscal2->cpf = 'xxxxxx';
        $fiscal2->contato = '111114';
        $fiscal2->cargo = 0;
        $fiscal2->save();

        $fiscal3->nome = 'Maria';
        $fiscal3->cpf = 'xxxxxx';
        $fiscal3->contato = '111115';
        $fiscal3->cargo = 0;
        $fiscal3->save();

        $fiscal4->nome = 'Luana';
        $fiscal4->cpf = 'xxxxxx';
        $fiscal4->contato = '111116';
        $fiscal4->cargo = 0;
        $fiscal4->save();*/

        return to_route('Contracts.index');
    }

}
