<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/ecommercestyle.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>

    <div class="container-fluid">
        <!-- first row navbar -->
        <div class="row nav_row1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <nav class="navbar ">
                    <div class="col-lg-2">
                        <img src="../images/e-shopping_logo.png" class="img_logo" alt="...">
                    </div>
                    <div class="col-lg-8">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 ">
                        <button type="button" class="btn btn-danger btn_nav">Login</button>
                        <button type="button" class="btn btn-danger btn_nav">Sign Up</button> 
                    </div>

                  </nav>

                  
            </div>
        </div>

        <!-- second row -->
        <div class="row nav_row2">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <a class="nav-link link_text" href="#">Electronics</a>
                        <a class="nav-link link_text" href="#">TV & Appliances</a>
                        <a class="nav-link link_text" href="#">Sports</a>
                        <a class="nav-link link_text" href="#">Fashion</a>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
        <br>

        <!-- content login form -->
        <div class="div login_content">
            <div class="row row_content">
                <div class="col-lg-6 col_content">

                </div>
                <div class="col-lg-6">
                    <h2>Login </h2><br><br>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control" name="_username" id="username" placeholder="username">
                    <label for="" id="usrname_err" style="color: red;">please enter your username</label>
                    
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" name="_password" id="password" placeholder="password">
            <label for="" id="pswd_err" style="color: red;"></label>
            </div>
        </div><br>

        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-4">
            <button type="button" class="btn btn-success login_btn" id="login_btn"> Login <i class="fa fa-sign-in"></i> </button>
            </div>
        </div>
    </div><br>


    <div class="row">
        <div class="col-lg-6">

        </div>
        <div class="col-lg-4">
            <a href="#" class="">Forgot password?</a>
        </div>
    </div>
</div><br>

<div class="row">
    <div class="col-lg-6">

    </div>
    <div class="col-lg-4">
        <a href="#" class="">Create an account?</a>
    </div>
</div>
</div><br><br>

<!-- footer -->
        <div class="row footr1">
            <div class="col-md-6 footr_col_1">
                <h4>REGISTERED OFFICE ADDRESS</h4>
                <span>5th floor,cafit square,Hiite Business park,Thondayad Bye-Pass <br>
                Thondayad hilite City,Poovangal,Kozhikode,kerala 673016</span>

            </div>

            <div class="col-md-2">
                <h4>POLICY</h4>
                    <a class="text-decoration-none footer_col_2" href="">Return Policy</a><br>
                    <a class="text-decoration-none footer_col_2" href="">Terms of Use</a><br>
                    <a class="text-decoration-none footer_col_2" href="">Security</a><br>
                    <a class="text-decoration-none footer_col_2" href="">Privacy</a><br>
            </div>

            <div class="col-md-2">
                <h4>ABOUT</h4>
                    <a class="text-decoration-none footer_col_3" href="">Contact Us</a><br>
                    <a class="text-decoration-none footer_col_3" href="">About Us</a><br>
                    <a class="text-decoration-none footer_col_3" href="">wholesale</a><br>
            </div>

            <div class="col-md-2">
                <h4>SOCIAL</h4>
                    <a class="text-decoration-none footer_col_4" href="">Facebook</a><br>
                    <a class="text-decoration-none footer_col_4" href="">Twitter</a><br>
                    <a class="text-decoration-none footer_col_4" href="">Youtube</a><br>
            </div>
        </div>

        <script>

            $(document).ready(function(){
                $('#usrname_err').hide()
                // $('#username').css("border-color","black")
                // $('#pswd_err').hide()

                $('#username').keyup(function(){
                    UserNameValidate()
                })
                $('#password').click(function(){
                    UserNameValidate()
                })
                
                $('#password').keyup(function(){
                    PasswordCheck()
                })
                $('#login_btn').click(function(){
                    UserNameValidate()
                    PasswordValidate()
                })
            })
            
            function UserNameValidate(){
                userName = $('#username').val()
                if($('#username').val() == ''){
                    $('#usrname_err').show()
                    $('#username').css("border-color","red")
                }
                else{
                    $('#usrname_err').hide()
                    $('#username').css("border-color","black")
        
                }
            }

            function PasswordCheck(){
                pswd_str = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
                passWord = $('#password').val()
                if(passWord.match(pswd_str)){
                    $('#pswd_err').text('')
                    $('#password').css("border-color","black")
                    }
                else{
                    $('#pswd_err').text("must contain 1 uppercase,1 lowercase,1 digit,1 special  character and a minimum of 8 characters")
                    $('#password').css("border-color","red")
                }
            }

            function PasswordValidate(){
                if($('#password').val() == ''){
                    $('#pswd_err').text('please enter your password')
                    $('#password').css("border-color","red")
                }
                else{
                    $('#pswd_err').text('')
                    $('#password').css("border-color","black")
                }
            }


        </script>
</body>
</html>