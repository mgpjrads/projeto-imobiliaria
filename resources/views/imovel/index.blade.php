@extends('layout')
@section('titulo', 'Imóveis Cadastrados')
@section('conteudo')

@if(session('mensagem'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('mensagem') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="titulo-pagina">Imóveis Cadastrados</h2>
        <p class="subtitulo-pagina mb-0">
            Consulte e gerencie os imóveis da imobiliária.
        </p>
    </div>

    <a href="/imoveis/create" class="btn btn-imobiliaria">
        + Novo Imóvel
    </a>
</div>

<div class="tabela-imoveis">
    <div class="table-responsive">
        <table class="table table-hover table-striped mb-0">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Finalidade</th>
                    <th>Endereço</th>
                    <th>Número</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>CEP</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                @foreach($imoveis as $i)

                    <tr>

                        <td>
                            <strong>#{{ $i->idImoveis }}</strong>
                        </td>

                        <td>
                            <span class="badge-tipo">
                                {{ $i->tipo }}
                            </span>
                        </td>

                        <td>{{ $i->finalidade }}</td>
                        <td>{{ $i->endereco }}</td>
                        <td>{{ $i->numero }}</td>
                        <td>{{ $i->complemento }}</td>
                        <td>{{ $i->bairro }}</td>
                        <td>{{ $i->cidade }}</td>
                        <td>{{ $i->uf }}</td>
                        <td>{{ $i->cep }}</td>
                        <td>{{ $i->descricao }}</td>

                        <td class="acoes">

                            <div class="d-flex gap-2">

                                <a href="/imoveis/{{ $i->idImoveis }}/edit"
                                    class="btn btn-sm btn-warning">
                                    Editar
                                </a>

                                <a href="/imoveis/{{ $i->idImoveis }}"
                                    class="btn btn-sm btn-info text-white">
                                    Consultar
                                </a>

                            </div>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>
    </div>
</div>

@endsection