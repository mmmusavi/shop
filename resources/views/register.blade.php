@extends('layout.app')

@section('content')

        <form method="post" action="/register-post">
                @csrf

                @if ($errors->any())
                        <div class="alert alert-danger">
                                <ul>
                                        @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                        @endforeach
                                </ul>
                        </div>
                @endif

                {{Session::get('test')}}



                <br>

                <label for="name">name:</label>
                <input id="name" type="text" name="name" value="{{old('name')}}" />
                <br>

                <label for="user">user:</label>
                <input id="user" type="text" name="email" value="{{old('email')}}" />
                <br>

                <label for="pass">pass:</label>
                <input id="pass" type="password" name="pass" />
                <br>

                <label for="repass">repass:</label>
                <input id="repass" type="password" name="repass" />

                <br>
                <input type="submit" value="send">
        </form>

@endsection