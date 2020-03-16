@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Detalhe do Chamado</h2>
        Título: {{$chamado->titulo}}
    </div>
</div>
@endsection
