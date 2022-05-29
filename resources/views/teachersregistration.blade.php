<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid" style="margin-top:20px;margin-left:100px;margin-right:100px;">
    <form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">First name</label>
      <input type="text" class="form-control" name="tr_fname" id="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last name</label>
      <input type="text" class="form-control"name="tr_lname" id="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">City</label>
      <input type="text" class="form-control" name="tr_city" id="">
    </div>
    <div class="form-group col-md-4">
      <label for="">State</label>
      <select id="" class="form-control" name="tr_city">
        <option selected>--select--</option>
        <option value="delhi">Delhi</option>
        <option value="chennai">Chennai</option>
        <option value="cochin">Cochin</option>
        <option value="banglore">Banglore</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="">pin</label>
      <input type="text" class="form-control" id="" name="tr_pin">
    </div>
  </div>
  <div class="form-group">
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="" value="c">
  <label class="form-check-label" for="">C</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="" value="c++">
  <label class="form-check-label" for="">c++</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="" value="java">
  <label class="form-check-label" for="">java</label>
</div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>