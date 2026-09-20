@extends('layout')
@section('titulo', 'Imóveis Cadastrados')
@section('conteudo')

          @if(session('mensagem'))
            <p>{{session('mensagem')}}</p>
          @endif
          <h2>Imóveis</h2>
          <a href="/imoveis/create" class="btn btn-success mb-3">Novo Registro</a>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th><th>Tipo</th><th>Finalidade</th><th>Endereço</th><th>Número</th><th>Bairro</th><th>Cidade</th><th>UF</th><th>Cep</th><th>Descrição</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach($imoveis as $i)
                <tr>
                  <td>{{$i->id}}</td>
                  <td>{{$i->tipo}}</td>
                  <td>{{$i->finalidade}}</td>
                  <td>{{$i->endereco}}</td>
                  <td>{{$i->numero}}</td>
                  <td>{{$i->complemento}}</td>
                  <td>{{$i->bairro}}</td>
                  <td>{{$i->cidade}}</td>
                  <td>{{$i->uf}}</td>
                  <td>{{$i->cep}}</td>
                  <td>{{$i->descricao}}</td>
                  <td class="d-flex gap-2">
                    <a href="/imoveis/{{ $i->id }}/edit" class="btn btn-sm btn-warning">Editar</a>
                    <a href="/imoveis/{{ $i->id }}" class="btn btn-sm btn-info">Consultar</a>
                  </td>
                </tr>
              @endforeach
                
              
            </tbody>
          </table>

@endsection