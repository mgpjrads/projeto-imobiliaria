@extends('layout')
@section('titulo', 'Editar Imóvel')
@section('conteudo')


<div class="mb-4">
    <h1 class="titulo-pagina">Editar Imóvel</h1>
    <p class="subtitulo-pagina">
        Altere os dados cadastrados deste imóvel.
    </p>
</div>

<div class="card-imobiliaria">

    <form method="post" action="/imoveis/{{ $imovel->idImoveis }}">

        @CSRF
        @method('PUT')

        <div class="row">

            <div class="col-md-6 mb-3">
                <label for="tipo" class="form-label">
                    Tipo do imóvel
                </label>

                <input type="text"
                    id="tipo"
                    name="tipo"
                    class="form-control"
                    required
                    value="{{ $imovel->tipo }}">
            </div>

            <div class="col-md-6 mb-3">
                <label for="finalidade" class="form-label">
                    Finalidade
                </label>

                <input type="text"
                    id="finalidade"
                    name="finalidade"
                    class="form-control"
                    required
                    value="{{ $imovel->finalidade }}">
            </div>

        </div>

        <div class="row">

            <div class="col-md-8 mb-3">
                <label for="endereco" class="form-label">
                    Endereço
                </label>

                <input type="text"
                    id="endereco"
                    name="endereco"
                    class="form-control"
                    required
                    value="{{ $imovel->endereco }}">
            </div>

            <div class="col-md-4 mb-3">
                <label for="numero" class="form-label">
                    Número
                </label>

                <input type="text"
                    id="numero"
                    name="numero"
                    class="form-control"
                    required
                    value="{{ $imovel->numero }}">
            </div>

        </div>

        <div class="row">

            <div class="col-md-6 mb-3">
                <label for="complemento" class="form-label">
                    Complemento
                </label>

                <input type="text"
                    id="complemento"
                    name="complemento"
                    class="form-control"
                    value="{{ $imovel->complemento }}">
            </div>

            <div class="col-md-6 mb-3">
                <label for="bairro" class="form-label">
                    Bairro
                </label>

                <input type="text"
                    id="bairro"
                    name="bairro"
                    class="form-control"
                    required
                    value="{{ $imovel->bairro }}">
            </div>

        </div>

        <div class="row">

            <div class="col-md-6 mb-3">
                <label for="cidade" class="form-label">
                    Cidade
                </label>

                <input type="text"
                    id="cidade"
                    name="cidade"
                    class="form-control"
                    required
                    value="{{ $imovel->cidade }}">
            </div>

            <div class="col-md-3 mb-3">
                <label for="uf" class="form-label">
                    UF
                </label>

                <input type="text"
                    id="uf"
                    name="uf"
                    class="form-control"
                    required
                    value="{{ $imovel->uf }}">
            </div>

            <div class="col-md-3 mb-3">
                <label for="cep" class="form-label">
                    CEP
                </label>

                <input type="text"
                    id="cep"
                    name="cep"
                    class="form-control"
                    required
                    value="{{ $imovel->cep }}">
            </div>

        </div>

        <div class="mb-4">
            <label for="descricao" class="form-label">
                Descrição do imóvel
            </label>

            <input type="text"
                id="descricao"
                name="descricao"
                class="form-control"
                value="{{ $imovel->descricao }}">
        </div>

        <div class="d-flex gap-2">

            <button type="submit" class="btn btn-imobiliaria">
                Salvar Alterações
            </button>

            <a href="/imoveis" class="btn btn-secondary">
                Cancelar
            </a>

        </div>

    </form>

</div>


@endsection
