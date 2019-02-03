@extends('layout.app')

@section('content')

        <p>name: {{$id->name}}</p>
        <p>desc: {{$id->desc}}</p>
        <p>cat: {{$id->cat->color}}</p>


@endsection