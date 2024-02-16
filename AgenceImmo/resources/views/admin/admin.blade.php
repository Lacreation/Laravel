<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <title>@yield('title') | Administration</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">Agence</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" date-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @php
                    $route = request()->route()->getName();
                @endphp
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('admin.property.index')}}" @class(['nav-link', 'active' => str_contains($route, 'property.')])>Gérer les biens</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.option.index')}}" @class(['nav-link', 'active' => str_contains($route, 'option.')])>Gérer les options</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5">

            @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>    
            @endif
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="my-0">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>   
            @endif

            @yield('content')
        </div>
    </body>
</html>