<?php
// Función para conectarse a la base de datos
function conectar() {
    $contraseña = "Sant0run!2023*";
    $usuario = "ascplus1";
    $nombreBaseDeDatos = "PowerSai";
    $rutaServidor = "192.168.1.2"; 
    $conn = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
    return $conn;
}

// Función para obtener los datos de un departamento
function obtenerDatosDepartamento($departamento, $consulta) {
    $conn = conectar();
    $result = $conn->query($consulta);
    echo "<div id='resultados-$departamento' style='display: flex; flex-direction: column; row-gap: 2px; padding: 10px;'>";
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<div style='display: flex; justify-content: space-between; max-width: 400px;'>
              <div style='text-align: left;'>".$row["PRIMER_NOMBRE"]." ".$row["PRIMER_APELLIDO"]."</div>
              <div style='text-align: right;'>".$row["EXTENSION"]."</div>
            </div>";
    }
  
    echo "</div>";
    $conn = null;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Directorio de Extensiones</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> <!-- Agregar la referencia a la fuente -->
  </head>
  <body>
    <div class="central">
      <div class= "wrap">
        <div class="contenedorgeneral">
        <div class="banner">
        <div class = "cabecera">
        <h1>DIRECTORIO DE EXTENSIONES</h1>
      
          <div class= "titulo">
            <div class= "pbx">
            <img src="img/TELEFONO.png" alt="telefono" >
            <h1>PBX 04 - 5015206 </h1>
            </div>
          </div> 
        </div> 
        <img src="img/ISOTIPO.png" alt="isotipo" class="isotipo" >
        </div>
          <div class="contenedor"> 
            <div class="columna">
              <div class="rectangulo">
                  <div class="titulo-rectangulo">GERENCIA</div>
                  <div class="linea"></div>
                 
                  <?php
                    $consulta = "SELECT SUBSTRING(NOMBRE, 1, CHARINDEX(' ', NOMBRE + ' ') - 1) AS PRIMER_NOMBRE, SUBSTRING(APELLIDOS, 1, CHARINDEX(' ', APELLIDOS + ' ') - 1) AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT WITH(NOLOCK) WHERE DEPARTAMENTO = 'DIR'";
                    obtenerDatosDepartamento('DIR', $consulta);
                  ?>
              </div>

              <div class="rectangulo">
                  <div class="titulo-rectangulo_impar">FINANCIERO</div>
                  <div class="linea"></div>
                 
                  <?php
                    $consulta = "SELECT SUBSTRING(NOMBRE, 1, CHARINDEX(' ', NOMBRE + ' ') - 1) AS PRIMER_NOMBRE, SUBSTRING(APELLIDOS, 1, CHARINDEX(' ', APELLIDOS + ' ') - 1) AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT WITH(NOLOCK) WHERE DEPARTAMENTO = 'FIN'";
                    obtenerDatosDepartamento('FIN', $consulta);
                  ?>
              </div>
                   

              <div class="rectangulo">
                  <div class="titulo-rectangulo">CONTROL CAJA</div>
                  <div class="linea"></div>
                 
                  <?php
                    $consulta = "SELECT SUBSTRING(NOMBRE, 1, CHARINDEX(' ', NOMBRE + ' ') - 1) AS PRIMER_NOMBRE, SUBSTRING(APELLIDOS, 1, CHARINDEX(' ', APELLIDOS + ' ') - 1) AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT WITH(NOLOCK) WHERE DEPARTAMENTO = 'CTC'";
                    obtenerDatosDepartamento('CTC', $consulta);
                  ?>
              </div>

              <div class="rectangulo">
                  <div class="titulo-rectangulo_impar">CONTABILIDAD</div>
                  <div class="linea"></div>
                  <?php
                    $consulta = "SELECT SUBSTRING(NOMBRE, 1, CHARINDEX(' ', NOMBRE + ' ') - 1) AS PRIMER_NOMBRE, SUBSTRING(APELLIDOS, 1, CHARINDEX(' ', APELLIDOS + ' ') - 1) AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT WITH(NOLOCK) WHERE DEPARTAMENTO = 'CON'";
                    obtenerDatosDepartamento('CON', $consulta);
                  ?>
              </div>

              <div class="rectangulo">
                  <div class="titulo-rectangulo">TALENTO HUMANO</div>
                  <div class="linea"></div>
                 
                  <?php
                    $consulta = "SELECT SUBSTRING(NOMBRE, 1, CHARINDEX(' ', NOMBRE + ' ') - 1) AS PRIMER_NOMBRE, SUBSTRING(APELLIDOS, 1, CHARINDEX(' ', APELLIDOS + ' ') - 1) AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT WITH(NOLOCK) WHERE DEPARTAMENTO = 'THU'";
                    obtenerDatosDepartamento('THU', $consulta);
                  ?>
              </div>

              <div class="rectangulo">
                  <div class="titulo-rectangulo_impar">SEGURIDAD/MONITOREO</div>
                  <div class="linea"></div>
                 
                  <?php
                    $consulta = "SELECT SUBSTRING(NOMBRE, 1, CHARINDEX(' ', NOMBRE + ' ') - 1) AS PRIMER_NOMBRE, SUBSTRING(APELLIDOS, 1, CHARINDEX(' ', APELLIDOS + ' ') - 1) AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT WITH(NOLOCK) WHERE DEPARTAMENTO = 'CCT'";
                    obtenerDatosDepartamento('CCT', $consulta);
                  ?>
              </div>
              

    

      </div>

      <div class="columna">
              <div class="rectangulo">
                <div class="titulo-rectangulo">ASISTENTE DE GERENCIA</div>
                <div class="linea"></div>

                <?php
                    $consulta = "SELECT SUBSTRING(NOMBRE, 1, CHARINDEX(' ', NOMBRE + ' ') - 1) AS PRIMER_NOMBRE, SUBSTRING(APELLIDOS, 1, CHARINDEX(' ', APELLIDOS + ' ') - 1) AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT WITH(NOLOCK) WHERE DEPARTAMENTO = 'ADG'";
                    obtenerDatosDepartamento('ADG', $consulta);
                  ?>
                
              </div>

              <div class="rectangulo">
                  <div class="titulo-rectangulo_impar">COMPRAS</div>
                  <div class="linea"></div>
                  
                  <?php
                    $consulta = "SELECT SUBSTRING(NOMBRE, 1, CHARINDEX(' ', NOMBRE + ' ') - 1) AS PRIMER_NOMBRE, SUBSTRING(APELLIDOS, 1, CHARINDEX(' ', APELLIDOS + ' ') - 1) AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT WITH(NOLOCK) WHERE DEPARTAMENTO = 'COM'";
                    obtenerDatosDepartamento('COM', $consulta);
                  ?>
              </div>

              <div class="rectangulo">
                  <div class="titulo-rectangulo">SISTEMAS</div>
                  <div class="linea"></div>
                 
                  <?php
                    $consulta = "SELECT SUBSTRING(NOMBRE, 1, CHARINDEX(' ', NOMBRE + ' ') - 1) AS PRIMER_NOMBRE, SUBSTRING(APELLIDOS, 1, CHARINDEX(' ', APELLIDOS + ' ') - 1) AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT WITH(NOLOCK) WHERE DEPARTAMENTO = 'SIS'";
                    obtenerDatosDepartamento('SIS', $consulta);
                  ?>
              </div>

              <div class="rectangulo">
                  <div class="titulo-rectangulo_impar">MARKETING</div>
                  <div class="linea"></div>
                 
                  <?php
                    $consulta = "SELECT SUBSTRING(NOMBRE, 1, CHARINDEX(' ', NOMBRE + ' ') - 1) AS PRIMER_NOMBRE, SUBSTRING(APELLIDOS, 1, CHARINDEX(' ', APELLIDOS + ' ') - 1) AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT WITH(NOLOCK) WHERE DEPARTAMENTO = 'MRK'";
                    obtenerDatosDepartamento('MRK', $consulta);
                  ?>
              </div>
              

              <div class="rectangulo">
                  <div class="titulo-rectangulo">RECEPCIÓN</div>
                  <div class="linea"></div>
                  <?php
                    $consulta = "SELECT SUBSTRING(NOMBRE, 1, CHARINDEX(' ', NOMBRE + ' ') - 1) AS PRIMER_NOMBRE, SUBSTRING(APELLIDOS, 1, CHARINDEX(' ', APELLIDOS + ' ') - 1) AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT WITH(NOLOCK) WHERE DEPARTAMENTO = 'RCP'";
                    obtenerDatosDepartamento('RCP', $consulta);
                  ?>
              </div>
        </div>

        <div class="columna">

                <div class="rectangulo">
                        <div class="titulo-rectangulo_impar">CORPORATIVO/CALL CENTER</div>
                        <div class="linea"></div>
                      
                        <?php
                            $consulta = "SELECT DIR.NOMBRE AS PRIMER_NOMBRE, DIR.APELLIDOS AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT DIR WITH(NOLOCK) WHERE DEPARTAMENTO = 'VEN'";
                            
                            obtenerDatosDepartamento('VEN', $consulta);
                          ?>
                </div>
              <div class="rectangulo">
                <div class="titulo-rectangulo">GUAYAQUIL</div>
                <div class="linea"></div>
              
                <?php
                    $consulta = "SELECT DIR.NOMBRE AS PRIMER_NOMBRE, DIR.APELLIDOS AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT DIR WITH(NOLOCK) WHERE DEPARTAMENTO = 'GYQ'";
                    
                    obtenerDatosDepartamento('GYQ', $consulta);
                  ?>
              </div>

              <div class="rectangulo">
                  <div class="titulo-rectangulo_impar">PROVINCIAS</div>
                  <div class="linea"></div>
                
                  <?php
                    $consulta = "SELECT DIR.NOMBRE AS PRIMER_NOMBRE, DIR.APELLIDOS AS PRIMER_APELLIDO, EXTENSION FROM DIRECTORIOEXT DIR WITH(NOLOCK) WHERE DEPARTAMENTO = 'PRV'";
                    
                    obtenerDatosDepartamento('PRV', $consulta);
                  ?>
                </div>
        </div>

</div>
</div>
</div>


		
</body>
</html>



























