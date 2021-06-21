<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Recuperar contraseña</title>
  </head>
  <body>
    <div class="float-start">
        <a href="index.html"><img src="logoSF.PNG" width="300" height="300"></a>
    </div>
        <div class="center">
            <div class="header">Recuperar contraseña</div>
    

                <form method="POST">
                    <div class="text-center">
                        <h6>Te enviaremos un codigo a este correo</h6>
                    </div>
                    <div class="input-group p-2" >
                        <input name="correo" required type="email" id="email" placeholder="Correo electronico">

                    </div>

                    <input type="submit" class="btn btn-success">
                    <label><a  href="inicioSesion.html"> cancelar</a></label>
                </form>

        </div>
    <?php  
        include("correo.php");

    ?>
    

  </body>
</html>
