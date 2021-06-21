<?php

if(isset($_POST['correo']) && !empty($_POST['correo'])){
    $destino=$_POST['correo'];
    $asunto="Recuperar contraseña";
    $mensaje="Felicidades";
    $autor="From: Exponente Gym"."\r\n";
    $autor.="Reply-To: Exponente Gym"."\r\n";
    $autor.="X-Mailer:PHP/".phpversion();
    $mail=mail($destino,$asunto,$mensaje,$autor);
    if($mail){
    echo "Correo Enviado";
    }
}else{
    echo "Correo erroneo";
}

?>