@extends('layouts.app')
@section('content')

    <div class="container">
    <form id="frmpessoa" name="frmpessoa" action="{{ url('pessoa,update, $pessoa->id')  }}" method="POST">
    @csrf   
@method('PUT')
<h3>Editar  </h3>
    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="nome" class="form-control" id="nome" name="nome" value="{{ $pessoa->nome }}">
    </div>
    <div class="form-group">
    <label for="sobrenome">Sobrenome</label>
    <input type="sobrenome" class="form-control" id="sobrenome" name="sobrenome" value="{{ $pessoa->sobrenome }}">
    </div>
    <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="telefone" class="form-control" id="telefone"  name="telefone" value="{{ $pessoa->telefone }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection