<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body onload = "getproductcategories()">
    <form action="" method="post">
        @csrf
        <label for="">Product name</label>
        <input type="text" name="product_name" id=""><br><br>
        @if($errors->has('product_name'))
        <span style="color:red;display:block;">{{$errors->first('product_name')}}</span>
        
        @endif
        
        <label for="">category</label>
        <select name="product_category" id="product_category">
        </select><br><br>
        <label for="">product price</label>
        <input type="text" name="product_price" id=""><br><br>
        @if($errors->has('product_price'))
        <span style="color:red;display:block;">{{$errors->first('product_price')}}</span>
        
        @endif
        <label for="">added date</label>
        <input type="date" name="product_added_date" id=""><br><br>
        <button>Add product</button>

        
        @if(isset($message))
        <p>{{$message}}</p>
        @endif
    
    </form>

    <script>
        function getproductcategories(){
            // alert('hello')
            $.ajax({
                url:"getprodcategories",
                type:"GET",
                success:function(response){
                    category=""
                    for(i in response.categories){
                        category += "<option value="+ response.categories[i]['id']+">" + response.categories[i]['category_name'] + "</option>"
                    }
                   
                    $('#product_category').append(category)
                }
            });
        }
    </script>
</body>
</html>