<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/ecommercestyle.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <h2>Sign Up</h2><br>
        
            <!-- row1 -- user type-->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label for="userTypeControlSelect">User Type</label>
                        <select class="form-control" id="userType">
                            <option>Customer</option>
                            <option>Reseller</option>
                        </select>
                    </div> 
                </div>
            </div>  


            <!-- row2--name -->
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <label for="firstNameControlInput1">First name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="First name"><br>
                    <label for="" id="firstname_err" style="color:red"></label>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <label for="lastNameControlInput2">Last name(optional)</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Last name"><br>
                    <label for="" id="lastname_err"></label>
                </div>
            </div><br>

        <!-- row3 -- gender-->
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="genderRadioButton">gender:</label>
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
                    <label class="form-check-label" for="exampleRadios1">Male</label>
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                    <label class="form-check-label" for="exampleRadios1">Female</label>
                  </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <label for="" id="gender_err" style="color:red; text-align:left;"></label>
            </div>
        </div><br>

        <!-- row4 -- date of birth -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-1 col-lg-12">
                <label for="dateOfBirth">Date of Birth </label>
                <input type="date" class="form-control" id="dateOfBirth" placeholder="dd-mm-yyyy">
                <label for="" id="dob_err" style="color:red"></label>
            </div>
        </div><br>

        <!-- row5-- address-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label for="addressTextArea">Address</label>
                    <textarea class="form-control" id="address" rows="3"></textarea>
                    <label for="" id="address_err" style="color:red"></label>
                  </div>
            </div>
        </div>

        <!-- row6 -- country-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-1 col-lg-12">
                <div class="form-group">
                    <label for="countryControlSelect">Country</label>
                    <select class="form-control" id="country">
                        <option>Select your country</option>
                        <option>India</option>
                        <option>USA</option>
                        <option>China</option>
                    </select>
                    <label for="" id="country_err" style="color:red"></label>
                </div> 
            </div>
        </div>

        <!-- row7--mobile number -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-1 col-lg-12">
                <label for="mobileNumber">Mobile </label>
                <input type="text" class="form-control" id="mobilenumber" placeholder="Enter mobile number">
                <label for="" id="mobile_err" style="color:red"></label>
            </div>
        </div><br>

        <!-- row8--email -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-1 col-lg-12">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" placeholder="Enter your Email">
                <label for="" id="email_err" style="color:red"></label>
            </div>
        </div><br>

        <!-- row9--password -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-1 col-lg-12">
                <label for="password">Password </label>
                <input type="password" class="form-control" id="password" placeholder="password">
                <label for="" id="password_err" style="color:red"></label>
            </div>
        </div><br>

        <!-- row10--confirm password -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-1 col-lg-12">
                <label for="confirmPassword">Confirm password </label>
                <input type="password" class="form-control" id="confirmpassword" placeholder="confirm password">
                <label for="" id="confirmpswd_err" style="color:red"></label>
            </div>
        </div><br>


        <!-- row11--sign up button -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-1 col-lg-12">
                <button type="button" class="btn btn-success signup_btn" id="btnSignUp">Signup </button>
            </div>
        </div>

    </div>  

    <script>
        $(document).ready(function(){
            $('input[type=radio][name=gender]').change(function(){
                GenderValidate()
                FirstNameValidate()
            })

            $('#firstname').keyup(function(){
                FirstNameValidate()
            })
            $('#dateOfBirth').click(function(){
                FirstNameValidate()
                GenderValidate()
            })

            $('#dateOfBirth').change(function(){
                DOBValidate()
            })

            $('#address').click(function(){
                FirstNameValidate()
                GenderValidate()
                DOBValidate()
            })

            $('#country').change(function(){
                FirstNameValidate()
                GenderValidate()
                DOBValidate()
                AddressValidate()
            })

            $('#address').keyup(function(){
                AddressValidate()
            })

            $('#mobilenumber').click(function(){
                FirstNameValidate()
                GenderValidate()
                DOBValidate()
                AddressValidate()
                CountryValidate()
            })

            $('#country').change(function(){
                CountryValidate()
            })

            $('#email').click(function(){
                FirstNameValidate()
                GenderValidate()
                DOBValidate()
                AddressValidate()
                CountryValidate()
                MobileValidate()
            })

            $('#mobilenumber').keyup(function(){
                NumberCheck()
            })

            $('#password').click(function(){
                FirstNameValidate()
                GenderValidate()
                DOBValidate()
                AddressValidate()
                CountryValidate()
                MobileValidate()
                EmailValidate()
            })

            $('#email').keyup(function(){
                EmailCheck()
            })

            $('#confirmpassword').click(function(){
                FirstNameValidate()
                GenderValidate()
                DOBValidate()
                AddressValidate()
                CountryValidate()
                MobileValidate()
                EmailValidate()
                PasswordValidate()
            })

            $('#password').keyup(function(){
                PasswordCheck()
            })

            $('#btnSignUp').click(function(){
                FirstNameValidate()
                GenderValidate()
                DOBValidate()
                AddressValidate()
                CountryValidate()
                MobileValidate()
                EmailValidate()
                PasswordValidate()
                ConfirmPassword()
            })




            function FirstNameValidate(){
                if($('#firstname').val() == ''){
                    $('#firstname_err').text("please enter your first name") 
                    $('#firstname').css("border-color","red")
                }
                else{
                    $('#firstname_err').text('')  
                    $('#firstname').css("border-color","black")
                }
            }

            function GenderValidate(){
                if($('#gender').is(':checked')){
                    $('#gender_err').text('')  
                }
                else{
                    $('#gender_err').text("please enter your gender")
                }
            }

            function DOBValidate(){
                if($('#dateOfBirth').val() == ''){
                    console.log('hi')
                    $('#dob_err').text("please enter your date of birth") 
                    $('#dateOfBirth').css("border-color","red")
                }
                else{
                    $('#dob_err').text('')  
                    $('#dateOfBirth').css("border-color","black")
                }
            }

            function AddressValidate(){
                if($('#address').val() == ''){
                    $('#address_err').text("please enter your address") 
                    $('#address').css("border-color","red")
                }
                else{
                    $('#address_err').text('')  
                    $('#address').css("border-color","black")
                }
            }

            function CountryValidate(){
                if($('#country').val() == 'Select your country'){
                    $('#country_err').text("please enter your country") 
                    $('#country').css("border-color","red")
                }
                else{
                    $('#country_err').text('')  
                    $('#country').css("border-color","black")
                }
            }

            function MobileValidate(){
                if($('#mobilenumber').val() == ''){
                    $('#mobile_err').text("please enter your mobile number") 
                    $('#mobilenumber').css("border-color","red")
                }
                else{
                    $('#mobile_err').text('')  
                    $('#mobilenumber').css("border-color","black")
                }
            }

            function NumberCheck(){
                var phoneNoFormat = /^\d{10}$/
                mobNum = $('#mobilenumber').val()
                if(mobNum.match(phoneNoFormat)){
                    $('#mobile_err').text('')   
                    $('#mobilenumber').css("border-color","black")
                }
                else{
                    $('#mobile_err').text("please enter a valid mobile number") 
                    $('#mobilenumber').css("border-color","red")
                }
            }

            function EmailValidate(){
                if($('#email').val() == ''){
                    $('#email_err').text("please enter your email") 
                    $('#email').css("border-color","red")
                }
                else{
                    $('#email_err').text('')  
                    $('#email').css("border-color","black")
                }
            }
            
            function EmailCheck(){
                var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
                mail = $('#email').val()
                if(mail.match(mailFormat)){
                    $('#email_err').text('')  
                    $('#email').css("border-color","black")
                }
                else{
                    $('#email_err').text("please enter a valid email") 
                    $('#email').css("border-color","red")
                }
            }

            function PasswordValidate(){
                if($('#password').val() == ''){
                    $('#password_err').text("please enter your password") 
                    $('#password').css("border-color","red")
                }
                else{
                    $('#password_err').text('')  
                    $('#password').css("border-color","black")
                }
            }

            function PasswordCheck(){
                var pswdFormat = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/
                pswd = $('#password').val()
                if(pswd.match(pswdFormat)){
                    $('#password_err').text('')  
                    $('#password').css("border-color","black")
                }
                else{
                    $('#password_err').text("must contain atleast 1 uppercase,1 lowercase,1 digit,1 special character and a minimum of 8 characters") 
                    $('#password').css("border-color","red")
                }
            }

            function ConfirmPassword(){
                var pswd = $('#password').val()
                var confirmPswd = $('#confirmpassword').val()
                console.log(pswd)
                console.log(confirmPswd)
                if(pswd != confirmPswd){
                    $('#confirmpswd_err').text("the password entered is not correct") 
                    $('#confirmpassword').css("border-color","red")
                }
                else{
                    $('#confirmpswd_err').text('')  
                    $('#confirmpassword').css("border-color","black")
                }
            }
        })

    </script>
</body>
</html>