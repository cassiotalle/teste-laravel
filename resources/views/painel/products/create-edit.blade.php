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

<form class="" action="{{route('produtos.store')}}" method="post">
  {!!csrf_field()!!}
  <div class="form-group">
  <label for="name">Nome</label>
  <input type="input" class="form-control" name="name" id="name" placeholder="Nome" value="{{old('name')}}">
</div>
<div class="form-group">
  <label for="number">Numero</label>
  <input type="input" class="form-control" name="number" id="number" placeholder="Número" value="{{old('number')}}">
</div>

<select class="category" name="category">
  <option value="">Escolha a categoria</option>
  @foreach ($categorys as $category)
    <option value="{{$category}}">{{$category}}</option>
  @endforeach
</select>

<div class="checkbox">
  <label>
    <input type="checkbox" name="active" value="1"> Ativo
  </label>
</div>
<div class="form-group">
<textarea name="description" class="form-control" placeholder="Descricao" value="{{old('description')}}"></textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-default">Submit</button>
</div>
</form>

@endsection
