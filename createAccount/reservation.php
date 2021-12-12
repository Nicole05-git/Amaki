<?php
    require('crud_operations.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Make a Reservation</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div class="main">

            <div class="container">
                <div class="signup-content">
                    <div class="signup-img">
                        <img src="images/relax-img.jpg" alt="relax-img">                   
                    </div>

                    <div class="signup-form">
                        <form method="POST" class="register-form" id="register-form" >
                            <div class="form-row">

                                <div class="form-group">

                                    <!-- First name -->
                                    <div class="form-input">
                                        <label for="first_name" class="required">First name</label>
                                        <input type="text" name="first_name" id="first_name" class="input" required placeholder="Enter your first name"/>
                                    </div>

                                    <!-- Last name -->
                                    <div class="form-input">
                                        <label for="last_name" class="required">Last name</label>
                                        <input type="text" name="last_name" id="last_name" class="input" required placeholder="Enter your surname"/>
                                    </div>
                                    
                                    <!-- Email -->
                                    <div class="form-input">
                                        <label for="email" class="required">Email Address</label>
                                        <input type="text" name="email" id="email" class="input" required placeholder="Enter your email address"/>
                                    </div>
                                    
                                    <!-- No. of guests attending -->
                                    <div class="form-input">
                                        <label for="guests" class="required">Number of guests</label>
                                        <input type="number" name="guests" id="guests" class="input" required placeholder="Enter total number of attendants"/>
                                    </div>                                                           

                                    <!-- Contact details -->
                                    <div class="form-input">
                                        <label for="phone_number" class="required">Phone number</label>
                                        <input type="number" name="phone_number" id="phone_number" class="input" required placeholder="0558396316"/>
                                    </div>                                                                                                                           
                                </div>

                                <div class="form-group">

                                    <!-- Date set -->
                                    <div class="form-input">
                                        <label for="date" class="required">Reservation date</label>
                                        <input type="text" id="date" name="date" class="input" required placeholder="yyyy-mm-dd">
                                    </div>

                                    <!-- Time set -->
                                    <div class="form-input">
                                        <label for="time" class="required">Reservation time</label>
                                        <input type="text" id="time" name="time" class="input" required placeholder="00:00:00">
                                    </div>
                                    
                                    <!-- Submit -->
                                    <div class="form-submit">
                                        <input type="submit" value="Submit" class="submit" id="submit" name="ssubmit" />
                                        <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                                        <br>
                                        <br>
                                        <div class="foot"> <a href="../dashboard/index.php">Exit page</a> </div>
                                    </div>
                                </div>  
                            </div>                                                                                                                                                                                                                                                            
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- JS -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/bootstrap-clockpicker.min.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/nouislider/nouislider.min.js"></script>
        <script src="vendor/wnumb/wNumb.js"></script>
        <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>

