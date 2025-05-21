@extends('layouts.public')

@section('title', 'Login - Health Center')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
<div class="login-container">
    <div class="login-box">
        <h3>Login</h3>
        <p style="text-align:center;">Utilizza questa form per autenticarti al sito</p>

        <form method="POST" action="{{ route('login') }}" class="contact-form">
            @csrf

            <div class="wrap-input">
                <p style="text-align:center;">Se non hai già un account <a href="{{ route('register') }}">registrati</a></p>
            </div>

            <div class="wrap-input">
                <label for="username" class="label-input">Nome Utente</label>
                <input type="text" id="username" name="username" class="input" value="{{ old('username') }}" required autofocus>
                @error('username')
                    <ul class="errors">
                        <li>{{ $message }}</li>
                    </ul>
                @enderror
            </div>

            <div class="wrap-input" style="margin-top: 20px;">
                <label for="password" class="label-input">Password</label>
                <input type="password" id="password" name="password" class="input" required>
                @error('password')
                    <ul class="errors">
                        <li>{{ $message }}</li>
                    </ul>
                @enderror
            </div>

            <div class="wrap-input" style="margin-top: 15px;">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ms-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="container-form-btn" style="margin-top: 20px;">
                <button type="submit" class="form-btn1" style="width: 100%;">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
