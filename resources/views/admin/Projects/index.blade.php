@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Projects</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-success mb-3">Create Project</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Technologies</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>
                            @foreach ($project->technologies as $technology)
                                {{ $technology->name }},
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->id) }}" title="Show" class="text-black px-2"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.projects.edit', $project->id) }}" title="Edit" class="text-black px-2"><i class="fa-solid fa-pen"></i></a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button border-0 bg-transparent" data-item-title="{{ $project->name }}" data-item-id="{{ $project->id }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $projects->links() }}
    </div>
    @include('partials.modal-delete')
@endsection
