@extends('layout.app')

@section('content')

        <p>name: {{$id->name}}</p>
        <p>color: {{$id->color}}</p>

        <h1>products:</h1>

        @foreach($id->products as $p)
            <p>{{$p->name}}</p>
            <p>{{$p->desc}}</p>
                <p>----</p>
        @endforeach

@endsection