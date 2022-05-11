
@section('cabecalho')
<nav class="navbar navbar-expand-lg navbar-light bg-light"  id="app">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Produtos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 pull-right">
                <li class="nav-item">
                    @guest
                        <a class="nav-link" href="{{ route('login') }}">Login</a> 
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </li>
                <li class="nav-item">
                    @guest
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection
