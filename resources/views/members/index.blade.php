<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
<h1>{{ $title }}</h1>
 <ul>
     @foreach ($members as $member)
     <li>{{ $member->name }}</li>
     @endforeach
 </ul>
</body>
</html>