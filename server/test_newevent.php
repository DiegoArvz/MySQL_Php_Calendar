<?php


  require('conector.php');

  $con = new ConectorBD('localhost', 'diego', '1234');
  $con->initConexion('eval_final');

  $id_usuario = '7';

  $tabla_eventos = 'evento';
  $data["Titulo"] = "'xxx'";
  $data["FechaInicio"] = "'2018-12-06'";
  $data["FechaFinalizacion"] =  "'2018-12-08'";
  $data["HoraInicio"] = "'09:00:00'";
  $data["HoraFinalizacion"] = "'16:00:00'";
  $data["DiaCompleto"] = "'false'";
  $data["ID_Usuario"] = "$id_usuario";

  if(  $con->initConexion('eval_final') == 'OK'){

    $con->insertData($tabla_eventos, $data);

  }


  $con->cerrarConexion();

 ?>
