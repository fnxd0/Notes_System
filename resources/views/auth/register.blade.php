@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container" style="max-width: 700px;">
        <h2 class="text-center mb-3">Cadastro</h2>
        {{-- <p class="text-center">Já tem uma conta?  --}}
            {{-- <a href="{{ route('login') }}" class="text-orange">Faça login aqui</a> --}}
        </p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Dados Pessoais -->
            <h5 class="mb-3">Dados Pessoais</h5>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">CPF</label>
                    <input type="text" class="form-control" name="cpf" required>
                </div>
                <div class="col-md-8">
                    <label class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" name="nascimento" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
            </div>

            <!-- Senha -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="form-label">Senha</label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control" name="password" required>
                        <span class="input-group-text toggle-password" toggle="#password">
                            <i class="bi bi-eye-fill"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Confirme a Senha</label>
                    <div class="input-group">
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                        <span class="input-group-text toggle-password" toggle="#password_confirmation">
                            <i class="bi bi-eye-fill"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Endereço -->
            <h5 class="mb-3">Endereço</h5>

            <div class="row mb-3">
                <div class="col-md-3">
                    <label class="form-label">CEP</label>
                    <input type="text" class="form-control" name="cep" required>
                </div>
                <div class="col-md-5">
                    <label class="form-label">Cidade</label>
                    <input type="text" class="form-control" name="cidade" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Bairro</label>
                    <input type="text" class="form-control" name="bairro" required>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="form-label">Endereço</label>
                    <input type="text" class="form-control" name="endereco" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Número</label>
                    <input type="text" class="form-control" name="numero" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Complemento</label>
                    <input type="text" class="form-control" name="complemento">
                </div>
            </div>

            <div class="d-grid mb-2">
                <button type="submit" class="btn btn-custom">Cadastrar</button>
            </div>

            <p class="text-center">
                Esqueceu sua senha? <a href="#" class="text-orange"><strong>Clique aqui</strong></a>
            </p>
        </form>
    </div>
</div>
@endsection
