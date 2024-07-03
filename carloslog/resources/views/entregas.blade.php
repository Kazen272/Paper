@extends('layouts.main')

@section('title', 'Carlos Log')

@section('content')


@foreach ($events as $event)
    <p>{{$event}}</p>
@endforeach


@endsection