<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .content{
            padding-top:50px;
            padding-left:250px;
            padding-right:250px;
           
        }
    </style>
</head>
<body onload="getEmpCategories()">
    <form action="{{url('addemployeedata')}}" method="post">
        @csrf
        <div class="container-fluid content">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="emp_name" id="empName">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">

                </div>
            </div>
        
        <div class="form-group">
            <label for="">Employee category</label>
            <select class="form-control" name="emp_categories" id="empCategories"></select>
        </div>
        <div class="form-group">
            <label for="">Date of birth</label>
            <input type="date" class="form-control" name="emp_dob" id="empDob">
        </div>
        <div class="form-group">
            <label for="">Place</label>
            <input type="text" class="form-control" name="emp_place" id="empPlace">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-danger">Cancel</button>
        @if(isset($message))
        <p>{{$message}}</p>
        @endif
    </form>

    <script>
        function getEmpCategories(){
            //alert('hi');
            $.ajax({
                url:"getcategories",
                type:"GET",
                
                success:function(response){
                    //alert(response)
                    category=""
                    for(i in response.categories){
                        category += "<option value="+ response.categories[i]['id']+">" + response.categories[i]['category_name'] + "</option>"
                    }
                   
                    $('#empCategories').append(category)
                }
            });
        }
    </script>
    </div>
    
</body>
</html>