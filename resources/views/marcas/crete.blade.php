@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Criar Nova Marca</h1>
        <form action="{{ route('marcas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" name="codigo" id="codigo" class="form-control">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" id="descricao" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
