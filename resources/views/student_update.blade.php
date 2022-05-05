<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Student Details</h3><br><br>
    <form action="{{url('StudentUpdateData')}}/{{$student->id}}" method="post">
    @csrf
        <label for="">Name</label>
        <input type="text" name="stud_name" id="" value = "{{$student->Name}}"><br><br>
        <label for="">Contact</label>
        <input type="text" name="stud_contact" id="" value = "{{$student->Contact}}"><br><br>
        <label for="">Address</label>
        <input type="text" name="stud_address" id="" value = "{{$student->Address}}"><br><br>

        <Button type="submit"  name="btn_update">Update</Button>
       
    </form>
    
</body>
</html>