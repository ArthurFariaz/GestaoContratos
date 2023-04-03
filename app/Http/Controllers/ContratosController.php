<?php

namespace App\Http\Controllers;

use App\Models\administrador;
use App\Models\companies;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ContratosController extends Controller
{
    public function index(){

        $Companies = companies::all();
        return view('Companies.index')->with('Companies',$Companies);
    }

    public function create(){
        return view('Companies.create');
    }

    public function store(Request $request){

        $Company = new companies();
        $Company->nome = $request->input('NameInput');
        $Company->cnpj = $request->input('CnpjInput');
        $Company->descricao = $request->input('DescricaoInput');
        $Company->contrato_ativo = $request->input('ContratoInput');
        $Company->contratos_id = 1;
        $Company->save();

        return to_route('Companies.index');
    }

    public function show(companies $Company){

        $Fiscais = administrador::where('contratos_id',$Company->contratos_id)
            ->where('cargo',0)
            ->get();
        $Gestor = administrador::where('contratos_id',$Company->contratos_id)
            ->where('cargo',1)
            ->get();

        return view('Companies.show')
            ->with('Company',$Company)
            ->with('Gestor',$Gestor)
            ->with('Fiscais',$Fiscais);
    }


    public function edit(companies $Company){

        return view('Companies.edit')
            ->with('Company',$Company);
    }

    public function update(companies $Company,Request $request)
    {
        dd($Company);
        $Company->fill($request->all());
        $Company->save();

        return to_route('Companies.index');
    }
}
