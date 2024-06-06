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
            <!-- Aggiungi qui altri campi del modulo, se necessario -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
