<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px solid">
       
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Country</th>
                <th>Status</th>
            </tr> 
        </thead>
        <tbody>
            @foreach($userDetails as $customers)
            <tr>
                <td>{{$customers->customer_name}}</td>
                <td>{{$customers->customer_contact}}</td>
                <td>{{$customers->customer_country}}</td>
                <td>{{$customers->customer_status}}</td>
                <td><a href="{{url('DeleteCustomer')}}/{{$customers->id}}" onclick="return confirm('Are you sure you want to delete')">Delete</a></td>
            </tr>
            @endforeach
            
        </tbody>
    
    </table>
</body>
</html>