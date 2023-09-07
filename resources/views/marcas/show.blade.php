@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalhes da Marca</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Código: {{ $marca->codigo }}</h5>
                <p class="card-text">Descrição: {{ $marca->descricao }}</p>
            </div>
        </div>
        <a href="{{ route('marcas.index') }}" class="btn btn-primary">Voltar à lista de marcas</a>
    </div>
@endsection
