<?php
//var_dump($_REQUEST);
//var_dump($_SERVER);
$INFO = $_SERVER;
/**Se quitan parámetros considerados innecesarios**/
unset($INFO['HTTP_ACCEPT']);
unset($INFO['HTTP_ACCEPT_LANGUAGE']);
unset($INFO['HTTP_ACCEPT_ENCODING']);
unset($INFO['CONTENT_TYPE']);
unset($INFO['CONTENT_LENGTH']);
unset($INFO['PATH']);
unset($INFO['LD_LIBRARY_PATH']);
unset($INFO['SERVER_SIGNATURE']);
unset($INFO['SERVER_SOFTWARE']);
unset($INFO['SERVER_NAME']);
unset($INFO['SERVER_ADDR']);
unset($INFO['SERVER_PORT']);
unset($INFO['DOCUMENT_ROOT']);
unset($INFO['REQUEST_SCHEME']);
unset($INFO['CONTEXT_PREFIX']);
unset($INFO['CONTEXT_DOCUMENT_ROOT']);
unset($INFO['SERVER_ADMIN']);
unset($INFO['SCRIPT_NAME']);
unset($INFO['PHP_SELF']);
unset($INFO['REQUEST_TIME_FLOAT']);
unset($INFO['REQUEST_TIME']);

$DATA['REQUEST']=$_REQUEST;
$DATA['SERVER']=$INFO;

var_dump($DATA);

$tipo = 'INGRESO';
$usuario = '20091005082';
$ip = '';
$fecha = '';

$cadenaSQL="
INSERT INTO `pruebas`.`log_acceso`
(`tipo`,
`usuario`,
`host`,
`tiempo`,
`peticion`)
VALUES
('".$tipo."',
'".$usuario."',
'".$ip."',
'".$fecha."',
'".json_encode($DATA)."');
";
echo $cadenaSQL;
