<?php
require('conector.php');

$con = new ConectorBD('localhost', 'diego', '1234');
$con->initConexion('eval_final');

$tabla_evento = 'evento';

//////////////////////////////

/*USUARIO marco@nextu.com*/

$data_evento['Titulo'] = "'Día de fiesta'";
$data_evento['FechaInicio'] = "'2018-12-05'";
$data_evento['FechaFinalizacion'] = "'2018-12-06'";
$data_evento['HoraInicio'] = "'9:00'";
$data_evento['HoraFinalizacion'] = "'22:00'";
$data_evento['DiaCompleto'] = "0";
$data_evento['ID_Usuario'] = "'7'";/*CAMBIAR SEGUN EL ID DEL USUARIO EN LA TABLA USUARIO*/
$con->insertData($tabla_evento,$data_evento);

$data_evento['Titulo'] = "'Despedida'";
$data_evento['FechaInicio'] = "'2018-12-01'";
$data_evento['FechaFinalizacion'] = "'2018-12-02'";
$data_evento['HoraInicio'] = "'6:00'";
$data_evento['HoraFinalizacion'] = "'14:00'";
$data_evento['DiaCompleto'] = 1;
$data_evento['ID_Usuario'] = "'7'";/*CAMBIAR SEGUN EL ID DEL USUARIO EN LA TABLA USUARIO*/
$con->insertData($tabla_evento,$data_evento);

$data_evento['Titulo'] = "'Vuelo a Francia'";
$data_evento['FechaInicio'] = "'2018-12-22'";
$data_evento['FechaFinalizacion'] = "'2018-12-24'";
$data_evento['HoraInicio'] = "'10:00'";
$data_evento['HoraFinalizacion'] = "'17:00'";
$data_evento['DiaCompleto'] = "0";
$data_evento['ID_Usuario'] = "'7'";/*CAMBIAR SEGUN EL ID DEL USUARIO EN LA TABLA USUARIO*/
$con->insertData($tabla_evento,$data_evento);

////////////////////////////////

//////////////////////////////

/*USUARIO joseluis@nextu.com*/

$data_evento['Titulo'] = "'Especial de Comida'";
$data_evento['FechaInicio'] = "'2018-12-01'";
$data_evento['FechaFinalizacion'] = "'2018-12-02'";
$data_evento['HoraInicio'] = "'13:00'";
$data_evento['HoraFinalizacion'] = "'18:00'";
$data_evento['DiaCompleto'] = "0";
$data_evento['ID_Usuario'] = "'8'";/*CAMBIAR SEGUN EL ID DEL USUARIO EN LA TABLA USUARIO*/
$con->insertData($tabla_evento,$data_evento);

$data_evento['Titulo'] = "'Cumpleaños chido'";
$data_evento['FechaInicio'] = "'2018-12-08'";
$data_evento['FechaFinalizacion'] = "'2018-12-08'";
$data_evento['HoraInicio'] = "'14:00'";
$data_evento['HoraFinalizacion'] = "'20:00'";
$data_evento['DiaCompleto'] = 0;
$data_evento['ID_Usuario'] = "'8'";/*CAMBIAR SEGUN EL ID DEL USUARIO EN LA TABLA USUARIO*/
$con->insertData($tabla_evento,$data_evento);

$data_evento['Titulo'] = "'Carne Asada'";
$data_evento['FechaInicio'] = "'2018-12-15'";
$data_evento['FechaFinalizacion'] = "'2018-12-15'";
$data_evento['HoraInicio'] = "'10:00'";
$data_evento['HoraFinalizacion'] = "'17:00'";
$data_evento['DiaCompleto'] = "0";
$data_evento['ID_Usuario'] = "'8'";/*CAMBIAR SEGUN EL ID DEL USUARIO EN LA TABLA USUARIO*/
$con->insertData($tabla_evento,$data_evento);

////////////////////////////////

//////////////////////////////

/*USUARIO angela@nextu.com*/

$data_evento['Titulo'] = "'Fumigación'";
$data_evento['FechaInicio'] = "'2018-12-09'";
$data_evento['FechaFinalizacion'] = "'2018-12-09'";
$data_evento['HoraInicio'] = "'13:00'";
$data_evento['HoraFinalizacion'] = "'15:00'";
$data_evento['DiaCompleto'] = "0";
$data_evento['ID_Usuario'] = "'9'";/*CAMBIAR SEGUN EL ID DEL USUARIO EN LA TABLA USUARIO*/
$con->insertData($tabla_evento,$data_evento);

$data_evento['Titulo'] = "'Podada'";
$data_evento['FechaInicio'] = "'2018-12-20'";
$data_evento['FechaFinalizacion'] = "'2018-12-20'";
$data_evento['HoraInicio'] = "'10:00'";
$data_evento['HoraFinalizacion'] = "'12:00'";
$data_evento['DiaCompleto'] = 0;
$data_evento['ID_Usuario'] = "'9'";/*CAMBIAR SEGUN EL ID DEL USUARIO EN LA TABLA USUARIO*/
$con->insertData($tabla_evento,$data_evento);

$data_evento['Titulo'] = "'Convivio Familiar'";
$data_evento['FechaInicio'] = "'2018-12-25'";
$data_evento['FechaFinalizacion'] = "'2018-12-25'";
$data_evento['HoraInicio'] = "'15:00'";
$data_evento['HoraFinalizacion'] = "'22:00'";
$data_evento['DiaCompleto'] = "1";
$data_evento['ID_Usuario'] = "'9'";/*CAMBIAR SEGUN EL ID DEL USUARIO EN LA TABLA USUARIO*/
$con->insertData($tabla_evento,$data_evento);

////////////////////////////////

$con->cerrarConexion();

 ?>
