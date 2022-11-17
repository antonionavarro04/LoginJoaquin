<?php 

include("con_db.php");

 
if(isset($_POST['btn_snd'])){
    if(strlen($_POST['user']) >=1 && strlen($_POST['pass']) >=1 ){
        $nameUser = trim($_POST['user']);
        $userPass = trim($_POST['pass']);
        print $nameUser .  $userPass; 
         $consulta = "INSERT INTO db_alumnos(username,pass) VALUES ('$nameUser','$userPass')";
        $result = mysqli_query($conex, $consulta); 
      if($result){    
            header("Location: index.php");
            
            exit;

        }else{
            ?>
            <p class="error_Login">Ups ha ocurrido un error en su registro</p>
            <?php
        };  
    };

};


?>