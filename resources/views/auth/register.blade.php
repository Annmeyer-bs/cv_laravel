@extends('layout.app')

@section('title','Register')

@section('content')
    <div class="container__form">
        <form action="{{route("registration-act")}}" method="POST">
            @csrf
            <div class="form form__input">
                <p>E-mail</p>
                <input class="input @error('email') form-control @enderror" name="email" type="email"
                       placeholder="Введите email" required><br>
            </div>
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <div class="form form__input">
                <p>Login</p>
                <input class="input @error('email') form-control @enderror" name="login" type="text"
                       placeholder="Введите логин" required><br>
            </div>
            @error('login')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <div class="form form__input">
                <p>Pass</p>
                <input class="input @error('email') form-control @enderror" name="password" type="password"
                       placeholder="Введите пароль" required><br>
            </div>
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <div class="form form__input">
                <p>Repeat&nbsp;Pass</p>
                <input class="input @error('email') form-control @enderror" name="password_confirmation"
                       type="password" placeholder="Введите пароль" required><br>
            </div>
            @error('password_confirmation')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <button type="submit" name="form-register">Submit</button>
            <br>
        </form>
    </div>
@endsection
