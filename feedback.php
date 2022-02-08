<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback Page</title>


    <link rel="stylesheet" href="styles/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Balsamiq+Sans&family=Pacifico&family=Satisfy&family=Shadows+Into+Light&family=Vollkorn:ital@0;1&display=swap" rel="stylesheet">


  </head>
  <body style="background-color: #CDF0EA;">



    <!-- Navbar section -->
    <div class="navigationHeader">
  <a href="#">Swaram</a>

<a href="index.php" style="margin-left:900px;">Home</a>
  <a href="course.php">Courses</a>
  <!-- <a href="myLearningindex.php">My Learning</a> -->
  <?php if(isset($_SESSION['user_id'])){
    ?> <a href="myLearningindex.php">My Learning</a>
  <?php   } ?>
  <?php if(isset($_SESSION['user_id'])){
  ?>  <a href="teach.php">Teach Course</a>
<?php    } else{
  ?>  <a href="login.php">Teach Course</a>
<?php } ?>

  <?php if(isset($_SESSION['user_id'])){
    ?> <a href="login.php" style="display: none">Login/Sign Up</a>
  <?php   } else {
   ?> <a href="login.php">Login/Sign Up</a>
  <?php   } ?>
  <a href="profilePage.php" style="padding:2px;"><?php include "currentUser.php" ?></a>
    </div>


        </div>


    <div class="mainHeading" style="margin-top:100px;">
      <h1 class="subHeading">Post your feedback</h1>
    </div>

<?php include "db.php";
if(isset($_POST['feedbackSubmit'])){
  if(isset($_SESSION['user_id'])){
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $comment = mysqli_real_escape_string($connection,$_POST['comment']);
    $rating = mysqli_real_escape_string($connection,$_POST['rating']);

    $feedbackInsert = "INSERT INTO feedback (user_id,name,comment,rating) VALUES ('{$_SESSION['user_id']}','$name','$comment','$rating')";
    $feedbackInsertQuery = mysqli_query($connection,$feedbackInsert);

    if($feedbackInsertQuery){
      ?> <script>
        location.replace("index.php");
      </script>
      <?php
    } else{
      ?> <script>
        alert('Sorry, there was an error');
      </script>
      <?php
    }
  }
}
 ?>


<div class="feedbackForm" style="background-image: linear-gradient(to bottom right, #004D61, #4CBBB9,#AEE7E8);
text-align: center;
width: 400px;
height: 400px;
margin-left: 600px;
border-radius: 10px;
">
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <label> <p class="labelField" style="padding:5px;margin-top:20px;"> Name:</p></label>
    <input type="text" name="name" class="inputField" style="padding:5px;">
    <br>
  <label><p class="labelField" style="padding:5px;">Comment:</p></label>
  <input name="comment" type="text" class="inputField">
    <br>
    <label><p class="labelField" style="padding:5px;">Rate out of 5:</p></label>
    <input name="rating" type="text" class="inputField" style="padding:5px;">
      <br>
    <button type="submit" name="feedbackSubmit" class="loginBtn">Submit</button>
  </form>
</div>







<section class="foot">
<div style="height:170px;bottom:0;margin-top:30px; width:100%;left:0;">
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container-fluid p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></a>
<!-- Youtube-->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg></i
      ></a>


      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="#">SWARAM</a>
  </div>
  <!-- Copyright -->

</div>
</section>
</footer>
  </body>
</html>
