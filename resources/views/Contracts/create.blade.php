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
    <form action="{{route('Contracts.store')}}" class="mt-4" method="post">
        @csrf
        <h2>Criação do contrato</h2>
        <div class="pd-4 mb-3 mt-4 row">
            <div class="col">
                <label for="NumeroContratoInput" class="form-label">Numero do contrato</label>
                <input type="text" class="form-control" id="NumeroContratoInput" name="NumeroContratoInput">
            </div>
            <div class="col">
                <label for="NumeroProcessoInput" class="form-label">Numero do processo</label>
                <input type="text" class="form-control" id="NumeroProcessoInput" name="NumeroProcessoInput">
            </div>
        </div>
        <div class="pd-4 mb-3 mt-4">
            <label for="ObjetoInput" class="form-label">Objeto</label>
            <input type="text" class="form-control" id="ObjetoInput" name="ObjetoInput">
        </div>
        <select name = "StatusInput" class="mt-4 form-select" aria-label=".form-select-sm ">
            <option selected>Status do contrato</option>
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
        </select>
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