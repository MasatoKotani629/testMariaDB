<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <tr><th>Name</th><th>Mail</th>Age<th></tr>
        @foreach ($users as $user)
            <td>{{$user->ShainID}}</td>
        @endforeach
</body>
</html>



