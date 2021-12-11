<?php
    require('<createAccount/crud_operations.php');

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
                    <img src="images/relax-img.jpg" alt="chef-img">                   
                </div>

                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">

                                <!-- First name -->
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name" required placeholder="Enter your first name"/>
                                </div>

                                <!-- Last name -->
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name" required placeholder="Enter your surname"/>
                                </div>
                                
                                <!-- Email -->
                                <div class="form-input">
                                    <label for="email" class="required">Email Address</label>
                                    <input type="text" name="email" id="email" required placeholder="Enter your email address"/>
                                </div>
                                
                                <!-- No. of guests attending -->
                                <div class="form-input">
                                    <label for="guests" class="required">Number of guests</label>
                                    <input type="number" name="guests" id="guests" required placeholder="Enter total number of attendants"/>
                                </div>                                                           

                                <!-- Contact details -->
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="number" name="phone_number" id="phone_number" required placeholder="0558396316"/>
                                </div>

                                
                                
                                                                
                            </div>
                            <div class="form-group">

                                <!-- Date set -->
                                <div class="form-input">
                                    <label for="date">Reservation date</label>
                                    <input class="date form-control" type="date" id="date" name="date" required placeholder="mm-dd-yyyy">
                                </div>

                                <!-- Time set -->
                                <div class="form-input">
                                    <label for="time">Reservation time</label>
                                    <input class="time form-control" type="time" id="time" name="time" required placeholder="00:00:00">
                                </div>

                                <!-- Gender -->
                                <div class="form-radio">                                
                                    <div class="label-flex">  
                                        <label for="payment">Gender</label>                                
                                    </div>
                                    <div class="form-radio-group" >            
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" value="Male" checked >
                                            <label for="cash">Male</label>
                                            <span class="check"></span>
                                        </div>
                                            <div class="form-radio-item">
                                            <input type="radio" name="gender" value="Female" checked>
                                            <label for="cheque"> Female</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- </div> -->
                                <!-- Submit -->
                                <div class="form-submit">
                                    <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                                    <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
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
    <!-- Bootstrap Datepicker JS -->
    <script src="js/vendor/bootstrap/bootstrap-datepicker.min.js"></script>
    <script src="js/vendor/bootstrap-clockpicker.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Page Script -->
    <script src="js/scripts.js"></script>

</body>
</html>

