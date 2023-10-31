@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
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
                        <td></td>
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
