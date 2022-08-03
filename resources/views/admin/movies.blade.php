<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
</head>

<body>
    @foreach ($movies as $movie)
        <ul>
            <li>ID: {{ $movie->id }}</li>
            <li>映画タイトル: {{ $movie->title }}</li>
            <li>画像URL: {{ $movie->image_url }}</li>
            <li>公開年: {{ $movie->published_year }}</li>
            @if ($movie->is_showing == 1)
                <li>上映中かどうか: 上映中</li>
            @else
                <li>上映中かどうか: 上映予定</li>
            @endif
            <li>概要: {{ $movie->description }}</li>
            <li>登録日時: {{ $movie->created_at }}</li>
            <li>更新日時: {{ $movie->updated_at }}</li>
        </ul>
    @endforeach
</body>

</html>
