<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--load bootstrap--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Naam</th>
        <th scope="col">Opgericht in:</th>
    </tr>
    </thead>
    <tbody>

    @foreach($gamedevs as $gamedev)
    <tr>
        <td>{{ $gamedev['id'] }} </td>
        <td><a href="/games/{{$gamedev['naam']}}">{{ $gamedev['naam'] }}</a></td>
        <td>{{ $gamedev['opgericht'] }}</td>
    </tr>
    @endforeach

    </tbody>
</table>


</body>
</html>
