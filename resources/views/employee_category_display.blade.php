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
<body onload = "displayData()" >
    <table border="1" id="t1">
        <thead>
            <th>category</th>
            <th>Description</th>
        </thead>
    </table>
    <script>
        function displayData(){
            $.ajax({
                type:"GET",
                url:"getempcategory_data",
                // dataType:"json",
                success:function(response){
                        $('.tr').remove();
                        for(i=0;i<response.data.length;i++){
                           $("#t1").append("<tr class='tr'><td>"+response.data[i]['category_name']+"</td><td>"+response.data[i]['category_description']+"</td><td><a onclick='delete_data("+response.data[i]['id']+")'>Delete</a></td></tr>");
                        }


                }
            });
        }
        delete_data=function(cat_id){


            //confirmation
            var result = confirm("Want to delete?");

            //close6+

if(result){


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"POST",
                url:"delempcategory",
                data:{'del_id':cat_id},
                success:function(response){
                //  alert(response.result);
                displayData();
                }
            });
        }
        }

    </script>
</body>
</html>