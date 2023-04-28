<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create画面</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('user.store')}}" method="post">
        @csrf
        <label for="name">
            名前
        </label>
        <input id="name" type="text" name="name">
        <label for="email" >メールアドレス</label>
        <input id="email" type="email" name="email">
        <label for="password">パスワード</label>
        <input type="password" id="password" name="password">
        <button>送信する</button>
    </form>
</body>
</html>
