<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集画面</title>
</head>
<body>
<h1>編集画面</h1>
<p><a href="{{ route('book.index')}}">一覧画面</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
 
<form action="{{ route('book.update',$book->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>タイトル：<input type="text" name="title" value="{{ $book->title }}"></p>
    <p>著者：<input type="text" name="author" value="{{ $book->author }}"></p>
    <input type="submit" value="編集する">
</form>
</body>
</html>