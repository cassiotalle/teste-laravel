@extends('site.templates.template1')
@section('content')
  @if ($var1 == 123)
    <p>O valor de var é = a {{$var1}}</p>
  @else
    <p>O valor não está correto</p>
  @endif

  @unless ($var1 == 122)
    <p>Var não é = a 122</p>
  @endunless

  @for ($i=1 ; $i < $var1  ; $i = $i+$i )
    <p>Valor de $i {{$i}}</p>
  @endfor

  @foreach ($array1 as $key => $value)
    <p>{{$value}}</p>
  @endforeach

  @if (count($array2))
    @foreach ($arra2 as $value)
      <p>{{$value}}</p>
    @endforeach
  @else
    <p> $array2 está vazia </p>
  @endif
  {{--



  @foreach ($array2 as $value)
    <p>{{$value}}</p>
  @endforeach
  --}}
@endsection
