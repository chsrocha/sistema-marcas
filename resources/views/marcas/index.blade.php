@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listagem de Marcas</h1>
        <a href="{{ route('marcas.create') }}" class="btn btn-primary">Nova Marca</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($marcas as $marca)
                    <tr>
                        <td>{{ $marca->codigo }}</td>
                        <td>{{ $marca->descricao }}</td>
                        <td>
                            <a href="{{ route('marcas.show', $marca->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('marcas.edit', $marca->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta marca?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
