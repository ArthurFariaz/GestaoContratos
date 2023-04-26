<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contratos</title>
    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

    </style>
    <link href="../../css/sidebars.css" rel="stylesheet">
</head>
<body>
@include('sweetalert::alert')


<main class="d-flex flex-nowrap">
    <h1 class="visually-hidden">Sidebars examples</h1>

    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="10" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="{{route('Contracts.create')}}" class="nav-link text-white">
                    Criar contratos
                </a>
            </li>
            <li>
                <a href="{{route('Companies.index')}}" class="nav-link text-white">
                    Visualizar empresas
                </a>
            </li>
            <li>
                <a href="{{route('Companies.create')}}" class="nav-link text-white" >
                    Adicionar empresa
                </a>
            </li>
        </ul>
        <hr>
    </div>

    <div class="b-example-divider b-example-vr"></div>
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
                    <form action="{{route('Contracts.destroy',$Contract->id)}}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button  class="btn btn-sm btn-danger">
                            X
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
</main>
</body>
</html>
