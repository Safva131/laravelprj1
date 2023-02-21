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
    <label for="">Employee category</label>
    <input type="text" name="emp_category" id="empCategory"><br><br>
    <label for="">Desription</label>
    <input type="text" name="emp_category_description" id="empCategoryDesc"><br><br>
    <button type="submit" id="btn_save" onclick="addEmpcategory()">save</button>
    <label for="" id="err_msg"></label>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            function addEmpcategory(){
            var categoryName = $('#empCategory').val();
            var description = $('#empCategoryDesc').val();  
           
                $.ajax({
                    url:"empcategory",
                    type:"POST",
                    data:{
                        "category":categoryName,
                        "desc":description
                    },
                    // dataType:"json",
                    success:function(response){
                        document.getElementById('err_msg').innerHTML = response.result;
                    }
                })
            }
        //});
        
        
    </script>
</body>
</html>