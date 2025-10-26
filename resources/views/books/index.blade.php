@extends('layout')

@section('content')
    <h1>Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-success mb-2">Add Book</a>

    <ul class="list-group">
        @foreach($books as $book)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $book->title }} by {{ $book->author }} ({{ $book->section->name }})
                <div>
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
