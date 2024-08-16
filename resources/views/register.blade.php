@extends('layouts/app')


@push('styles')
<link rel="stylesheet" href="{{ asset('style/register.css') }}">
@endpush

@section('content')

<div class="containerRegister">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        Name: <br>
        <input type="text" name="name" placeholder="Name"> <br>

        Email: <br>
        <input type="email" name="email" placeholder="Email"> <br>

        Password: <br>
        <input type="password" name="password" placeholder="Password"> <br>

        Gender: <br>
        <input type="radio" id="html" name="gender" value="Male" required> Mele
        <input type="radio" id="html" name="gender" value="Female" required> Female  <br><br>

        <button type="submit" class="btn btn-success">Register</button>
    </form>
</div>

@endsection
