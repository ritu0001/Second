<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
    body{ background-image: url('greenww.jpg');
     background-repeat: no-repeat;
   background-attachment: fixed;  
   background-size: cover;}
  </style>
</head>

<body >
   
<div class="container">

   <div class="content">
     <br> <p>To return to home page click !!</p>
      <a href="New Text Document.html" class="btn">Home</a>
   </div>

</div>

</body>
</html>