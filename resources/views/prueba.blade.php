<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>:3</h1>

    @foreach($posts as $post)
    <h1>{{ $post->descripcion }}</h1>
@endforeach

</body>
</html>