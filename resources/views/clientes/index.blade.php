@extends('layout')
@section('titulo', 'Clientes Cadastrados')
@section('conteudo')

@if(session('mensagem'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('mensagem') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="titulo-pagina">
            Clientes Cadastrados
        </h2>

        <p class="subtitulo-pagina mb-0">
            Consulte e gerencie os clientes da imobiliária.
        </p>
    </div>

    <a href="{{ route('clientes.create') }}" class="btn btn-imobiliaria">
        + Novo Cliente
    </a>

</div>

<div class="tabela-imoveis">

    <div class="table-responsive">

        <table class="table table-hover table-striped mb-0">

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Data de Nascimento</th>
                    <th>Ações</th>
                </tr>

            </thead>

            <tbody>
                @foreach($clientes as $cliente)
                <tr>

                    <td> <strong>#{{ $cliente->idClientes }}</strong></td>
                    <td>{{ $cliente->nome }}</td>
                    <td> {{ $cliente->cpf }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->data_nascimento }}</td>



                    <td class="acoes">

                        <div class="d-flex gap-2">

                            <a href="{{ route('clientes.edit', $cliente->idClientes) }}"
                                class="btn btn-sm btn-warning">
                                Editar
                            </a>

                            <a href="{{ route('clientes.show', $cliente->idClientes) }}"
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