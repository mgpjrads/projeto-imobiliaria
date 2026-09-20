@extends('layout')
@section('titulo', 'Editar Imóvel')
@section('conteudo')

    <h1>Editar Imóvel</h1>
    <form method="post" action="/imoveis">
        @CSRF
        
        <div class="mb-3">
            <label for="tipo" class="form-label">Informe o tipo do imóvel</label>
            <input type="text" id="tipo" name="tipo" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="finalidade" class="form-label">Informe a finalidade do imóvel:</label>
            <input type="text" id="finalidade" name="finalidade" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Informe o endereço (Rua, Avenida, Estrada e etc...)</label>
            <input type="text" id="endereco" name="endereco" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Informe o número do imóvel</label>
            <input type="text" id="numero" name="numero" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="complemento" class="form-label">Informe o complemento (se necessário)</label>
            <input type="text" id="complemento" name="complemento" class="form-control">
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Informe o bairro</label>
            <input type="text" id="bairro" name="bairro" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Informe a cidade</label>
            <input type="text" id="cidade" name="cidade" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="uf" class="form-label">uf</label>
            <input type="text" id="uf" name="uf" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">informe o cep</label>
            <input type="text" id="cep" name="cep" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição do imóvel</label>
            <input type="text" id="descricao" name="descricao" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection