<?php
    require('../createAccount/Database_Connection.php');

    // CREATE OPERATOR
    // Inserting Data Into The Database
    session_start();

    $update= false;
    $id = 0;
    // RESERV TABLE
    // insert reserv table
    $firstname= null;
    $lastname= null;
    $usermail= null;
    $theguests= null;
    $tellphone= null;
    $thedate= null;
    $thetime= null;

     
   
    if(isset($_POST['ssubmit']))
    {
        if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['guests']) && !empty($_POST['phone_number']) && !empty($_POST['date']) && !empty($_POST['time']))
        {
            // Firstname
            $_SESSION['first_name']= $_POST['first_name'];
            $firstname = $_SESSION['first_name'];
    
            // Lastname
            $_SESSION['last_name']= $_POST['last_name'];
            $lastname = $_SESSION['last_name'];
    
            //email
            $_SESSION['email']= $_POST['email'];
            $usermail = $_SESSION['email'];

            //guests
            $_SESSION['guests']= $_POST['guests'];
            $theguests = $_SESSION['guests'];
    
            //phone_number
            $_SESSION['phone_number']= $_POST['phone_number'];
            $tellphone = $_SESSION['phone_number'];   
         
            //date
            $_SESSION['date']= $_POST['date'];
            $thedate = $_SESSION['date'];

             //time
            $_SESSION['time']= $_POST['time'];
            $thetime= $_SESSION['time'];

                        
            //insert into reserv table in database 
            $last = "INSERT INTO `reserv`(`fname`, `lname`, `email`, `guests`, `contact`, `resv_date`, `resv_time`) VALUES ('$firstname', '$lastname', '$usermail', '$theguests', '$tellphone', '$thedate', '$thetime')";
          
    
            //execute query statement
            $results = mysqli_query($conn, $last);

            //check sql results
            if($results == TRUE){
                echo "sign in successful";
            }
            else{
                echo "sign in not successful";
            }           
        }

        //  Check again where this goes pleaseeeeeee
        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";
        header("location:../createAccount/reservation.php");
    }


    
    // READ, EDIT & DELETE OPERATOR FOR RESERV TABLE.
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $conn -> query("DELETE FROM `reserv` WHERE `reservID` = $id") or die($conn -> error);

        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";
        header("location:../createAccount/reservation.php");
    }

    // Edit
    if(isset($_GET['edit']))
    {
        $id = $_GET['edit'];

        $update= true;
        $result = $conn-> query ("SELECT * FROM `reserv` WHERE `reservID` = $id") or die($conn -> error);

        if($result== true)
        {
            $row = $result -> fetch_array();
            $firstname = $row['fname'];
            $lastname = $row['lname'];
            $usermail = $row['email'];
            $theguests = $row['guests'];
            $tellphone = $row['contact'];
            $thedate = $row['resv_date'];
            $thetime = $row['resv_time'];
        }

    }

    // Update
    if(isset($_POST['update']))
    {
        $id = $_POST['reservID'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $usermail = $_POST['email'];
        $theguests = $_POST['guests'];
        $tellphone = $_POST['contact'];
        $thedate = $_POST['resv_date'];
        $thetime = $_POST['resv_time'];   
        
        $conn -> query("UPDATE reserv SET fname='$firstname', lname='$lastname', email='$usermail', guests='$theguests', contact='$tellphone', resv_date='$thedate', resv_time='$thetime' WHERE reservID=$id") or 
        die($conn->error); 
        $_SESSION['message'] = "Record has been updated!";
        $_SESSION['msg_type'] = "warning";

        header("location:../createAccount/reservation.php");

    }


    // LOGIN TABLE
    // insert login table
    $logname= null;
    $logpass = null;
        
    if(isset($_POST['logSubmit']))
    {
        if(!empty($_POST['email']) && !empty($_POST['password']))
        {
            // Email
            $_SESSION['email']= $_POST['email'];
            $logname = $_SESSION['email'];
    
            // Password
            $_SESSION['password']= $_POST['password'];
            $logpass = $_SESSION['password'];
    
            //insert into reserv table in database 
            $run="INSERT INTO `login`(`email`, `passwordd`) VALUES ('$logname', MD5('$logpass'))";
    
            //execute query statement
            $results = mysqli_query($conn, $run);
    
            //check sql results
            if($results == TRUE){
                echo "sign in successful";
            }
            else{
                echo " sign in not successful";
            }
        }
    }

    // // LOGIN====================
    // if(isset($_POST['logSubmit']))
    // {
    //     $logname=$_POST['email'];
    //     $logpass= $_POST['password'];

    //     $logn = mysqli_real_escape_string($conn, $logname);
    //     $logp = mysqli_real_escape_string($conn, $logpass);

    //     $query = mysqli_query($conn, "SELECT * FROM `login` WHERE `email`='$logn' and `passwordd` ='$logp'") or 
    //     die(mysqli_error($conn));

    //     $row = mysqli_fetch_array($query);

    //     $name = $row['email'];
    //     $word = $row['passwordd'];
    //     $id = $row['customerID'];

    //     $counter = mysqli_num_rows($query);    
    //     if ($counter == 0)
    //     {
    //         echo "<script type='text/javascript'>alert('Invalid: Username or Password!')";
    //         // document.location='signin-up.php' </script>";
    //     }
    //     else
    //     {
    //         $_SESSION['customerID'] = $id;
    //         $_SESSION['email'] = $name;
    //         $_SESSION['password'] = $word;

    //         echo "<script type='text/javascript'>document.location='../dashbaord/index.php'</script>";
    //     }
    // }


    // SIGNUP
    // insert reserv table
    $fullname= null;
    $mail= null;
    $number= null;
    $word= null;
    $age= null;
        
       
    if(isset($_POST['sign_up']))
    {
        if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['pass']) && !empty($_POST['age']))
        {
            // Fullname
            $_SESSION['full_name']= $_POST['full_name'];
            $fullname = $_SESSION['full_name'];
    
            //email
            $_SESSION['email']= $_POST['email'];
            $mail = $_SESSION['email'];

            //phone_number
            $_SESSION['phone']= $_POST['phone'];
            $number = $_SESSION['phone'];   
            
            //password
            $_SESSION['pass']= $_POST['pass'];
            $word = $_SESSION['pass'];

                //age
            $_SESSION['age']= $_POST['age'];
            $age= $_SESSION['age'];

                            
            //insert into reserv table in database 
            $late="INSERT INTO `signup`(`s_username`, `s_email`, `contactt`, `s_passwordd`, `age`) VALUES ('$fullname', '$mail', '$number', MD5('$word'), '$age')";
    
            //execute query statement
            $results = mysqli_query($conn, $late);
    
            //check sql results
            if($results == TRUE){
                echo "sign in successful";
            }
            else{
                echo " sign in not successful";
            }
        }
    }


    // Subscribe
    // insert reserv table
    $sub= null;
           
    if(isset($_POST['subscribe']))
    {
        if(!empty($_POST['email']))
        {
            // Subscribe
            $_SESSION['email']= $_POST['email'];
            $sub = $_SESSION['email'];
    
                         
            //insert into reserv table in database 
            $try="INSERT INTO `subscribe`(`email`) VALUES ('$sub')";
    
            //execute query statement
            $results = mysqli_query($conn, $try);
    
            //check sql results
            if($results == TRUE){
                echo "sign in successful";
            }
            else{
                echo " sign in not successful";
            }
        }
    }

    




    

    // // Check existence of id parameter before processing further
    // if(isset($_POST["reservID"]) && !empty(trim($_POST["reservID"])))
    // {
                
    //     // Prepare a select statement
    //     $sql = "SELECT * FROM reserv WHERE reservID = ?";
        
    //     if($stmt = $mysqli->prepare($sql))
    //     {
    //         // Bind variables to the prepared statement as parameters
    //         $stmt->bind_param("i", $param_id);
            
    //         // Set parameters
    //         $param_id = trim($_POST["reservID"]);
            
    //         // Attempt to execute the prepared statement
    //         if($stmt->execute())
    //         {
    //             $result = $stmt->get_result();
                
    //             if($result->num_rows > 0)
    //             {
    //                 /* Fetch result row as an associative array. Since the result set
    //                 contains only one row, we don't need to use while loop */
    //                 $row = $result->fetch_array(MYSQLI_ASSOC);
                    
    //                 // Retrieve individual field value
    //                 $firstname = $row["first_name"];
    //                 $lastname = $row["last_name"];
    //                 $email = $row["email"];
    //                 $tellphone = $row["phone_number"];
    //                 $thedate = $row["date"];
    //                 $thetime = $row["time"];
                    
    //             } 
    //             else{
    //                 // URL doesn't contain valid id parameter. Redirect to error page
    //                 header("location:../dashboard/error.php");
    //                 exit();
    //             }
                
    //         } else{
    //             echo "Oops! Something went wrong. Please try again later.";
    //         }
    //     }
        
    //     // Close statement
    //     $stmt->close();
        
    // } 
    // else{
    //     // URL doesn't contain id parameter. Redirect to error page
    //     header("location:../dashboard/error.php");
    //     exit();
    // }



?>