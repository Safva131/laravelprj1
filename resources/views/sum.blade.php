

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('Sum')}}" method="post">
        @csrf
        <label for="">Sum of Numbers</label><br><br>
        <label for="">Enter first number</label><br>
        <input type="text" name="num1" id=""><br>
        <label for="">Enter second number</label><br>
        <input type="text" name="num2" id=""><br>

    
        <button type="submit" name="btn_sum">Result</button><br><br>
        @if(isset($result))
        <p>{{$result}}</p>
        @endif
        
        
    </form>
</body>
</html>