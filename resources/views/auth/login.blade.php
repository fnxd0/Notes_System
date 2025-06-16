@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
        <h2 class="text-center mb-3">Login</h2>
        {{-- <p class="text-center">Não tem uma conta?  --}}
            {{-- <a href="{{ route('register') }}" class="text-orange">Cadastre-se aqui</a> --}}
        </p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" required autofocus>
            </div>

            <div class="mb-4">
                <label class="form-label">Senha</label>
                <div class="input-group">
                    <input id="password" type="password" class="form-control" name="password" required>
                    <span class="input-group-text toggle-password" toggle="#password">
                        <i class="bi bi-eye-fill"></i>
                    </span>
                </div>
            </div>

            <div class="d-grid mb-2">
                <button type="submit" class="btn btn-custom">Iniciar Sessão</button>
            </div>

            <p class="text-center">
                Esqueceu sua senha? <a href="#" class="text-orange"><strong>Clique aqui</strong></a>
            </p>
        </form>
    </div>
</div>
@endsection
