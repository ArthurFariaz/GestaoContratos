<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contratos</title>
    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
    <body>
        <div class="container mt-4">
            <h1>Empresas</h1>
            <ul class="mt-3 list-group col-6">
                @foreach($Companies as $Company)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $Company->nome }}
                        <a href="{{route('Companies.show',$Company->id)}}" class="btn btn-sm btn-primary">
                            Detalhes
                        </a>
                    </li>
                @endforeach
            </ul>
            <a type="button" href="{{route('Companies.create')}}" class="mt-4 btn btn-dark">Adicionar Empresa</a>
        </div>
    </body>
</html>
