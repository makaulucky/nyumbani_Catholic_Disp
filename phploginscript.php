

<?php

if (isset($_POST['Submit']))
    {     
include_once 'dbconfig.php';
$username=$_POST['username'];
$password=$_POST['Passwordk'];

// Starting session

 
// Storing session data
$_SESSION["username"] = "$username";



//$encryptpassword=md5($password);

//$encryptpasswordwithsalt=$encryptpasswordPTz~*mnh,mb3/8E9;    
        
        
$pass = $password;
//$salt = '##[]_H38E9';
//$hash = md5($pass, '$2y$07$'.$salt.'$');

     
                
  $query = mysqli_query($con, "SELECT * FROM user_reg WHERE username='$username' and passwordk='$pass' ");

 if (mysqli_num_rows($query) >= 1)
{ 

    header("Location:index.php");
    
  }

            

        else
        {            
          
       echo   "<div class='alert alert-danger'>";
            echo  "<button class='close' data-dismiss='alert'>&times;</button>";
            echo  " <strong>Oops! Account does not exist! Kindly register as a memeber</strong> ";
            echo   '</div>';
        

        
        
        }


 }


?>                