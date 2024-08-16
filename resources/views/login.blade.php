@extends('layouts/app')

@push('styles')
<link rel="stylesheet" href="{{ asset('style/login.css') }}">
@endpush

@section('content')

<div class="containerLogin">
    <h1 class="loginHeader">Login to account</h1>
    <form action="{{ route('loginToPage') }}" method="POST">
        @csrf
        Password: <br>
        <input type="password" name="password" placeholder="Name"> <br>

        Email: <br>
        <input type="email" name="email" placeholder="Email"> <br> <br>

        <button type="submit" class="btn btn-success">Login</button> <br> <br>

        <p>Don't have an account? Register here <a href="{{ route('register.page') }}">Register</a></p>

    </form>
</div>

@endsection