<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <title>Uso básico de PHP con formularios</title>
  </head>
  <body>
    <?php
        if(isset($_GET['error'])){
          echo "<h5>". $_GET['error'] ."</h5>";
        }
    ?>
    <h2>Ingrese datos vehículo</h2>
    <div class="miformulario">
        <form action="nuevo_agrega.php" method="post">
            <label for="marca">Ingrese marca de vehículo</label>
            <input type="text" name="marca" id="marca" required/>
            <br/>
            <br/>
            <label for="placa">Ingrese placa del vehículo</label>
            <input type="text" name="placa" id="placa" required/>
            <br/>
            <br/>
            <label for="anio_fabricacion">Ingrese año de fabricación de vehículo</label>
            <input type="number" name="anio_fabricacion" id="anio_fabricacion" required/>
            <br/>
            <br/>
            <label for="tipo">Ingrese tipo de vehículo</label>
            <input type="text" name="tipo" id="tipo" required/>
            <br/>
            <br/>
            <label for="propietario">Ingrese nombres de propietario</label>
            <input type="text" name="propietario" id="propietario" required/>
            <br/>
            <br/>

            <input type="submit" name="enviar" id="enviar" value="Enviar" />
        </form>
    </div>
  </body>
</html>
