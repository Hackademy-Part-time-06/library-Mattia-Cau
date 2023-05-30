<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <input type="text" name="name" value="{{old(name)}}" required placeholder="nome">
        <input type="text" name="author" value="{{old(author)}}" required placeholder="autore">
        <input type="number" name="year" value="{{old(year)}}" placeholder="anno">
        <input type="number" name="pages" value="{{old(pages)}}" placeholder="pagine">
        <input type="file" name="image" value="{{old(image)}}" >
        <button type="submit">invia</button>
    </form>
</body>
</html>