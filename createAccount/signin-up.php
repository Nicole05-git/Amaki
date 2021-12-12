<?php

    require "crud_operations.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS for styling and layout-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--Signin-up CSS File -->
       <link rel="stylesheet" href="../createAccount/css/sign_styles.css">

    </head>
        <title>LOGIN/SIGNUP</title>
            <body>                        
                <div class="row">
                    <div class="col-md-6 mx-auto p-0">
                        <div class="card">

                            <!--log in page-->
                            <form action="crud_operations.php" method="POST" >
                                <div class="login-box">
                                    <div class="login-snip">
                                        <!--login  -->
                                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                                        <label for="tab-1" class="tab">Login</label> 
                                        
                                        <!-- signup -->
                                        <input id="tab-2" type="radio" name="tab" class="sign-up">
                                        <label for="tab-2" class="tab">SIGN UP</label>

                                        <!-- This where the info for login begins -->
                                        <div class="login-space">
                                            <div class="login">
                                                <!--email-->
                                                <div class="group"> 
                                                    <label for="email" class="label">email</label> 
                                                    <input id="email" type="text" class="input" placeholder="email@example.com" name="email"> 
                                                </div>

                                                <!--password-->
                                                <div class="group"> 
                                                    <label for="password" class="label">Password</label> 
                                                    <input id="password" type="password" class="input" name="password" placeholder="Enter your password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                                                </div>

                                                <!--agreement-->
                                                <div class="group"> 
                                                    <input id="check" type="checkbox" name="check" class="check" checked> 
                                                    <label for="check"><span class="icon"></span> Keep me Signed in</label> 
                                                </div>

                                                <!--login button-->
                                                <div class="group"> 
                                                    <button name="logSubmit" type="submit" class="button" value="Login">Login</button> 
                                                </div>
                                                <div class="hr"></div>

                                                <!--forgot password-->
                                                <div class="foot"> <a href="#">Forgot Password?</a> </div>
                                            </div>
                            </form>



                                            <!--sign up page-->
                                            <form method="POST">
                                                <div class="sign-up-form">

                                                    <!--Full name-->
                                                    <div class="group"> 
                                                        <label for="full_name" class="label">Full name</label> 
                                                        <input name = "full_name" id="full_name" type="text" class="input" required placeholder="Enter full name">
                                                    </div>

                                                    <!--email-->
                                                    <div class="group"> 
                                                        <label for="email" class="label">Email Address</label> 
                                                        <input name="email" id="pass" type="text" class="input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" title="Invalid email address"  required placeholder="Enter your email address"> 
                                                    </div>

                                                    <!--phone number-->
                                                    <div class="group"> 
                                                        <label for="phone" class="label">Phone number</label>
                                                        <input name="phone" id="phone" type="tel" class="input" required placeholder="0558396316"> 
                                                    </div>

                                                    <!--password-->
                                                    <div class="group"> 
                                                        <label for="pass" class="label">Password</label> 
                                                        <input name="pass" id="pass" type="password" class="input" data-type="password" required placeholder="Create password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                                                        </div>

                                                    <!--confirm password-->
                                                    <div class="group"> 
                                                        <label for="confirmPassword" class="label">Confirm Password</label> 
                                                        <input name="confirmPassword" id="confirmPassword" type="password" class="input" data-type="password" required placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                                                    </div>

                                                    <!--Age-->
                                                    <div class="group"> 
                                                        <label for="age" class="label">Age</label> 
                                                        <input name="age" id="age" type="number" class="input" data-type="number" required placeholder="How old are you?"> 
                                                    </div>

                                                    <!--signup button-->
                                                    <div class="group"> 
                                                        <input name="sign_up" type="submit" class="button" value="Sign Up" > 
                                                    </div>
                                                    <div class="hr"></div>

                                                    <!--log in if you already have an account-->
                                                    <div class="foot"> 
                                                        <label for="tab-1">Have an account? Login</label> 
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        
                        
                        </div>
                    </div>
                </div>                    
            </body>
            
</html>









