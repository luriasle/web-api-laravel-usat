<?php
  include_once "somosioticos/somosioticos_dialogflow.php";
  credenciales('lurias','luriasle.');

  $servername = "localhost";
  $username = "bd6c4fca944d87";
  $password = "5f9c97af";
  $dbname = "heroku_e24b146733fddbd";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if(intent_recibido("consultar_especialidades")){
    $sql = "SELECT name FROM `specialties`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $specialties = "Tenemos las siguientes especialidades: ";
        while($row = $result->fetch_assoc()) {
          $specialties .= $row["name"] . "\n";
        }
        enviar_texto($specialties);
    } else {
        enviar_texto("No se encontraron especialidades.");
    }

    mysqli_close($conn);
  }

  if(intent_recibido("brindar_horarios_medicos")){
    enviar_texto("Cliente consultó horariosss");
  }

 ?>
