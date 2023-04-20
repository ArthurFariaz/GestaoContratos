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
            background-color: #fffafa;
        }

    </style>
</head>
<body>
<div class="container text-center">
    <div class="row justify-content-around">
        <div class="text-start">
            <a class="mb-2 btn-dark btn mx-5" href="{{route('Contracts.index')}}">
                Voltar
            </a>
        </div>
        <div class="col-5 list-group">
            <h3 class="list-group-item">Contrato</h3>
            <div class="list-group-item">{{"Numero do contrato: "}}{{$Contract->numero_contrato}}</div>
            <div class="list-group-item">{{"Numero do processo: "}}{{$Contract->numero_processo}}</div>
            <div class="list-group-item">{{"Objeto: "}}{{$Contract->objeto}}</div>
            <div class="list-group-item">
                <span>{{"Status: "}}</span> @if($Contract->status) {{"Ativo"}} @else {{"Inativo"}} @endif
            </div>
        </div>

        @if(!(empty($Empresa)))
            <div class="col-5">
                <div class="list-group">
                    <h3 class="list-group-item">Empresa</h3>
                    <div class="list-group-item">{{$Empresa[0]['nome']}}</div>
                    <div class="list-group-item">{{"CNPJ: "}}{{$Empresa[0]['cnpj']}}</div>
                    <div class="list-group-item">{{"Descrição: "}}{{$Empresa[0]['descricao']}}</div>
                </div>
            </div>
        @endif
    </div>
    <div class="row mt-3 justify-content-around">
        @if(!(empty($Gestor)))
            <div class="col-5 list-group">
                <h3 class="list-group-item">Gestor</h3>
                <div class="list-group-item">{{$Gestor[0]['nome']}}</div>
                <div class="list-group-item">{{"CPF: "}}{{$Gestor[0]['cpf']}}</div>
                <div class="list-group-item">{{"Contato: "}}{{$Gestor[0]['contato']}}</div>
            </div>
        @endif
        @if(!(empty($Fiscais)))
            <div class="col-5">
                <div class="list-group">
                    <h3 class="list-group-item">Fiscais</h3>
                    <div class="row">
                        @foreach($Fiscais as $fiscal)
                            <div class="col">
                                <div class="list-group-item">{{$fiscal->nome}}</div>
                                <div class="list-group-item">{{"CPF: "}}{{$fiscal->cpf}}</div>
                                <div class="list-group-item">{{"Contato: "}}{{$fiscal->contato}}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
</body>
</html>
