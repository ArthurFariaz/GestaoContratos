<?php

namespace App\Http\Controllers;

use App\Models\{administrator,company};
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class CompaniesController extends Controller
{
    public function index(){

        $Companies = company::query()->orderBy('nome')->get();
        return view('Companies.index')->with('Companies',$Companies);

    }

    public function create(){
        return view('Companies.create');
    }

    public function store(Request $request){

        $Company = new company();
        $Company->nome = $request->input('NameInput');
        $Company->cnpj = $request->input('CnpjInput');
        $Company->descricao = $request->input('DescricaoInput');
        $Company->contrato_ativo = $request->input('ContratoInput');
        //$Company->contratos_id = 1;
        $Company->save();

        alert()->success('Empresa criada')->toToast();
        return to_route('Companies.index');
    }

    public function show(company $Company){
        /*
        $Fiscais = administrator::where('contratos_id',$Company->contratos_id)
            ->where('cargo',0)
            ->get();
        $Gestor = administrator::where('contratos_id',$Company->contratos_id)
            ->where('cargo',1)
            ->get();
        */
        return view('Companies.show',compact(['Company']));

    }


    public function edit(company $Company){
        return view('Companies.edit',compact(['Company']));
    }

    public function update(company $Company,Request $request){
        Alert::success('Empresa atualizada');

        $Company->nome = $request->NameInput;
        $Company->nome = $request->input('NameInput');
        $Company->cnpj = $request->input('CnpjInput');
        $Company->descricao = $request->input('DescricaoInput');
        $Company->contrato_ativo = $request->input('ContratoInput');
        $Company->contratos_id = $request->input('NumeroContratoInput');

        $Company->save();

        return to_route('Companies.index');
    }
}
