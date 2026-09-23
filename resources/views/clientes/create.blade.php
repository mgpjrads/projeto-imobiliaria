@extends('layout')
@section('titulo', 'Novo Cliente')
@section('conteudo')

<div class="mb-4">
    <h2 class="titulo-pagina">Novo Cliente</h2>
    <p class="subtitulo-pagina">Preencha os dados para cadastrar um novo cliente.</p>
</div>

<div class="card-imobiliaria">
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" id="cpf" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>
        </div>
    </div>

    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-imobiliaria">Cadastrar Cliente</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</form>


</div>

@endsection
