<!DOCTYPE html>
<html>
<head>
    <title>Library Books</title>
</head>
<body>
    <h1>Books List</h1>
    <form action="{{ route('books.search') }}" method="GET">
        <input type="text" name="query" required>
        <button type="submit">Search</button>
    </form>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }} by {{ $book->author }} ({{ $book->published_year }})</li>
        @endforeach
    </ul>
</body>
</html>
