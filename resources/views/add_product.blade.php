<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="{{ asset('css/ecommercestyle.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid">
        <h2>Add Product</h2><br>

        <!-- row1--title of product -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label for="titleOfProduct">Mobile </label>
                <input type="text" class="form-control" id="titleOfProduct" placeholder="Title of the product">
            </div>
        </div><br>

        <!-- row2--product id -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label for="productId">Registered product id </label>
                <input type="text" class="form-control" id="productId" placeholder="Registered product id">
            </div>
        </div><br>

        <!-- row3--description -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label for="productDescription">Description</label>
                <textarea class="form-control" id="productDescription" rows="3"></textarea>
            </div>
        </div><br>

        <!-- row4 --product pictures -->
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label for="productPicture">Upload product pictures</label><br>
                <input type="file" class="form-control-file" name="" id="productPicture">
            </div>
        </div><br>

        <!-- row5--price -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label for="productPrice">Price </label>
                <input type="text" class="form-control" id="productPrice" placeholder="">
            </div>
        </div><br>

        <!-- row6--quantity -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label for="productQuantity">Quantity </label>
                <input type="text" class="form-control" id="productQuantity" placeholder="Available quantity">
            </div>
        </div><br>
        

        <!-- row7--weight -->
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label for="productWeight">Weight </label>
                <input type="text" class="form-control" id="productWeight" placeholder="0.0">
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="productWeightUnit">Weight unit </label>
                <select class="custom-select mr-sm-2" id="productWeightUnit">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
        </div><br>


         <!-- row8--category -->
         <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label for="productCategory">Category </label>
                <select class="custom-select mr-sm-2" id="productCategory">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="productSubCategory">sub Category </label>
                <select class="custom-select mr-sm-2" id="productSubCategory">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
        </div><br>

        <!-- row8--brand -->
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label for="productBrand">Brand </label>
                <input type="text" class="form-control" id="productBrand" placeholder="ex:nike">
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="productStatus">Status </label>
                <select class="custom-select mr-sm-2" id="productStatus">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
        </div><br>

        <!-- row9--save button -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn btn-primary btn-lg btn-block">Save</button>
            </div>
        </div>

    </div>
</body>
</html>