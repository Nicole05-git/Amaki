<?php
    require('../createAccount/Database_Connection.php');

    // Inserting Data Into The Database
    session_start();

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
            $useremail = $_SESSION['email'];

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
            $last = "INSERT INTO `reserv`(`fname`, `lname`, `email`, `guests`, `contact`, `resv_date`, `resv_time`) VALUES ('$firstname', '$lastname', '$useremail', '$theguests', '$tellphone', '$thedate', '$thetime')";
    
            //execute query statement
            $results = mysqli_query($conn, $last);
    
            //check sql results
            if($results == TRUE){
                echo "sign in successful";
            }
            else{
                echo "sign in not successful";
            }
            // header('Location: C:\xampp\htdocs\php_files\Amaki\dashboard\index.php');
        }
    }


    // LOGIN TABLE
    // insert login table
    $logname= null;
    $logpass = null;
        
    if(isset($_POST['logSubmit']))
    {
        if(!empty($_POST['user']) && !empty($_POST['pass']))
        {
            // Email
            $_SESSION['user']= $_POST['user'];
            $logname = $_SESSION['user'];
    
            // Password
            $_SESSION['pass']= $_POST['pass'];
            $logpass = $_SESSION['pass'];
    
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

?>