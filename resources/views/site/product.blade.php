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
        <p>Produtos</p>
    </div>
    </div>

    <div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
        <h2>Picareta ultra daora</h2>
        <img src="{{URL::to('/')}}/images/1.png" alt="Picareta" title="Produto 1" width="250px" height="150px">
        </div>
        <div class="col-md-4">
        <h2>Espada ultra daora</h2>
        <img src="{{URL::to('/')}}/images/2.png" alt="Produto" title="Produto" width="250px" height="150px">
        </div>
        <div class="col-md-4">
        <h2>Machado ultra daora</h2>
        <img src="{{URL::to('/')}}/images/3.png" alt="Produto" title="Produto" width="250px" height="150px">
        </div>
    </div>

    <hr>

    </div> <!-- /container -->

    </main>
@stop

@section('textoRodape')
    {{$rodape}}
@stop
