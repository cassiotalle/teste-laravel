@extends('painel.products.template')

@section('content')
  <h1>Adicionar</h1>
  <div class="form-group">
  <label for="name">Nome</label>
  <input type="input" class="form-control" id="name" placeholder="Nome">
</div>
<div class="form-group">
  <label for="number">Numero</label>
  <input type="input" class="form-control" id="number" placeholder="Número">
</div>
<div class="form-group">
  <label for="exampleInputFile">File input</label>
  <input type="file" id="exampleInputFile">
  <p class="help-block">Example block-level help text here.</p>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox"> Ativo
  </label>
</div>
<button type="submit" class="btn btn-default">Submit</button>
@endsection
