@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{ $project->name }}</h1>
        <p>Technologies:</p>
        <ul>
            @foreach ($project->technologies as $technology)
                <li>{{ $technology->name }}</li>
            @endforeach
        </ul>
        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
@endsection
