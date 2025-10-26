@extends('layout')

@section('content')
    <h1>Add Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="published_year" class="form-label">Published Year</label>
            <input type="number" name="published_year" id="published_year" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="section_id" class="form-label">Section</label>
            <select name="section_id" id="section_id" class="form-select" required>
                @foreach($sections as $section)
                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
