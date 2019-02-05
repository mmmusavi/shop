@extends('layout.app')

@section('content')

        <form method="post" action="/login">
                @csrf

                <p>{{Session::get('error')}}</p>

                <label for="user">email:</label>
                <input id="user" type="text" name="email" />
                <br>

                <label for="pass">pass:</label>
                <input id="pass" type="password" name="pass" />
                <br>

                <br>
                <input type="submit" value="login">
        </form>

@endsection