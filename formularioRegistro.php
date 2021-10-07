<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyDreamTeam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="localhost:8080/proyectoV6am/style.css">
</head>
<body background= "http://localhost:8080/proyectoV6am/fondobasquet.jpg"> 
    
    <main>
        <div class="container">
            <form action="registrarUsuarios.php" method="POST">
               <center> <h1>Ingrese sus jugadores🏀 </h1></center>
                
               <center> 
               <div>
                <p>
                Arma tu 5 ideal para un juego de baloncesto!
                </p>
                </div>
                </center>
                <div class="row">
                    <div class="col">
                        <input style="background-color:#f5bc52;" type="text" class="form-control" placeholder="Nombre del jugador seleccionado" name="nombre">
                    </div>
                    <div class="col">
                        <input style="background-color:#f5bc52;" type="text" class="form-control" placeholder="Apellido del jugador seleccionado" name="apellido">
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold">Posicion:</label>
                        <textarea style="background-color:#f5bc52;" class="form-control" rows="4" placeholder="Posicion" name="Descripcion"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold">Foto:</label>
                        <input style="background-color:#f5bc52;" type="text" class="form-control" placeholder="URL fotografia" name="foto">
                    </div>
                </div>
                
              <br><br>
                <button style="BORDER: rgb(128,128,128) 4px outset; FONT-SIZE: 8pt; FONT-FAMILY: Verdana;"
             type="submit" class="btn btn-info btn-block" name="botonEnvio">Poner en la cancha</button>
            </form>
        </div>
<br><br>
<center>
    <button style="BORDER: rgb(128,128,128) 4px outset; FONT-SIZE: 8pt; FONT-FAMILY: Verdana;">
        <a href="listadoUsuarios.php" target="_blank">Ver mi plantilla</a>
        </button>
        </center>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>






</html>