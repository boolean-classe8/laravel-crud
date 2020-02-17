@extends('layouts.main')

@section('page-title', 'Index Fruits')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Lista della frutta</h1>
                <a class="btn btn-success pull-right" href="{{ route('fruits.create') }}">
                    Inserisci frutta
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Peso</th>
                            <th>Varieta</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    @forelse ($fruits as $fruit)
                        <tr>
                            <td>
                                {{ $fruit->id }}
                            </td>
                            <td>
                                {{ $fruit->name }}
                            </td>
                            <td>
                                {{ $fruit->peso }}
                            </td>
                            <td>
                                {{ $fruit->varieta }}
                            </td>
                            <td>
                                <a href="{{ route('fruits.show', ['fruit' => $fruit->id]) }}" class="btn btn-info">
                                    Visualizza
                                </a>
                                <a href="{{ route('fruits.edit', ['fruit' => $fruit->id]) }}" class="btn btn-warning">
                                    Modifica
                                </a>
                                <form class="form-inline" action="{{ route('fruits.destroy', ['fruit' => $fruit->id]) }}" method="post" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Cancella">
                                </form>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="5">Non c'è alcun frutto!</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>

@endsection
