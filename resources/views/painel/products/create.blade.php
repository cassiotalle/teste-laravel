@extends('painel.products.template')

@section('content')
  <h1>Adicionar</h1>

<form class="" action="{{route('produtos.store')}}" method="post">
  {!!csrf_field()!!}
  <div class="form-group">
  <label for="name">Nome</label>
  <input type="input" class="form-control" name="name" id="name" placeholder="Nome">
</div>
<div class="form-group">
  <label for="number">Numero</label>
  <input type="input" class="form-control" name="number" id="number" placeholder="Número">
</div>

<select class="category" name="category">
  @foreach ($categorys as $category)
    <option value="{{$category}}">{{$category}}</option>
  @endforeach
</select>

<div class="checkbox">
  <label>
    <input type="checkbox" name="active"> Ativo
  </label>
</div>
<div class="form-group">
<textarea name="description" class="form-control" placeholder="Descricao"></textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-default">Submit</button>
</div>
</form>

@endsection
