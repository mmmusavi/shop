@extends('layout.app')

@section('content')

        @if(Auth::guest())
                <p>you are a guest!</p>
        @else
                <p>you are {{Auth::user()->email}}!!</p>
        @endif

        {{--<p>name: {{$id->name}}</p>--}}
        {{--<p>desc: {{$id->desc}}</p>--}}
        {{--<p>cat: {{$id->cat->color}}</p>--}}


@endsection