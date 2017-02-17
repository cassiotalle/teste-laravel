@extends('painel.products.template')

@section('content')
  <h1>Adicionar</h1>

<form class="" action="{{route('produtos.store')}}" method="post">

@if (isset($product))

{!!Form::model($product, ['route' => ['produtos.update', $product->id], 'files' => true, 'class'=>'form'] )!!}

{{ method_field('PUT') }}

@else
{!!Form::open(['route' => 'produtos.store', 'class' => 'form'])!!}
@endif



  {!!csrf_field()!!}
  <div class="form-group">
  {!! Form::text('name', null, ['placeholder'=>"Nome", 'class'=> 'form-control'] ) !!}
  </div>
<div class="form-group">
  {!! Form::text('number', null, ['placeholder'=>"Número", 'class'=> 'form-control'] ) !!}
</div>

  {!!Form::select('category', $categorys, null, ['class' => 'form-control'])!!}

<div class="checkbox">
  <label>
    {!! Form::checkbox('active') !!}
    Ativo?
  </label>
</div>
<div class="form-group">
{!! Form::textarea('description', null, ['placeholder'=>"Descrição", 'class'=> 'form-control'] ) !!}
</div>
<div class="form-group">
<button type="submit" class="btn btn-default">Submit</button>
</div>
{!!Form::close()!!}

@endsection
