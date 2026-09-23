@extends('layout')

@section('titulo', 'Página Inicial')

@section('conteudo')

<div class="text-center mb-5">


<h1 class="titulo-pagina">
    Sistema de Gestão Imobiliária
</h1>

<p class="subtitulo-pagina">
    Selecione uma opção para continuar.
</p>


</div>

<div class="row justify-content-center">


<div class="col-md-5 mb-4">

    <div class="card-imobiliaria text-center">

        <h3 class="mb-3">
            🏠 Imóveis
        </h3>

        <p class="text-muted">
            Cadastre, consulte e altere os imóveis da imobiliária.
        </p>

        <a href="{{ route('imoveis.index') }}"
           class="btn btn-imobiliaria">
            Gerenciar Imóveis
        </a>

    </div>

</div>

<div class="col-md-5 mb-4">

    <div class="card-imobiliaria text-center">

        <h3 class="mb-3">
            👤 Clientes
        </h3>

        <p class="text-muted">
            Cadastre, consulte e altere os clientes da imobiliária.
        </p>

        <a href="{{ route('clientes.index') }}"
           class="btn btn-imobiliaria">
            Gerenciar Clientes
        </a>

    </div>

</div>


</div>

@endsection
