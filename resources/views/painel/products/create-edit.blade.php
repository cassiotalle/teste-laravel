@extends('painel.products.template')

@section('content')
  <h1>Adicionar</h1>

  @if (isset($errors) && count($errors)>0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
      @endforeach
    </div>
  @endif


@if (isset($product))
  <form class="" action="{{route('produtos.update', $product->id)}}" method="post">
    {!! method_field('PUT') !!}
@else
  <form class="" action="{{route('produtos.store')}}" method="post">
@endif

  {!!csrf_field()!!}
  <div class="form-group">
  <label for="name">Nome</label>
  <input type="input" class="form-control" name="name" id="name" placeholder="Nome" value="{{$product->name or old('name')}}">
</div>
<div class="form-group">
  <label for="number">Numero</label>
  <input type="input" class="form-control" name="number" id="number" placeholder="Número" value="{{$product->number or old('number')}}">
</div>

<select class="category" name="category">
  <option value="">Escolha a categoria</option>
  @foreach ($categorys as $category)
    @if (isset($product) && $product->category == $category)
      <option value="{{$category}}" selected="">{{$category}}</option>
    @else
      <option value="{{$category}}">{{$category}}</option>
    @endif
  @endforeach
</select>

<div class="checkbox">
  <label>
    <input type="checkbox" name="active" value="1" @if (isset($product) && $product->active ) checked @endif > Ativo
  </label>
</div>
<div class="form-group">
<textarea name="description" class="form-control" placeholder="Descricao">{{$product->description or old('description')}}</textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-default">Submit</button>
</div>
</form>

@endsection
