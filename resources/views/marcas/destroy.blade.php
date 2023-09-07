@extends('layouts.app') {{-- Substitua 'app' pelo nome do seu layout, se necessário --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Confirmação de Exclusão</div>

                <div class="card-body">
                    <p>Você tem certeza de que deseja excluir esta marca?</p>
                    <p><strong>Código do Produto:</strong> {{ $marca->codigo }}</p>
                    <p><strong>Descrição do Produto:</strong> {{ $marca->descricao }}</p>

                    <form method="POST" action="{{ route('marcas.destroy', $marca->id) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Confirmar Exclusão</button>
                        <a href="{{ route('marcas.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
