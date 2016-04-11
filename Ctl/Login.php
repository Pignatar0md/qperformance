<?php

include '../config.php';
include_once model . '/mdlUser.php';
include_once entities . '/Usuario.php';
//----------------------EventListeners
if (isset($_POST['login'])) {
    $user = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $pass = isset($_POST['clave']) ? $_POST['clave'] : '';
    $ext = isset($_POST['extension']) ? $_POST['extension'] : '';
    $proto = isset($_POST['proto']) ? $_POST['proto'] : '';
    if ($user && $pass) {
        Login($user, $pass, $ext, $proto);
    }
}

//----------------------Login Process
function Login($u, $p, $e, $p) {
    $m_user = new mdlUser('qperformance');
    $arrcred[0] = $u;
    $arrcred[1] = $p;
    $result = $m_user->auth($arrcred);
    $pass = $typeUser = $camp = $agts = '';
    $result = mysql_fetch_array($result, MYSQL_ASSOC);
    if ($result) {
        session_start();
        $_SESSION["Permisos"] = $result['permisos'];
        $_SESSION['agentes'] = $result['agentes'];
        $_SESSION["Usuario"] = $result['usuario'];
        $_SESSION['campanas'] = $result['campanas'];
        $_SESSION["Extension"] = $e;
        $_SESSION["Proto"] = $p;
        if ($pass == 'clave') {
            header("location: ../Vw/panel.php");
        }
    } else {
        header("location: ../index.php?auth=false");
    }
}
