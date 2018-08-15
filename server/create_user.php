<?php

  require('conector.php');

  $con = new ConectorBD('localhost', 'diego', '1234');
  $con->initConexion('eval_final');

  $tabla_usuarios = 'usuarios';

//////////////////////////////
  $data_usuarios['NombreUsuario'] = '"Marco"';
  $data_usuarios['Email'] = '"marco@nextu.com"';
  $contraseña = "holabola";
  $data_usuarios['Contrasena'] = "'".password_hash($contraseña, PASSWORD_DEFAULT)."'";
  $data_usuarios['FechaNacimiento'] = '"1994-03-05"';
  $con->insertData($tabla_usuarios,$data_usuarios);
/////////////////////////////
//////////////////////////////
  $data_usuarios['NombreUsuario'] = '"Jose Luis"';
  $data_usuarios['Email'] = '"joseluis@nextu.com"';
  $contraseña = "quehuboles";
  $data_usuarios['Contrasena'] = "'".password_hash($contraseña, PASSWORD_DEFAULT)."'";
  $data_usuarios['FechaNacimiento'] = '"1952-01-04"';

  $con->insertData($tabla_usuarios,$data_usuarios);
/////////////////////////////
//////////////////////////////
  $data_usuarios['NombreUsuario'] = '"Angela"';
  $data_usuarios['Email'] = '"angela@nextu.com"';
  $contraseña = "noposwow";
  $data_usuarios['Contrasena'] = "'".password_hash($contraseña, PASSWORD_DEFAULT)."'";
  $data_usuarios['FechaNacimiento'] = '"1961-12-02"';

  $con->insertData($tabla_usuarios,$data_usuarios);
/////////////////////////////
  $con->cerrarConexion();

 ?>
