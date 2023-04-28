<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/app.css">
    <title>Document</title>
</head>
<body>
    <h1>User一覧</h1>
    @foreach ($users as $user )
        <a>{{$user->name}}</a>
    @endforeach

</body>
</html>