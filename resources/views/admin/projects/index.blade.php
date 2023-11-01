@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Creato In Data</th>
                    <th scope="col">Aggiornato In Data</th>
                    <th scope="col">Interazioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->created_at }}</td>
                        <td>{{ $project->updated_at }}</td>
                        <td> <a href={{ Route('admin.projects.show', $project) }}> Dettagli Progetto</a> </td>
                    </tr>
                @empty
                    <tr>
                        <td>
                            <h3>Non ci Sono Progetti Da Mostrare</h3>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endsection
