<nav>
    <a href="{{ route('dashboard') }}">Dashboard</a> |
    <a href="{{ route('profile') }}">Profile</a> |
    <a href="{{ route('pengelolaan') }}">Pengelolaan</a> |
    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit">Logout</button>
    </form>
</nav>