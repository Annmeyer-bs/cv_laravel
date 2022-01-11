<nav class="nav">
    <div class="nav__item">
        <a href="{{ route("main") }}">Main Page</a>
    </div>
    @guest("web")
    <div class="nav__item">
        <a href="{{ route("login") }}">Login</a>
    </div>
    <div class="nav__item">
        <a href="{{ route("register") }}">Register</a>
    </div>
    @endguest
    @auth("web")
    <div class="nav__item">
        <a href="">Edit</a>
    </div>
    <div class="nav__item">
        <a href="{{ route("logout") }}">Logout</a>
    </div>
    @endauth
</nav>
