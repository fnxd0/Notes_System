<nav class="navbar navbar-expand-lg navbar-dark custom-header">
    <div class="container">
        <a class="navbar-brand" href="#">Sistema de Notas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Cadastro</a></li>
            </ul>
        </div>
    </div>
</nav>
