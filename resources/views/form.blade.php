@extends('layout.app')

@section('content')

        <form method="post" action="/form">
                @csrf


                <label for="user">name:</label>
                <input id="user" type="text" name="name" />
                <br>
                <label for="user">family:</label>
                <input id="user" type="text" name="family" />
                <br>
                <label for="user">color:</label>
                <input id="user" type="text" name="color" />
                <br>
                <label for="user">phone:</label>
                <input id="user" type="text" name="phone" />
                <br>

                <br>
                <input type="submit" value="send">
        </form>

@endsection