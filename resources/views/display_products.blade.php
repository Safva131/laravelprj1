<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Product name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Added date</th>
        </tr>
        @foreach($product_details as $product)

        <tr>
            <td>{{$product->product_name}}</td>
            <td>{{$product->category_name}}</td>
            <td>{{$product->product_price}}</td>
            <td>{{$product->added_date}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>