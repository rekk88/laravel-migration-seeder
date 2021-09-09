@extends('layouts.app')

@section('main')

@foreach($vacanze as $vacanza)
  <div>{{$vacanza}}</div>
@endforeach

@endsection