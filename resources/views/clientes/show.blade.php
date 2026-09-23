@extends('layout')
@section('titulo', 'Consultar Cliente')
@section('conteudo')

<div class="mb-4">

    <h2 class="titulo-pagina">
        Consultar Cliente
    </h2>

    <p class="subtitulo-pagina">
        Visualize os dados do cliente cadastrado.
    </p>

</div>

<div class="card-imobiliaria">

    <div class="row">

        <div class="col-md-6 mb-3">

            <label class="form-label">
                Nome
            </label>

            <div class="form-control">
                {{ $cliente->nome }}
            </div>

        </div>

        <div class="col-md-6 mb-3">

            <label class="form-label">
                CPF
            </label>

            <div class="form-control">
                {{ $cliente->cpf }}
            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-md-6 mb-3">

            <label class="form-label">
                Telefone
            </label>

            <div class="form-control">
                {{ $cliente->telefone }}
            </div>

        </div>

        <div class="col-md-6 mb-3">

            <label class="form-label">
                E-mail
            </label>

            <div class="form-control">
                {{ $cliente->email }}
            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-md-6 mb-3">

            <label class="form-label">
                Data de Nascimento
            </label>

            <div class="form-control">
                {{ $cliente->data_nascimento->format('d/m/Y') }}
            </div>

        </div>

    </div>


    <div class="d-flex gap-2 mt-3 align-items-center">

        <a href="{{ route('clientes.edit', $cliente->idClientes) }}"
           class="btn btn-warning">
            Editar
        </a>


        <form action="{{ route('clientes.destroy', $cliente->idClientes) }}"
              method="POST"
              class="m-0">

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">
                Excluir
            </button>

        </form>


        <a href="{{ route('clientes.index') }}"
           class="btn btn-secondary">
            Voltar
        </a>

    </div>

</div>

@endsection

