@extends('layouts.admin')
@section('title', 'Tags')

@section('content')
<section>
    @if(session()->has('message'))
    <div class="alert alert-success">{{session()->get('message')}}</div>
    @endif
    <div class="d-flex justify-content-between align-items-center py-4">
        <h1>Tags</h1>
        <a href="{{route('admin.tags.create')}}" class="btn btn-danger">Create new tag</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Slug</th>
              <th scope="col">Created At</th>
              <th scope="col">Update At</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tags as $tag)
            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->name}}</td>
                <td>{{$tag->slug}}</td>
                <td>{{$tag->created_at}}</td>
                <td>{{$tag->updated_at}}</td>
                <td>
                    <a href="{{route('admin.tags.show', $tag->slug)}}" title="Show" class="text-black px-2"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('admin.tags.edit', $tag->slug)}}" title="Edit" class="text-black px-2"><i class="fa-solid fa-pen"></i></a>
                    <form action="{{route('admin.tags.destroy', $tag->slug)}}" method="POST" class="d-inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="delete-button border-0 bg-transparent"  data-item-title="{{ $tag->name }}" data-item-id = "{{ $tag->id }}">
                        <i class="fa-solid fa-trash"></i>
                      </button>

                    </form>


                </td>
              </tr>
            @endforeach


          </tbody>
      </table>
</section>
{{-- {{ $tags->links('vendor.pagination.bootstrap-5') }} --}}
@include('partials.modal-delete')
@endsection



