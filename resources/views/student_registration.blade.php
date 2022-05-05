<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student Registration</h3><br><br>
    <form action="{{url('StudentRegister')}}" method="post">
    @csrf
        <label for="">Name</label>
        <input type="text" name="stud_name" id=""><br><br>
        <label for="">Contact</label>
        <input type="text" name="stud_contact" id=""><br><br>
        <label for="">Address</label>
        <input type="text" name="stud_address" id=""><br><br>

        <button type="submit"  name="btn_save">Submit</button><br>
        
        @if(isset($error))
        <p>{{$error}}</p>
        @endif
    </form>


</body>
</html>