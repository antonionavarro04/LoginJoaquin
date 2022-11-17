<?php
session_start();
include("con_db.php");
if(!isset($_SESSION['users'])){
    header("location:login.php");
    session_destroy();
    die;
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    
    <title>Document</title>
</head>
<body>

<style>
    .a_home{
        position: absolute;
        right: 0;
        bottom:50px;
        margin: 20px;
       
        box-shadow:0px 0px 10px 5px rgba(0,0,0,0.05);
        border-radius:50%;
        background:#fff;
        padding:20px;
    }
    .a_home img{
        width:100%;
    }
</style>

 <h1 class="ball nameUser">Bienvenido <br><?php   echo $_SESSION["users"];?></h1>
   <script src="generateBalls.js"></script>
   <a class="a_home" href="index.php"><img src="house-door.svg"></a>

   <div class="notificacion">
       Hey!  &#128075; Si no te gusta el patron que se ha generado puedes cambiarlo pulsando F5
       <div class="barra">
           
       </div>
   </div> 

   <script>

       const containerNotificacion = document.querySelector(".notificacion");
       setInterval(() => {
           containerNotificacion.style.display = "none"
       }, 8100);
   </script>

</body>
</html>