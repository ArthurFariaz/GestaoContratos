<?php

namespace App\Http\Controllers;

use App\Models\{Company};
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class CompaniesController extends Controller
{
    public function index(){

        $Companies = Company::query()->orderBy('nome')->get();
        return view('Companies.index')->with('Companies',$Companies);

    }

    public function create(){
        return view('Companies.create');
    }

    public function store(Request $request){

        $Company = new Company();
        $Company->nome = $request->input('NameInput');
        $Company->cnpj = $request->input('CnpjInput');
        $Company->descricao = $request->input('DescricaoInput');
        $Company->save();

        alert()->success('Empresa criada')->toToast();
        return to_route('Contracts.index');
    }


    public function edit(Company $Company){
        return view('Companies.edit',compact(['Company']));
    }

    public function update(Company $Company,Request $request){
        $Company->nome = $request->NameInput;
        $Company->nome = $request->input('NameInput');
        $Company->cnpj = $request->input('CnpjInput');
        $Company->descricao = $request->input('DescricaoInput');

        if($Company->save()){
            alert()->success('Empresa atualizada')->toToast();
        }
        return to_route('Companies.index');
    }
}
