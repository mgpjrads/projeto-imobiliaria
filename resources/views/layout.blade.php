<!doctype html>

<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<title>@yield('titulo', 'Imobiliária')</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f4f6f9;
        color: #343a40;
        font-family: Arial, sans-serif;
    }

    .navbar-imobiliaria {
        background-color: #17365d;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.12);
    }

    .navbar-imobiliaria .navbar-brand {
        color: white;
        font-size: 1.4rem;
        font-weight: bold;
    }

    .navbar-imobiliaria .navbar-brand:hover {
        color: #e9ecef;
    }

    .pagina {
        padding-top: 30px;
        padding-bottom: 40px;
    }

    .titulo-pagina {
        color: #17365d;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .subtitulo-pagina {
        color: #6c757d;
        margin-bottom: 25px;
    }

    .card-imobiliaria {
        background-color: white;
        border: none;
        border-radius: 12px;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
        padding: 25px;
    }

    .form-label {
        font-weight: 600;
        color: #495057;
    }

    .form-control {
        border-radius: 8px;
        padding: 10px 12px;
        border: 1px solid #ced4da;
    }

    .form-control:focus {
        border-color: #17365d;
        box-shadow: 0 0 0 0.2rem rgba(23, 54, 93, 0.15);
    }

    .btn-imobiliaria {
        background-color: #17365d;
        color: white;
        border-radius: 8px;
        padding: 9px 18px;
        border: none;
    }

    .btn-imobiliaria:hover {
        background-color: #102944;
        color: white;
    }

    .tabela-imoveis {
        background-color: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
    }

    .tabela-imoveis thead {
        background-color: #17365d;
        color: white;
    }

    .tabela-imoveis th {
        padding: 14px;
        white-space: nowrap;
    }

    .tabela-imoveis td {
        padding: 12px;
        vertical-align: middle;
    }

    .tabela-imoveis .acoes {
    white-space: nowrap;
    min-width: 180px;
    }

    .tabela-imoveis .acoes .btn {
    white-space: nowrap;
    }

    .tabela-imoveis tbody tr:hover {
        background-color: #f1f4f8;
    }

    .badge-tipo {
        background-color: #e8eef6;
        color: #17365d;
        padding: 6px 10px;
        border-radius: 20px;
        font-weight: 600;
    }

    .rodape {
        margin-top: 40px;
        padding: 20px;
        text-align: center;
        color: #6c757d;
        font-size: 0.9rem;
    }
</style>


</head>

<body>


<nav class="navbar navbar-imobiliaria">
    <div class="container">
        <a class="navbar-brand" href="/imoveis">
            🏢 Imobiliária
        </a>
    </div>
</nav>

<div class="container pagina">
    @yield('conteudo')
</div>

<div class="rodape">
    Sistema de Gestão Imobiliária
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>


</body>

</html>
