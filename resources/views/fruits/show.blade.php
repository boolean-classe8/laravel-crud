@extends('layouts.main')

@section('page-title', 'Dettagli Fruits')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Dettagli frutta</h1>
                <a class="btn btn-success pull-right" href="{{ route('fruits.index') }}">
                    Torna alla homepage
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ID frutto: {{ $fruit->id }}</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Nome: {{ $fruit->name }}</li>
                            <li>Peso: {{ $fruit->peso }}</li>
                            <li>Varieta: {{ $fruit->varieta }}</li>
                            <li>Creato il: {{ $fruit->created_at }}</li>
                            <li>Aggiornato il: {{ $fruit->updated_at }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
