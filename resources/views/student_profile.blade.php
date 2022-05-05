<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('Studentprofile')}}" method = "post" enctype="multipart/form-data">
@csrf
    <label for="">Name</label>
    <input type="text" name="stud_name" id=""><br>
    <label for="">Contact</label>
    <input type="text" name="stud_contact" id=""><br>
    <label for="">Upload image</label>
    <input type="file" name="stud_img" id=""><br>
    <button type="submit" name="btn_submit">Submit</button>
    </form>
</body>
</html>