<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('style/app.css') }}">
    @stack('styles')
    <title>Trade Market</title>
</head>
<body>
    <div class="header-container">
        <div class="header">
        <a href="{{ route('home') }}">
            <h1>Trade Market</h1>
        </div>
        <div class="nav">
            <nav class="nav-bar">
                <a href="{{ route('create.page') }}">
                    <img src="{{ asset('photo/sale.jpg') }}" alt="Add" class="img">
                </a>
            </nav>
        </div>
        <div class="auth">
            @guest
                <a href="{{ route('login.page') }}" class="btn btn-primary btnLogin">Login</a>
                <a href="{{ route('register.page') }}" class="btn btn-primary btnRegister">Register</a>
            @endguest

            @auth
                <span class="user-name">Welcome, {{ Auth::user()->seller_name }}</span>
                <a href="{{ route('logout') }}" class="btn btn-primary btnLogout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth
        </div>
    </div>
    <div>
        @yield('content')
    </div>
</body>
</html>
