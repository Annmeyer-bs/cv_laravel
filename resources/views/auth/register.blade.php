@extends('layout.app')

@section('title','Register')

@section('content')
    <div class="container__form">
        <form action="{{route("register-act")}}" method="POST">
            @csrf
            <div class="form form__input">
                <p>E-mail</p>
                <input class="input @error('email') border-red-500 @enderror" name="email" type="email" placeholder="Введите email"><br>
                @error('email')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="form form__input">
                <p>Login</p>
                <input class="input @error('email') border-red-500 @enderror" name="login" type="text" placeholder="Введите логин"><br>
                @error('login')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="form form__input">
                <p>Pass</p>
                <input class="input @error('email') border-red-500 @enderror" name="password" type="password" placeholder="Введите пароль"><br>
                @error('password')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="form form__input">
                <p>Repeat&nbsp;Pass</p>
                <input class="input @error('email') border-red-500 @enderror" name="password_confirmation" type="password" placeholder="Введите пароль"><br>
                @error('password_confirmation')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" name="form-register">Submit</button>
            <br>
        </form>
    </div>
@endsection
