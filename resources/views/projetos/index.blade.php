@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-6">Projetos</h2>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach($projetos as $projeto)
        <a href="/projetos/{{ $projeto['slug'] }}" class="p-4 bg-white shadow rounded">
            <h3 class="font-bold text-lg">{{ $projeto['nome'] }}</h3>
            <p>{{ $projeto['descricao'] }}</p>
        </a>
    @endforeach
</div>
@endsection
