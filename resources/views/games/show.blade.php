<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col" >Titel Game:</th>
        <th scope="col">Uitgave datum:</th>
        <th scope="col">Te spelen op:</th>
    </tr>
    </thead>
    <tbody>

    @foreach($games as $game)

        <?php $game->uitgave_datum =  $game->{'uitgave datum'}; ?>
        <tr>
            <td>{{ $game->id }} </td>
            <td>{{ $game->titel }} </td>
            <td>{{ $game->uitgave_datum}} </td>
            <td>{{ $game->platform }} </td>

        </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>
