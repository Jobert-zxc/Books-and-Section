@extends('layout')

@section('content')
    <h1>Sections</h1>
    <a href="{{ route('sections.create') }}" class="btn btn-success mb-2">Add Section</a>

    <ul class="list-group">
        @foreach($sections as $section)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $section->name }}
                <div>
                    <a href="{{ route('sections.edit', $section) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('sections.destroy', $section) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
