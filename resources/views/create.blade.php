<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('books.store')}}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="name" value="">
        <input type="text" name="author" value="">
        <input type="text" name="year" value="">
        <input type="text" name="pages" value="">
        <button type="submit">invia</button>
    </form>
</body>
</html>