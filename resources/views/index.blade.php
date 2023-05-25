<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul> @forelse ($books as $book)
        <li><a href="{{route('books.show', ['book' => $book['id']])}}">{{$book['name']}} - {{$book['author']}}-{{$book['year']}}</a></li>
        @empty
        nessun libro
    @endforelse
</ul>
   
</body>
</html>