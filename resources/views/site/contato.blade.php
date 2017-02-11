@extends('site.templates.template1')

@section('content')
  Página de contato
  {{$var1 or 'Variavel não existe'}}
  {!! $alert !!}
@endsection
