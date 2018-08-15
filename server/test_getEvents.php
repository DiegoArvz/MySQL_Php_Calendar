<?php

require('conector.php');



  $con = new ConectorBD('localhost', 'diego', '1234');
  $con->initConexion('eval_final');
  $response["conexion"] = $con->getConexion();

  if(  $con->initConexion('eval_final') == 'OK'){

    $id_usuario = '7';
    $response['msg'] = 'OK';

    $evento_consulta = $con->consultar(['evento'], ['Titulo','ID','ID_Usuario','HoraInicio','HoraFinalizacion',
    'FechaInicio','FechaFinalizacion','DiaCompleto'],
    "WHERE ID_Usuario='$id_usuario';");

    if($evento_consulta->num_rows != 0){
      $fila = $evento_consulta->fetch_assoc();
      $i=0;
      while(  $fila = $evento_consulta->fetch_assoc()){
        echo $fila['Titulo'];
        echo  $fila['ID'];
          echo  $fila['ID_Usuario'];
          echo  $fila['HoraInicio'];
          echo  $fila['HoraFinalizacion'];
          echo  $fila['FechaInicio'];
          echo  $fila['FechaFinalizacion'];
          echo  $fila['DiaCompleto'];

        $i++;
      }
      $response['msg'] == 'OK';

    }else{
      $response['msg'] == 'Incorrecto';
    }

  }



  echo json_encode( $response['eventos']);

 ?>
