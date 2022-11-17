<?php 
session_start();
include("con_db.php");
$nameUser = trim($_POST['userLog']);
$userPass = trim($_POST['passLog']);
$consulta = "SELECT username, pass FROM db_alumnos";
$result = mysqli_query($conex,$consulta);
while($fetch = mysqli_fetch_assoc($result)){
    if($nameUser == $fetch["username"] &&$userPass == $fetch["pass"] ){
      
        $_SESSION['users']=$nameUser;
        

        header("Location:bienvenido.php"); 
        exit;
      
        
    };
    
}; 

echo '<script>alert("No hay ningun usuario registrado con ese nombre/contraseña")
location.assign("index.php")
</script>';

?>