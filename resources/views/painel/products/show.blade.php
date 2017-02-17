@extends('painel.products.template')

@section('content')
  <h1 class="title_pg"> Produto: {{$product->name}} </h1>
  <p><b>Ativo</b>: {{$product->active}}</p>
  <p><b>Nome</b>: {{$product->name}}</p>
  <p><b>Número</b>: {{$product->number}}</p>
  <p><b>Descrição</b>: {{$product->description}}</p>
@endsection
