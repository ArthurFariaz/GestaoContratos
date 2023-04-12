<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro</title>
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
@include('sweetalert::alert')
<div class="container-sm text-center col-5">
    <form action="{{route('Administrators.store')}}" class="mt-4" method="post">
        @csrf
        <h2>Cadastro de empresas</h2>
        <div class="pd-4 mb-3 mt-4">
            <label for="NameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="NameInput" name="NameInput">
        </div>
        <div class="pd-4 mb-3">
            <label for="CpfInput" class="form-label">cpf</label>
            <input type="text" class="form-control" id="CpfInput" name="CpfInput">
        </div>
        <div class="pd-4 mb-3">
            <label for="ContatoInput" class="form-label">contato</label>
            <input type="text" class="form-control" id="ContatoInput" name="ContatoInput">
        </div>
        <select name = "TipoInput" class="mt-4 form-select" aria-label=".form-select-sm ">
            <option selected>Tipo</option>
            <option value="0">Gestor</option>
            <option value="1">Fiscal</option>
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
