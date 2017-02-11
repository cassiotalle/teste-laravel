@extends('site.templates.template1')

@section('content')

<h1>Página do site</h1>
<p>{{$teste1}} - {{$teste2}} - {{$teste3}}</p>

@include('includes.sidebar')
@endsection

@push('script')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endpush
