@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Project</h1>
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $project->name }}" required>
            </div>
            <div class="form-group">
                <label for="technologies">Technologies:</label>
                @foreach ($technologies as $technology)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="technologies[]" value="{{ $technology->id }}" 
                        @if($project->technologies->contains($technology->id)) checked @endif>
                        <label class="form-check-label" for="technology_{{ $technology->id }}">
                            {{ $technology->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
