<?php
if(isset($_POST['password-reset-token']) &amp;&amp; $_POST['email'])
{
    include "dbconfig.php";
     
    $User_id = $_POST['email'];
 
    $result = mysqli_query($conn,"SELECT * FROM user_reg WHERE email='" . $User_id . "'");
 
    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     
     $token = md5($User_id).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    $update = mysqli_query($conn,"UPDATE user_reg set  passwordk='" . $passwordk . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $User_id . "'");
 
    $link = "<a href='www.yourwebsite.com/reset-password.php?key=".$email."&amp;token=".$token."'>Click To Reset password</a>";
 
    require_once('phpmail/PHPMailerAutoload.php');
 
    $mail = new PHPMailer();
 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "makaulucky5@gmail.com";
    // GMAIL password
    $mail->Password = "Lmakau@5!";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='makaulucky5@gmail.com';
    $mail->FromName='Lucky Makau';
    $mail->AddAddress('reciever_email_id', 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address. Go back";
  }
}
?>