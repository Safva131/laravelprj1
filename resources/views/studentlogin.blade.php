<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
    @endif
    <form action="{{url('StudentLogin')}}" method="post">
        @csrf
        <h2>Login</h2><br>
        <label for="">Username</label>
        <input type="text" name="user_name" id="">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" id=""><br>
        <button type="submit">Login</button>
        <button type="reset">Cancel</button>

        @if(isset($error))
        <p>{{$error}}</p>
        @endif
    </form>
</body>
</html>