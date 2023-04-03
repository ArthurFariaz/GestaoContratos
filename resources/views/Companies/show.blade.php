<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contratos</title>
    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        html,
        body {
            height: 100%;
        }
        body {
            display: flex;
            padding-top: 80px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

    </style>
</head>
<body>
<div class="container text-center">
    <div class="row">
        <div class="col list-group">
            <h3 class="list-group-item">Empresa</h3>
            <div class="list-group-item">{{$Company->nome}}</div>
            <div class="list-group-item">{{$Company->descricao}}</div>
            <div class="list-group-item">{{"CNPJ: "}}{{$Company->cnpj}}</div>
            <div class="list-group-item">
                {{"Contrato ativo: "}} @if($Company->contrato_ativo) {{"Sim"}} @else {{"Não"}} @endif
            </div>
            <div>
                <a href="{{route('Companies.edit',$Company)}}" class="col-3 mt-2 btn btn-sm btn-dark">
                    Editar
                </a>
            </div>
        </div>
        <div class="col list-group">
            <h3 class="list-group-item">Gestor</h3>
            <div class="list-group-item">{{$Gestor[0]['nome']}}</div>
            <div class="list-group-item">{{"CPF: "}}{{$Gestor[0]['cpf']}}</div>
            <div class="list-group-item">{{"Contato: "}}{{$Gestor[0]['contato']}}</div>
        </div>
        <div class="col list-group">
            <h3 class="list-group-item">Fiscais</h3>
            <div class="row">
                <div class="col">
                    <div class="list-group-item">{{$Fiscais[0]['nome']}}</div>
                    <div class="list-group-item">{{"CPF: "}}{{$Fiscais[0]['cpf']}}</div>
                    <div class="list-group-item">{{"Contato: "}}{{$Fiscais[0]['contato']}}</div>
                </div>
                <div class="col">
                    <div class="list-group-item">{{$Fiscais[1]['nome']}}</div>
                    <div class="list-group-item">{{"CPF: "}}{{$Fiscais[1]['cpf']}}</div>
                    <div class="list-group-item">{{"Contato: "}}{{$Fiscais[1]['contato']}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
