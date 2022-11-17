<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>



<div class="container_register">

<form method="POST" action="log.php" class="container_login">
    <h3>Logearse</h3>
   <span>Nombre de usuario: <input type="text" name="userLog" class="username"></span>
    <span>Contraseña:<input type="text" class="passLog" name="passLog"></span> 
    <input name="btn_snd" class="btn_snd" type="submit" value="Enviar Log">
    <a href="index.php">¿No te has registrado?</a>    
</form>

    <div class="container_animacion" >
        <div class="ball" data-velocidad="5" ></div>
        <div class="ball" data-velocidad="-2" ></div>
        <div class="ball" data-velocidad="6"></div>
        <div class="ball" data-velocidad="2"></div>
        <div class="ball" data-velocidad="-4"></div> 
    </div>
</div>



    

    <script src="app.js"></script>
</body>
</html>