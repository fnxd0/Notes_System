@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card p-4 custom-card">
        <h2 class="text-center mb-4">Login</h2>
        <form>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control custom-input" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control custom-input" required>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary custom-button">Entrar</button>
            </div>
        </form>
    </div>
</div>
@endsection
