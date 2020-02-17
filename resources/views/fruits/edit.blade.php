@extends('layouts.main')

@section('page-title', 'Modifica Fruits')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1>Modifica frutto</h1>
                <form method="post" action="{{ route('fruits.update', ['fruit' => $fruit->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="{{ $fruit->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="peso">Peso</label>
                        <input type="text" class="form-control" name="peso" id="peso" placeholder="Peso" value="{{ $fruit->peso }}" required>
                    </div>
                    <div class="form-group">
                        <label for="varieta">Varieta</label>
                        <input type="text" class="form-control" name="varieta" id="varieta" value="{{ $fruit->varieta }}" placeholder="Varietà">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
            </div>
        </div>
    </div>

@endsection
