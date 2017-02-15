@extends('painel.products.template')

@section('section')
  <h1 class="title_pg">Listagem </h1>
  <a href="{{route('produtos.create')}}" class="create btn btn-default"><span class="glyphicon glyphicon-plus"></span>&nbsp Cadastrar</a>
  <table class="table table-bordered table-striped">
    <tr>
        <th>Nome</th>
        <th>Descricao</th>
        <th width="100px">Ações</th>
    </tr>
    @foreach ($products as $product)
    <tr>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>
        <a href="#" class="edit actions"><span class="glyphicon glyphicon-pencil"></span></a>
        <a href="#" class="delete actions"><span class="glyphicon glyphicon-trash"></span></a>
      </td>
    </tr>
    @endforeach
  </table>

@endsection
