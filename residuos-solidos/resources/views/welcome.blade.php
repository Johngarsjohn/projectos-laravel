<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Gestão de Resíduos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('utentes.create') }}">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container text-center mt-5">
    <h1 class="display-4">Bem-vindo ao Sistema de Gestão de Resíduos</h1>
    <p class="lead">Uma plataforma para facilitar a gestão e o descarte de resíduos de forma sustentável.</p>
    <hr class="my-4">
    <p>Cadastre-se agora para saber mais sobre pontos de coleta e datas de recolhimento.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Começar</a>

    <!-- Imagem Central -->
    <div class="mt-5">
        <img src="{{ asset('img/principal.jpg') }}" alt="Imagem de Gestão de Resíduos" class="img-fluid rounded">
    </div>
</div>

<!-- Rodapé -->
<footer class="bg-light text-center text-lg-start mt-5 py-3">
    <div class="container">
        <p class="mb-1">© 2024 Gestão de Resíduos Sólidos</p>
        <p class="mb-0">
            <a href="#">Política de Privacidade</a> | <a href="#">Termos de Serviço</a> | <a href="#">Contato</a>
        </p>
    </div>
</footer>
@endsection
