<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/posts/index.blade.php -->

@foreach($posts as $post)
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
<p>Average Rating: {{ $post->ratings()->avg('value') }}</p>
@endforeach


<p>Hi this another page created by dexter</p>
</body>
</html>