<?php
    session_start();
    require('conector.php');

    if(isset($_SESSION['username'])){

      $con = new ConectorBD('localhost', 'diego', '1234');
      $con->initConexion('eval_final');
      $response["conexion"] = $con->getConexion();

      if(  $con->initConexion('eval_final') == 'OK'){

        $id_usuario = $_SESSION['id_usuario'];
        $response['msg'] = 'OK';

        $evento_consulta = $con->consultar(['evento'], ['Titulo','ID','ID_Usuario','HoraInicio','HoraFinalizacion',
        'FechaInicio','FechaFinalizacion','DiaCompleto'],
        "WHERE ID_Usuario='$id_usuario';");

        if($evento_consulta->num_rows != 0){
        //  $fila = $evento_consulta->fetch_assoc();
        /*
        AL PARECER FETCH ASSOC TIENE UN COUNTER INTERNO. LA PRIMERA VEZ QUE ES LLAMADO
        TE REGRESA EL PRIMER ELEMENTO. DESPUES CUANDO LO VUELVES A LLAMAR
        TE REGRESA EL SIGUIENTE. HASTA QUE SE QUEDA VACÍO, POR ESO EN EL WHILE
        */
          $i=0;
          while(  $fila = $evento_consulta->fetch_assoc()){
            $evento['id'] = $fila['ID'];
            $evento['title'] = $fila['Titulo'];

            if($fila['DiaCompleto'] == 'true'){
              $evento['start'] = $fila['FechaInicio'];
					    $evento['allDay'] = true;
            }
            else{
              $evento['start'] = $fila['FechaInicio'].'T'.$fila['HoraInicio'];
					    $evento['end'] = $fila['FechaFinalizacion'].'T'.$fila['HoraFinalizacion'];
					    $evento['allDay'] = false;
            }
            $evento['color'] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            $response['eventos'][$i] = $evento;

            $i++;
          }
          $response['msg'] == 'OK';

        }else{
          $response['msg'] == 'Incorrecto';
        }

      }

    }

      echo json_encode($response);
      $con->cerrarConexion();

 ?>
