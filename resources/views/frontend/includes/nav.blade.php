<nav id="navbar" class="navbar">
    <ul>
        <li><a href="{{ route('index') }}">Blog</a></li>
        <li class="dropdown">
            <p class="mb-0 pr-0 pl-[30px] font-[500]">Categories</p>
            <ul>
                @foreach ($categories as $category)
                    <li><a href="{{ route('category', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </li>

        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>

        @if (Auth::check())
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bx bx-power-off "></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @endif
    </ul>
</nav>
