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

        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- <script src="../dashboard/assets/vendor/bootstrap/js/bootstrap.min.js"></script> -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <?php
        if (isset($_SESSION['message'])):  ?>

    <div class=" alert alert-<?=$_SESSION['msg_type']?>">

        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>

    <?php 
        endif
     ?>

        <div class="container">
            <?php            
                // require('Database_Connection.php');
                // $result = $conn -> query("SELECT * FROM reserv") or 
                // die ($conn -> error);
                $query= "SELECT * FROM reserv;";
                $result= $conn-> query($query)or 
                die ($conn -> error);
                // pre_r($result);    
                // pre_r($result -> fetch_assoc());
            ?> 

            <div class="row justify-content-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>First Name </th>
                            <th>Last Name </th>
                            <th>Email Address </th>
                            <th>Guests </th>
                            <th>Contact </th>
                            <th>Resv Date </th>
                            <th>Resv Time </th>
                            <th colspan="2">Action </th>

                    </thead>
            
            <?php
                while ($row = $result -> fetch_assoc()):   ?>
                    <tr>
                        <td> <?php echo $row['fname']; ?> </td>
                        <td> <?php echo $row['lname']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                        <td> <?php echo $row['guests']; ?> </td>
                        <td> <?php echo $row['contact']; ?> </td>
                        <td> <?php echo $row['resv_date']; ?> </td>
                        <td> <?php echo $row['resv_time']; ?> </td>
                        <td> 
                            <a href="reservation.php?edit=<?php echo $row['reservID']; ?>" 
                            class= "btn btn-info">Edit</a>
                            <!-- COMEBACK AND CHECK PROCESS.PHP FOR DELETE -->
                            <a href="crud_operations.php?delete=<?php echo $row['reservID']; ?>"
                            class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php 
                    endwhile; 
                ?>
                </table>

            </div>

            <?php
                function pre_r($array)
                {
                    echo '<pre>';
                    print_r ($array);
                    echo '</pre>';
                }

            ?>
        </div> 

        <div class="main">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-img">
                        <img src="images/relax-img.jpg" alt="relax-img">                   
                    </div>

                    <div class="signup-form">
                        <form action="crud_operations.php" method="POST" class="register-form" id="register-form" >
                            <input type="hidden" name="reservID" value="<?php echo $id; ?>">
                            <div class="form-row">

                                <div class="form-group">

                                    <!-- First name -->
                                    <div class="form-input">
                                        <label for="first_name" class="required">First name</label>
                                        <input type="text" name="first_name" id="first_name" class="input" value="<?php echo $firstname; ?>" required placeholder="Enter your first name"/>
                                       
                                    </div>

                                    <!-- Last name -->
                                    <div class="form-input">
                                        <label for="last_name" class="required">Last name</label>
                                        <input type="text" name="last_name" id="last_name" class="input" value="<?php echo $lastname; ?>" required placeholder="Enter your surname"/>
                                        
                                    </div>
                                    
                                    <!-- Email -->
                                    <div class="form-input">
                                        <label for="email" class="required">Email Address</label>
                                        <input type="text" name="email" id="email" class="input" value="<?php echo $usermail; ?>" required placeholder="Enter your email address"/>
                                        
                                    </div>
                                    
                                    <!-- No. of guests attending -->
                                    <div class="form-input">
                                        <label for="guests" class="required">Number of guests</label>
                                        <input type="number" name="guests" id="guests" class="input" value="<?php echo $theguests; ?>" required placeholder="Enter total number of attendants"/>
                                    </div>                                                           

                                    <!-- Contact details -->
                                    <div class="form-input">
                                        <label for="phone_number" class="required">Phone number</label>
                                        <input type="number" name="phone_number" id="phone_number" class="input" value="<?php echo $tellphone; ?>" required placeholder="0558396316"/>
                                       
                                    </div>                                                                                                                           
                                </div>

                                <div class="form-group">

                                    <!-- Date set -->
                                    <div class="form-input">
                                        <label for="date" class="required">Reservation date</label>
                                        <input type="text" id="date" name="date" class="form-control" value="<?php echo $thedate; ?>" required placeholder="yyyy-mm-dd">
                                       
                                    </div>

                                    <!-- Time set -->
                                    <div class="form-input">
                                        <label for="time" class="required">Reservation time</label>
                                        <input type="text" id="time" name="time" class="input" value="<?php echo $thetime; ?>" required placeholder="00:00:00">
                                        
                                    </div>
                                    
                                    <!-- Submit -->
                                    <div class="form-submit">
                                        <?php 
                                            if($update ==true):
                                        ?>
                                        <button type="submit" class="btn btn-info" name="update"> Update</button>
                                        <?php else: ?>        
                                        <button type="submit" value="Submit" class="submit" id="submit" name="ssubmit">Submit</button>
                                        <?php endif; ?> 
                                        <br>
                                        <br>
                                        <button type="submit" value="Reset" class="submit" id="reset" name="reset">Reset</button>
                                        <br>
                                        <br>
                                        <div class="foot"> <a href="../index.php">Exit page</a> </div>                                  
                                    </div>
                                </div>  
                            </div>                                                                                                                                                                                                                                                            
                        </form>
                    </div>
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

