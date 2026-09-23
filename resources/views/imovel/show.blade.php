@extends('layout')
@section('titulo', 'Dados do Imóvel')
@section('conteudo')


<div class="mb-4">
    <h1 class="titulo-pagina">Dados do Imóvel</h1>
    <p class="subtitulo-pagina">
        Consulte as informações cadastradas.
    </p>
</div>

<div class="card-imobiliaria">

    <div class="row">

        <div class="col-md-6 mb-3">
            <label class="form-label">Tipo do imóvel</label>

            <input type="text"
                class="form-control"
                disabled
                value="{{ $imovel->tipo }}">
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Finalidade</label>

            <input type="text"
                class="form-control"
                disabled
                value="{{ $imovel->finalidade }}">
        </div>

    </div>

    <div class="row">

        <div class="col-md-8 mb-3">
            <label class="form-label">Endereço</label>

            <input type="text"
                class="form-control"
                disabled
                value="{{ $imovel->endereco }}">
        </div>

        <div class="col-md-4 mb-3">
            <label class="form-label">Número</label>

            <input type="text"
                class="form-control"
                disabled
                value="{{ $imovel->numero }}">
        </div>

    </div>

    <div class="row">

        <div class="col-md-6 mb-3">
            <label class="form-label">Complemento</label>

            <input type="text"
                class="form-control"
                disabled
                value="{{ $imovel->complemento }}">
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Bairro</label>

            <input type="text"
                class="form-control"
                disabled
                value="{{ $imovel->bairro }}">
        </div>

    </div>

    <div class="row">

        <div class="col-md-6 mb-3">
            <label class="form-label">Cidade</label>

            <input type="text"
                class="form-control"
                disabled
                value="{{ $imovel->cidade }}">
        </div>

        <div class="col-md-3 mb-3">
            <label class="form-label">UF</label>

            <input type="text"
                class="form-control"
                disabled
                value="{{ $imovel->uf }}">
        </div>

        <div class="col-md-3 mb-3">
            <label class="form-label">CEP</label>

            <input type="text"
                class="form-control"
                disabled
                value="{{ $imovel->cep }}">
        </div>

    </div>

    <div class="mb-4">
        <label class="form-label">Descrição</label>

        <input type="text"
            class="form-control"
            disabled
            value="{{ $imovel->descricao }}">
    </div>

    <div class="border-top pt-4">

        <div class="d-flex justify-content-between align-items-center">

            <a href="/imoveis" class="btn btn-secondary">
                Voltar
            </a>

            <form method="post"
                action="/imoveis/{{ $imovel->idImoveis }}"
                onsubmit="return confirm('Deseja realmente excluir este imóvel?')">

                @CSRF
                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                    Excluir Imóvel
                </button>

            </form>

        </div>

    </div>

</div>


@endsection
