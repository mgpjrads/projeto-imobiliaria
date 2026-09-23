@extends('layout')
@section('titulo', 'Novo Imóvel')
@section('conteudo')

<div class="mb-4">
    <h1 class="titulo-pagina">Novo Imóvel</h1>
    <p class="subtitulo-pagina">Preencha os dados para cadastrar um novo imóvel.</p>
</div>

<div class="card-imobiliaria">
    <form method="post" action="/imoveis">
        @CSRF


    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="tipo" class="form-label">Tipo do imóvel</label>
            <input type="text" id="tipo" name="tipo" class="form-control"
                placeholder="Ex.: Casa, apartamento, terreno..." required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="finalidade" class="form-label">Finalidade</label>
            <input type="text" id="finalidade" name="finalidade" class="form-control"
                placeholder="Ex.: Venda ou aluguel" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" id="endereco" name="endereco" class="form-control"
                placeholder="Rua, Avenida, Estrada..." required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" id="numero" name="numero" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" id="complemento" name="complemento" class="form-control"
                placeholder="Apartamento, bloco, sala...">
        </div>

        <div class="col-md-6 mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" id="bairro" name="bairro" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" id="cidade" name="cidade" class="form-control" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="uf" class="form-label">UF</label>
            <input type="text" id="uf" name="uf" class="form-control"
                placeholder="SP" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" id="cep" name="cep" class="form-control"
                placeholder="00000-000" required>
        </div>
    </div>

    <div class="mb-4">
        <label for="descricao" class="form-label">Descrição do imóvel</label>
        <input type="text" id="descricao" name="descricao" class="form-control"
            placeholder="Digite uma descrição do imóvel">
    </div>

    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-imobiliaria">Cadastrar Imóvel</button>
        <a href="/imoveis" class="btn btn-secondary">Cancelar</a>
    </div>
</form>


</div>

@endsection
