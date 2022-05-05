<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
    <label for="">Username</label>
    <input type="text" name="" id="user" onkeyup="userCheck()"><br>
    <label for="">password</label>
    <input type="email" name="" id=""><br>
    <label for="" id="err_msg"></label>
    <button type="submit">Save</button>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function userCheck(){
           $.ajax({
               url:'checkusername',
               type:'POST',
               data:{
                   "username":$('#user').val(),

               },
               success:function(response){
                 //alert('hai')  
                 //alert(response.result)
                document.getElementById('err_msg').innerHTML=response.result
               }
           })
        }
    </script>
</body>
</html>