@extends('site.layouts.app')

@section('title', 'Meu Perfil')

@section('content')

<h1>Meu Perfil</h1>

@include('admin.includes.alerts')

<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" class="form-control" placeholder="Senha">
    </div>
    <div class="form-group">
        <img src="{{ asset('storage/users/' . auth()->user()->image) }}" alt="{{ auth()->user()->name }}" class="img" width="200">
    </div>
    <div class="form-group">
        <label for="imagem">Imagem</label>
        <input type="file" name="image" class="form-control" placeholder="Imagem">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar Perfil</button>
</form>

@endsection
