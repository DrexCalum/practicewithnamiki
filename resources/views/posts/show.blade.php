<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/posts/show.blade.php -->

<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

<form action="/posts/{{ $post->id }}/rate" method="POST">
    @csrf
    <select name="rating">
        <option value="1">1 Star</option>
        <option value="2">2 Stars</option>
        <option value="3">3 Stars</option>
        <option value="4">4 Stars</option>
        <option value="5">5 Stars</option>
    </select>
    <button type="submit">Rate</button>
</form>

</body>
</html>