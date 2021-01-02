<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

$showalert =false;
$showerror = false;
require'conn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$exists=false;
if(($password==$password2)&& $exists==false){
  $sql="INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";
  $result=mysqli_query($conn,$sql);
  if($result){
    $showalert = true;

  }
else{
    $showerror = "username already exist or password dosen't match";
}
}


}
?>