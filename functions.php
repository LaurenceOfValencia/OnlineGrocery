<<?php

function check_login($con)
{
  if(isset($SESSION['id'])){

    $id = $SESSION['id'];
    $query = "select * from users where id = '$id' limit 1";
    $result = mysqli_query($con,$query);

    if($result && mysqli_num_rows($result) > 0){
      $user_data = mysqli_fetch_assoc($result);
      return $user_data;
    }
  }
//redirect to login
header("Location: login.php");
}


 ?>
