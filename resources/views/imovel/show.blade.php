@extends('layout')
@section('titulo', 'Dados do Imóvel')
@section('conteudo')

    <h1>Dados do Imóvel</h1>
    <form method="post" action="/imoveis/{{$imovel->idImoveis}}">
        @CSRF
        @method('DELETE')
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo do imóvel</label>
            <input type="text" id="tipo" name="tipo" class="form-control" disabled value="{{ $imovel->tipo }}">
        </div>
        <div class="mb-3">
            <label for="finalidade" class="form-label">Finalidade do imóvel:</label>
            <input type="text" id="finalidade" name="finalidade" class="form-control" disabled value="{{ $imovel->finalidade }}">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço (Rua, Avenida, Estrada e etc...)</label>
            <input type="text" id="endereco" name="endereco" class="form-control" disabled value="{{ $imovel->endereco }}">
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Número do imóvel</label>
            <input type="text" id="numero" name="numero" class="form-control" disabled value="{{ $imovel->numero }}">
        </div>
        <div class="mb-3">
            <label for="complemento" class="form-label">Complemento (se necessário)</label>
            <input type="text" id="complemento" name="complemento" class="form-control" disabled value="{{ $imovel->complemento }}">
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" id="bairro" name="bairro" class="form-control" disabled value="{{ $imovel->bairro }}">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" id="cidade" name="cidade" class="form-control" disabled value="{{ $imovel->cidade }}">
        </div>
        <div class="mb-3">
            <label for="uf" class="form-label">UF</label>
            <input type="text" id="uf" name="uf" class="form-control" disabled value="{{ $imovel->uf }}">
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">Cep</label>
            <input type="text" id="cep" name="cep" class="form-control" disabled value="{{ $imovel->cep }}">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição do imóvel</label>
            <input type="text" id="descricao" name="descricao" class="form-control" disabled value="{{ $imovel->descricao }}">
        </div>
        <a href="/imoveis" class="btn btn-secondary">Voltar</a>
        <p>Deseja excluir esse Registro?</p>
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
@endsection