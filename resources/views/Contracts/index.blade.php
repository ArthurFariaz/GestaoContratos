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
@include('sweetalert::alert')
<div class="container mt-4">
    <h2>Numero dos contratos</h2>
    <ul class="mt-3 list-group col-6">
        @foreach($Contracts as $Contract)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $Contract->numero_processo }}
                <div class="d-flex">
                    <div class="me-2">
                        <a href="{{route('Contracts.edit',$Contract->id)}}" class="btn btn-sm btn-primary">
                            Editar
                        </a>
                    </div>
                    <div>
                        <a href="{{route('Contracts.show',$Contract->id)}}" class="btn btn-sm btn-primary">
                            Detalhes
                        </a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    <a type="button" href="{{route('Contracts.create')}}" class="mt-4 btn btn-dark">Criar contrato</a>
</div>
</body>
</html>
