@extends('app')

@section('titulo', 'Editar Cliente')

@section('conteudo')
    <h1>Editar Cliente</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{ $client->nome }}" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" value="{{ $client->endereco }}" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite a Observação">{{ $client->observacao }}</textarea>
        </div> 

        <button class="btn btn-success" type="submit">Enviar</button>       
    </form>
@endsection    