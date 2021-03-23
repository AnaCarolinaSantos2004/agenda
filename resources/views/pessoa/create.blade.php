@extends('layouts.app')
@section('content')

    <div class="container">
    <form id="frmpessoa" name="frmpessoa" action="{{ url('pessoa')}}" method="POST">
    @csrf   
    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="nome" class="form-control" id="nome" placeholder="Informe o nome">
    </div>
    <div class="form-group">
    <label for="sobrenome">Sobrenome</label>
    <input type="sobrenome" class="form-control" id="sobrenome" placeholder="Informe o Sobrenome">
    </div>
    <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="telefone" class="form-control" id="telefone" placeholder="Informe o Telefone">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection