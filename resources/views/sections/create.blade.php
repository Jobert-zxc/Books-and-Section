@extends('layout')

@section('content')
    <h1>Add Section</h1>

    <form action="{{ route('sections.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Section Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('sections.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
