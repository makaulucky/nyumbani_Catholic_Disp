

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














<?php
if($_POST) {
$username = $_POST['username'];
$password = $_POST['passwordk'];

$con = mysql_connect("localhost","root","");
if(!$con) {
die('Could not connect: ' . mysql_error());
}

mysql_select_db("user_reg", $con);

$result = mysql_query("SELECT username, passwordk FROM user_reg");

while($row = mysql_fetch_array($result)) {
if($row['username'] == $username && $row['passwordk'] == $password) {

$_SESSION['username'] = $username;
header("Location: index.php");
    exit;
 }
}
echo '<script type="text/javascript">alert(\'Wrong username or password\')</script>';
}
?>