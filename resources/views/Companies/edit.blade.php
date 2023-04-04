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
    <form method="post" action="{{route('Companies.update',$Company)}}" class="mt-4">
        @method('PUT')
        @csrf
        <h2>Cadastro de empresas</h2>
        <div class="pd-4 mb-3 mt-4">
            <label for="NameInput" class="form-label">Nome</label>
            <input type="text" value="{{$Company->nome}}" class="form-control" id="NameInput" name="NameInput">
        </div>
        <div class="pd-4 mb-3">
            <label for="CnpjInput" class="form-label">CNPJ</label>
            <input type="text" value="{{$Company->cnpj}}" class="form-control" id="CnpjInput" name="CnpjInput">
        </div>
        <div class="pd-4 mb-3">
            <label for="DescricaoInput" class="form-label">Descrição</label>
            <input type="text" value="{{$Company->descricao}}" class="form-control" id="DescricaoInput" name="DescricaoInput">
        </div>
        <div class="pd-4 mb-3">
            <label for="NumeroContratoInput" class="form-label">Numero do contrato</label>
            <input type="text" value="{{$Company->contratos_id}}" class="form-control" id="NumeroContratoInput" name="NumeroContratoInput">
        </div>
        <select name = "ContratoInput" class="mt-4 form-select" aria-label=".form-select-sm ">
            <option selected>Contrato Ativo?</option>
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>

        <button type="submit" class="mt-4 btn btn-dark">Atualizar</button>
    </form>
</div>
</body>
</html>
