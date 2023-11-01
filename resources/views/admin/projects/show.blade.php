@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <h2>{{ $project->title }}</h2>
            <p> {{ $project->content }} </p>
        </div>
        <div class="d-flex flex-column align-items-end">
            <p><b>Ultima Modifica: </b>{{ $project->updated_at }}</p>
            <p><b>Creazione Progetto: </b>{{ $project->created_at }}</p>
        </div>
    </div>
@endsection
