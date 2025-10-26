<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library TPS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <nav class="mb-4">
        <a href="{{ route('books.index') }}" class="btn btn-primary">Books</a>
        <a href="{{ route('sections.index') }}" class="btn btn-secondary">Sections</a>
    </nav>

    {{-- Main content --}}
    @yield('content')

</body>
</html>
