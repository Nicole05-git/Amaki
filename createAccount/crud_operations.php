
<?php
    require('C:\xampp\htdocs\php_files\Amaki\createAccount\Database_Connection.php');

    // Inserting Data Into The Database
    session_start();

    // insert reserv table
    $fname= null;
    $lname= null;
    $email= null;
    $guests= null;
    $phone= null;
    $date= null;
    $time= null;
    
   
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['guests']) && !empty($_POST['phone_number']) && !empty($_POST['date']) && !empty($_POST['time']))
        {
            // Firstname
            $_SESSION['first_name']= $_POST['first_name'];
            $fname = $_SESSION['first_name'];
    
            // Lastname
            $_SESSION['last_name']= $_POST['last_name'];
            $lname = $_SESSION['last_name'];
    
            //email
            $_SESSION['email']= $_POST['email'];
            $email = $_SESSION['email'];

            //guests
            $_SESSION['guests']= $_POST['guests'];
            $guests= $_SESSION['guests'];
    
            //phone_number
            $_SESSION['phone_number']= $_POST['phone_number'];
            $phone = $_SESSION['phone_number'];   
         
            //date
            $_SESSION['date']= $_POST['date'];
            $date = $_SESSION['date'];

             //time
            $_SESSION['time']= $_POST['time'];
            $time= $_SESSION['time'];

            
            //insert into reserv table in database 
            $late="INSERT INTO `reserv`(`fname`, `lname`, `email`, `guests`, `contact`, `resv_date`, `resv_time`) VALUES ('$fname','$lname', '$email', '$guests', '$phone', '$date', '$time')";
    
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
            $run="INSERT INTO `login`(`email`, `passwordd`) VALUES ('$logname','$logpass')";
    
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

        // insert reserv table
        $fname= null;
        $lname= null;
        $email= null;
        $guests= null;
        $phone= null;
        $date= null;
        $time= null;
        
       
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['guests']) && !empty($_POST['phone_number']) && !empty($_POST['date']) && !empty($_POST['time']))
            {
                // Firstname
                $_SESSION['first_name']= $_POST['first_name'];
                $fname = $_SESSION['first_name'];
        
                // Lastname
                $_SESSION['last_name']= $_POST['last_name'];
                $lname = $_SESSION['last_name'];
        
                //email
                $_SESSION['email']= $_POST['email'];
                $email = $_SESSION['email'];
    
                //guests
                $_SESSION['guests']= $_POST['guests'];
                $guests= $_SESSION['guests'];
        
                //phone_number
                $_SESSION['phone_number']= $_POST['phone_number'];
                $phone = $_SESSION['phone_number'];   
             
                //date
                $_SESSION['date']= $_POST['date'];
                $date = $_SESSION['date'];
    
                 //time
                $_SESSION['time']= $_POST['time'];
                $time= $_SESSION['time'];
    
                             
                //insert into reserv table in database 
                $late="INSERT INTO `reserv`(`fname`, `lname`, `email`, `guests`, `contact`, `resv_date`, `resv_time`) VALUES ('$fname','$lname', '$email', '$guests', '$phone', '$date', '$time')";
        
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