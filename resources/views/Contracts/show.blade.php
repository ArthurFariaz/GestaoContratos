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
    <div class="text-start">
        <a class="align-content-lg-end mb-2 btn-dark btn" href="{{route('Contracts.index')}}">Voltar</a>
    </div>
    <div class="row">
        <div class="col list-group">
            <h3 class="list-group-item">Contrato</h3>
            <div class="list-group-item">{{"Numero do contrato: "}}{{$Contract->numero_contrato}}</div>
            <div class="list-group-item">{{"Numero do processo: "}}{{$Contract->numero_processo}}</div>
            <div class="list-group-item">{{"Objeto: "}}{{$Contract->objeto}}</div>
            <div class="list-group-item justify-content-between">
                <span>{{"Status: "}}</span> @if($Contract->status) {{"Ativo"}} @else {{"Inativo"}} @endif
            </div>
        </div>
        @if(!(empty($Gestor)))
        <div class="col">
            <div class="list-group">
                <h3 class="list-group-item">Gestor</h3>
                <div class="list-group-item">{{$Gestor[0]['nome']}}</div>
                <div class="list-group-item">{{"CPF: "}}{{$Gestor[0]['cpf']}}</div>
                <div class="list-group-item">{{"Contato: "}}{{$Gestor[0]['contato']}}</div>
            </div>
        </div>
        @endif
        @if(!(empty($Fiscais)))
        <div class="col">
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
