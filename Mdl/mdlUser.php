<?php

include 'Connection.php';

class mdlUser {

    private $argPdo;

    function __construct($db) {
        $this->argPdo = 'mysql:host=' . DBHOST . ';dbname=' . $db . ';charset=utf8';
    }
    public function auth($arr) {
        $arrAuth = array();
        $a = $arr[1];
        $b = $arr[0];
        $sql = "SELECT u.id,u.nombre as usuario,AES_DECRYPT(clave,'$a') as clave,tu.permisos as permisos,campanas,agentes
            FROM Usuarios u JOIN tiposUsuarios tu ON tu.id = u.cod_tipo_usuario 
            AND u.nombre = '$b'";
        try {
            $cnn = new Connection("qperformance");
            $cnn->Connect();
            $lnk = $cnn->GetLink();
            $result = mysql_query($sql, $lnk);
            $cnn->Connect_close($lnk);
        } catch (Exception $e) {
            $result = $e->getMessage();
        }
        return $result;
    }

}
