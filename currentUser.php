<?php include "db.php";

if(isset($_SESSION['user_id'])){
  $currentUser = "SELECT * FROM registration WHERE user_id='{$_SESSION['user_id']}'";
  $currentUserQuery = mysqli_query($connection,$currentUser);

  while($row = mysqli_fetch_assoc($currentUserQuery)){
    $user_name = $row['name'];
    echo " <a href='profilePage.php'>Hello,$user_name</a> ";
  }
} else {
  echo " <a href='login.php'>Profile</a> ";
}

 ?>
