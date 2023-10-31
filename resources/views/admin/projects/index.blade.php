@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        @dump($projects)

        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endsection
