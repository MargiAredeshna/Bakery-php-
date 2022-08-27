<?php 
 include 'dbcon.php';


if(isset($_POST['contact'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(name, email, subject,message,phone) VALUES ('$name','$email','$subject','$message','$phone')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
      } else {
        header("Location: login.php");
      }
}



// user SignUp
if(isset($_POST['Signmeup'])){
  $uname = $_POST['uname'];
  $uemail = $_POST['uemail'];
  $upassword = $_POST['upassword'];
  
  $check_email = "SELECT * FROM user WHERE email = '$uemail' ";
  $result_email = $conn->query($check_email);
  if($result_email->num_rows > 0){
    header("Location: login.php?login=allraday");
  }else {
  $sql = "INSERT INTO user(name, email, password) VALUES ('$uname','$uemail','$upassword')";
  if ($conn->query($sql) === TRUE) {
         $to = "$uemail";
         $subject = "Your logineded In Bakery" ;
         $body = "Your information: \nUsername: $uname\nE-Mail: $uemail\nYour Password: $upassword\n \n Use This Email And Password To Sign In From.";
         
         $retval = mail ($to,$subject,$body);
         if($retval) {
          header("Location: login.php");
         }else {
          header("Location: login.php?login=fail");
         }
    } else {
      header("Location: index.php");
    }
  }
}


// user Login
if (isset($_POST['userlogin'])) {
  $uname = $_POST['uname'];
  $uemail = $_POST['uemail'];
  $password = $_POST['password'];
  
  $sql = "SELECT * FROM user where email='$uemail' and password='$password'";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
    session_start();
    $_SESSION["userlogin"] = true;
    $_SESSION["userdata"] =  $uemail;    
    header("Location: index.php");
  } else {
    header("Location: login.php?login=fail");
  }
}

// FeedBack Add
if (isset($_POST['feedback'])) {
$producatid=$_POST['producatid'];
$userid=$_POST['userid'];
$useremail=$_POST['useremail'];
$message=$_POST['message'];
  if (is_null($userid)) {
      header('Location:login.php');
  }
  $sql = "insert into feedback(p_id,user_id,feedback) values($producatid,$userid,'$message')";
  if ($conn->query($sql) === TRUE) {
    header("Location: product_details.php?id=$producatid&action=serach");
  }

}
?>