<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Criação</title>
    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

    </style>
</head>
<body>
<div class="container-sm text-center col-5">
    <form action="{{route('Contracts.update',$Contract)}}" class="mt-4" method="post">
        @method('put')
        @csrf
        <div class="justify-content-between">
            <div>
                <div class="pd-4 mb-3 mt-4 row">
                    <h2>Edição do contrato</h2>
                    <div class="col">
                        <label for="NumeroContratoInput" class="form-label">Numero do contrato</label>
                        <input value="{{$Contract->numero_contrato}}" type="text" class="form-control" id="NumeroContratoInput" name="NumeroContratoInput">
                    </div>
                    <div class="col">
                        <label for="NumeroProcessoInput" class="form-label">Numero do processo</label>
                        <input value="{{$Contract->numero_processo}}" type="text" class="form-control" id="NumeroProcessoInput" name="NumeroProcessoInput">
                    </div>
                </div>
                <div class="pd-4 mb-3">
                    <label for="ObjetoInput" class="form-label">Objeto</label>
                    <input value="{{$Contract->objeto}}" type="text" class="form-control" id="ObjetoInput" name="ObjetoInput">
                </div>
                <div>
                    <label class="text-start">Status</label>
                    <select name = "StatusInput" class="mt-2 form-select" aria-label=".form-select-sm ">
                        <option disabled selected hidden>@if($Contract->status) {{"Ativo"}} @else {{"Inativo"}} @endif</option>
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>
            </div>
            <div class="list-group">
                <label class="ms-2 text-start mt-2">Gestor</label>
                <select name = "GestorInput" class="mt-2 form-select list-group-item" aria-label=".form-select-sm ">
                    <option disabled selected hidden>{{$Gestor[0]['nome']}}</option>
                    <option value="1">João</option>
                    <option value="2">Lucas</option>
                </select>

                <label class="ms-2 text-start mt-2">Fiscais</label>
                <select name = "FiscalInput1" class="mt-2 form-select list-group-item" aria-label=".form-select-sm ">
                    <option disabled selected hidden>{{$Fiscais[0]['nome']}}</option>
                    <option value="3">Marcela</option>
                    <option value="4">Pedro</option>
                    <option value="5">Maria</option>
                    <option value="6">Luana</option>
                </select>

                <select name = "FiscalInput2" class="mt-2 form-select list-group-item" aria-label=".form-select-sm ">
                    <option disabled selected hidden>{{$Fiscais[1]['nome']}}</option>
                    <option value="3">Marcela</option>
                    <option value="4">Pedro</option>
                    <option value="5">Maria</option>
                    <option value="6">Luana</option>
                </select>
            </div>
        </div>
        <div class="list-group mt-2">
            <label>Empresa</label>
            <select name = "EmpresaInput" class="mt-2 form-select list-group-item" aria-label=".form-select-sm ">
                <option disabled selected hidden>{{$Empresa[0]['nome']}}</option>
                <option value="1">Anatel</option>
            </select>
        </div>
        <button type="submit" class="mt-4 btn btn-dark">Adicionar</button>
        <div>
            <a href="{{route('Contracts.index')}}" type="submit" class="mt-2 btn btn-primary">
                Voltar
            </a>
        </div>
    </form>
</div>
</body>
</html>
