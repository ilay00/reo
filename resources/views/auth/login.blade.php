@extends('layouts.app')

@section('content')
    <div class="Header">
        <div class="container">
            <div class="menu-block">
                <nav class="Menu">
                    <a aria-current="page" class="menu-links" href="/">На главную</a>
                    <a class="button-link" href="/register">Зарегистрироваться</a>
                </nav>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="form-block">
                <h1 class="auth-header">{{ __('Авторизация') }}</h1>
                    <form class="auth-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <input id="email" type="email" class="admin-inputs @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-MAIL') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input id="password" type="password" class="admin-inputs @error('password') is-invalid @enderror" placeholder="{{ __('ПАРОЛЬ') }}" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <button type="submit" class="auth-button">
                            {{ __('войти') }}
                        </button>

                        <div class="remember-block">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="remember-label" for="remember">
                                {{ __('Запомнить меня') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <div class="password-request">
                                <a class="admin-link" href="{{ route('password.request') }}">
                                    {{ __('Забыли пароль?') }}
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>


@endsection
