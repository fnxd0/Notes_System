@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card p-4 custom-card">
        <h2 class="text-center mb-4">Cadastro</h2>
        <form>
            <div class="mb-3">
                <label class="form-label">Nome Completo</label>
                <input type="text" class="form-control custom-input" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control custom-input" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control custom-input" required>
            </div>
            <div class="mb-3">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control custom-input" required>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">CEP</label>
                    <input type="text" class="form-control custom-input" required>
                </div>
                <div class="col-md-8 mb-3">
                    <label class="form-label">Endereço</label>
                    <input type="text" class="form-control custom-input" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Número</label>
                    <input type="text" class="form-control custom-input" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Bairro</label>
                    <input type="text" class="form-control custom-input" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Cidade</label>
                    <input type="text" class="form-control custom-input" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Complemento</label>
                <input type="text" class="form-control custom-input">
            </div>
            <div class="d-grid">
                <button class="btn btn-primary custom-button">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection
