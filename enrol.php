<?php
error_reporting (0);
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
<head>

  <?php  include '../head.php'; ?>

<body>
    
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
         <?php include '../nav.php'; ?>
    <!--====== HEADER PART ENDS ======-->

    <!--====== SEARCH BOX PART START ======-->

    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Enrol Now</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Enrol</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-singel" class="pt-70 pb-120 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="../images/teachers/t-1.jpg" alt="Teachers">
                        </div>
                        <div class="name">
                            <h6>User Name</h6>
                            <span></span>
                        </div>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div>
                    
                    </div> <!-- teachers left -->
                </div>

                <div class="col-lg-8">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="Student Enrollment" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Student Enrollment</a>
                            </li>
                            <li class="nav-item">
                                <a id="Login" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">Login</a>
                            </li>
                           
                        </ul> <!-- nav -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    <div class="singel-dashboard pt-40">
                                        
                                        <p>


                                        <?php 
  include '../dbconfig.php';

  
 if(isset($_POST['Submit_Enroll']))

 {

$FName= mysqli_real_escape_string($con, $_POST['FName']);                          
  $LName= mysqli_real_escape_string($con, $_POST['LName']);  
  $DOB= mysqli_real_escape_string($con, $_POST['DOB']);  
$address= mysqli_real_escape_string($con, $_POST['address']);   

  $City= mysqli_real_escape_string($con, $_POST['City']);  
 $Zip_Code= mysqli_real_escape_string($con, $_POST['Zip_Code']);  
 
  $Phone= mysqli_real_escape_string($con, $_POST['Phone']);
  $Email= mysqli_real_escape_string($con, $_POST['Email']);  
 

  $Training_start_date= mysqli_real_escape_string($con, $_POST['Training_start_date']);  
 
  $US_Citizen= mysqli_real_escape_string($con, $_POST['US_Citizen']); 

//echo ">>>>$DOB";
//echo "<br>>>>>$Training_start_date</br>";
$DOB=date('Y-m-d', strtotime($DOB));
$Training_start_date=date('Y-m-d', strtotime($Training_start_date));

// echo ">>>>$DOB";
//echo "<br>>>>>$Training_start_date</br>";


  $sql = "INSERT INTO student_enrollment 
(

    FName,
  LName,
  DOB,
  address,
  City,
  Zip_Code,
  Phone, 
  Email,

 Training_start_date,
 US_Citizen
 

) 

VALUES (
 '$FName',
  
  '$LName',
 '$DOB',
  '$address',
  '$City', 
  '$Zip_Code', 
  '$Phone',
   '$Email',
   
   '$Training_start_date',
   '$US_Citizen'
 
)";

if(mysqli_query($con, $sql)){





echo   "<div class='alert alert-success'>";
                      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
                      echo "<h5><b>You have been Enrolled Successfully</h5>";
                      echo   '</div>';    


 require_once 'email/mail_enroll_to_admin.php';                            
           
echo "
<p align=\"center\"><h5>You will be redirected to account creation in <span id=\"counter\">5</span> second(s).</h5></p>
<script type=\"text/javascript\">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=1) {
        location.href = 'student_registration.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>

";




    
        } else
        {
             echo   "<div class='alert alert-danger'>";
      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
      echo   "<strong>Oops! We could not Enroll you. Looks like you already enrolled. Kindly create an account by clicking 



<a class=\"btn btn-danger\" href=\"student_registration.php\">Create Account to Login</a>


      </strong> ";
      echo   '</div>';
    
        }
}
 include '../dbconfig.php';
// close connection
mysqli_close($con);
  
  
  
  ?>




    


  <form class="form-horizontal" method="post">
                                <div class="card-body">                               

                                    

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="FName" name="FName" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="LName" name="LName" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                                    </div>


                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Date of Birth:</label>
                                        <div class="col-sm-4">
                                            <input  class="form-control" id="date" placeholder="MM/DD/YYY" type="text" name="DOB" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Present Adress:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="address" name="address" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">City:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="City" name="City" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Zip Code:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Zip_Code" name="Zip_Code" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Phone No:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Phone" name="Phone" required="">
                                        </div>
                                    </div> 

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Email" name="Email" required="">
                                        </div>
                                    </div>                               

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 text-right control-label col-form-label">Training Start Date:</label>
                                        <div class="col-sm-4">
                                            <input  placeholder="MM/DD/YYY" type="text"  class="form-control" id="Training_start_date" name="Training_start_date" required="">
                                        </div>
                                    </div>

                                

                                    <div class="form-group row">

                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label" >Are you a US citizen/Resident?</label>
                                    <div class="col-sm-4">
                                        <select name="US_Citizen" class="form-control" id="US_Citizen" required="">
                                              <option name="US_Citizen" value="no">No</option>
                                              <option name="US_Citizen" value="yes">Yes</option>
                                        </select>
                                    </div>
                                      </div>

                                </div>
                                 <div class="form-group text-center">
                                  
                                        <button type="submit" id="submit" name="Submit_Enroll" class="btn btn-primary btn-lg btn-block" style=" background-color: darkgreen" aria-pressed="false" autocomplete="off"><b>  Submit </b></button>
                                    
                                </div>
                            </form>
            

      


                                        </p>
                                    </div> <!-- singel dashboard -->
                                   <!-- singel dashboard -->
                                    <!-- singel dashboard -->
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                <div class="courses-cont pt-20">
<br> 

                                    
<?php



if (isset($_POST['submitteacher']))
    {     
include_once '../dbconfig.php';

session_start();

$User_Name=$_POST['User_Name'];
$password=$_POST['Password'];


        
//$encryptpassword=md5($password);

//$encryptpasswordwithsalt=$encryptpasswordPTz~*mnh,mb3/8E9;    
        
        
$pass = $password;
$salt = '##[]_H38E9';
$hash1 = md5($pass.'$2y$07$'.$salt.'$');

//echo "Hashing: $hash1  User_Name $User_Name";        
                
  $query = mysqli_query($con,"SELECT * FROM student_registration WHERE User_Name='$User_Name' and Password1='$hash1' and Active ='YES'");

 if (mysqli_num_rows($query) >= 1)
{
 //echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";    

$_SESSION['User_Name']=$User_Name;
    header ("Location: index.php");

    
  }

 else
  {

                         $query = mysqli_query($con,"SELECT * FROM student_registration WHERE User_Name='$User_Name' and Password1='$hash1' and Active ='NO'");

                       if (mysqli_num_rows($query) >= 1)
                      {

       echo   "<div id='teacher' class='alert alert-info'>";
      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
      echo  " <strong>You haven't activated your account using the email you registered with! Go to your email and click the activation link sent to you during registration.</strong> ";
      echo   '</div>';

                      }

           

        else
        {
            
          
       echo   "<div id='teacher' class='alert alert-danger'>";
            echo  "<button class='close' data-dismiss='alert'>&times;</button>";
            echo  " <strong>Oops! Wrong Username or Password, or the account does not exist! Kindly enroll first</strong> ";
            echo   '</div>';
        

        
        
        }


 }
}
   




?>




                    <form action="" id="teacher" method="post" class="form-signin">
           
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" autofocus="" name="User_Name" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="Password" class="form-control" required="">
                        </div>
                      <br>

                     
                        <div class="form-group text-center">
                            <button type="submit" name="submitteacher" class="btn btn-primary btn-lg btn-block" style=" background-color: darkgreen"><strong>Login</strong></button>
                                           

                    </div>


                          


                           <div class="form-group text-center">
                            <h6><i>Forgot your Password? </i> 

                            <a href="reset.php"><font color="red"> <br>Reset</font></a>
                            </h6>
                            
                        </div>


                      
                    </form>
                                </div> <!-- courses cont -->
                            </div>
                            
                        </div> <!-- tab content -->
                    </div> <!-- teachers right -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

       <?php include '../footer.php'; ?>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>

</html>
