@extends('site.layout')

@section('titulo')
    {{$titulo}}
@stop

@section('conteudo')
<main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Loja´s Denner</h1>
        <p>Sobre Nós</p>
    </div>
    </div>

    <div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
        <h2>A empresa</h2>
        <p>Somos tudo e mais um pouco!</p>
        </div>
    </div>
    <hr>
    </div> <!-- /container -->
    </main>
@stop

@section('textoRodape')
    {{$rodape}}
@stop