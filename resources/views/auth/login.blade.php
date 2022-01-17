@extends('layout.app')

@section('title','Login')

@section('content')
    <div class="container__form">
        <form action="{{route("login-act")}}" method="POST">
            @csrf
            <div class="form form__input">
                <p>Login</p>
                <input class="input" name="login" type="text" placeholder="Введите логин" required>
            </div>
            <div class="form form__input">
                <p>Pass</p>
                <input class="input" name="password" type="password" placeholder="Введите пароль" required>
            </div>
            <button type="submit" name="form-login">Submit</button>
            <br>
        </form>
    </div>
@endsection
