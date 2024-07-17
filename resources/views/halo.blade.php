<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menik</title>
    <style>
        body {
            background-color: black;
            -webkit-user-select: none;
        }

        li {
            color: white;
        }

        marquee {
            color: white;
        }
    </style>
</head>
<body>
    <marquee direction="left">Woi Balik Ga ke JSON ajaa, gua malas bet</marquee>
    @foreach ($books as $buku)
    <ul>
        <li>{{ $buku->title }}</li>
        <li>{{ $buku->description }}</li>
        <li>{{ $buku->image_url }}</li>
        <li>{{ $buku->isbn }}</li>
    </ul>
    @endforeach
</body>
</html>