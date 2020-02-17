@extends('layouts.main')

@section('page-title', 'Creazione Fruits')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1>Inserisci un nuovo frutto</h1>
                <form method="post" action="{{ route('fruits.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required>
                    </div>
                    <div class="form-group">
                        <label for="peso">Peso</label>
                        <input type="text" class="form-control" name="peso" id="peso" placeholder="Peso" required>
                    </div>
                    <div class="form-group">
                        <label for="varieta">Varieta</label>
                        <input type="text" class="form-control" name="varieta" id="varieta" placeholder="Varietà">
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>

@endsection
