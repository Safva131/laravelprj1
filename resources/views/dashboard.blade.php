<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home page</h1>
    <table>
        <tr>
            <td>Name</td>
            <td>{{$stud->Name}}</td>
        </tr>
        <tr>
            <td>Contact</td>
            <td>{{$stud->Contact}}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{$stud->Address}}</td>
        </tr>
        
    </table>
    <a href="{{url('LogOut')}}" >Logout</a>
</body>
</html>