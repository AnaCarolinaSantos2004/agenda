@extends('layouts.app')
@section('content')

<div class="container">
<h2>Agenda </h2>
<hr/>
<a href="{{ url('pessoa/create') }}" class="btn btn-success">Novo Contato</a>
<br/><br/>
    <table class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">Nome</th>
    <th scope="col">Sobrenome</th>
    <th scope="col">Telefone</th>
    <th scope="col">Opções</th>
    </tr>
    </thead>
    @foreach($pessoa as $pessoas)
    <tbody>
    <tr>
    <td>{{ $pessoas -> nome }}</td>
    <td>{{ $pessoas->sobrenome}}</td>
    <td>{{ $pessoas->telefone}}</td>
    </tr>
    <td> 
       <a href="{{ route('pessoa.edit', $pessoas->id') }}" class="btn btn-primary btn-sm">Editar</a>
       <a href="{{ url('pessoa/delete', ['id' =>$produto->id]) }}" class="btn btn-danger btn-sm">Remover</a>
    </td>
    </tbody>
    @endforeach
    </table>
    </div>      

@endsection
