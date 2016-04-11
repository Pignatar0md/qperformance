<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/qPerformance/config.php');
session_start();
if (!isset($_SESSION['Usuario'])) {
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>qPerformance</title>
    <!-- bootstrap 3.3.6 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/miCss.css" rel="stylesheet">
</head>
<body class="background">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <?php
    include (view . '/Close.php');
    ?>
    <nav class="navbar navbar-default" role="navigation">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <?php
                $pos = strpos($_SESSION['Permisos'], 'monitoreo');
                if ($pos === 0) {
                    $pos = 1;
                }
                if ($pos) {
                    echo "<li><a href='/freetech_ccenter/qPerformance/Vw/monitoring.php'>Monitoreo</a></li>";
                }
                $pos = strpos($_SESSION['Permisos'], 'grabaciones');
                if ($pos === 0) {
                    $pos = 1;
                }
                if ($pos) {
                    echo "<li><a href='/freetech_ccenter/qPerformance/Vw/recordings.php'>Grabaciones</a></li>";
                }
                $pos = strpos($_SESSION['Permisos'], 'reportes');
                if ($pos === 0) {
                    $pos = 1;
                }
                if ($pos) {
                    echo "<li><a href='/freetech_ccenter/qPerformance/Vw/reporting.php'>Reportes</a></li>";
                }
                $pos = strpos($_SESSION['Permisos'], 'configuracion');
                if ($pos === 0) {
                    $pos = 1;
                }
                if ($pos) {
                    echo "<li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Configuracion <b class='caret'></b></a>
                        <ul class='dropdown-menu'>
                            <li><a href='/freetech_ccenter/qPerformance/Vw/UsersLst.php'>Usuarios</a></li>
                            <li><a href='/freetech_ccenter/qPerformance/Vw/GroupsLst.php'>Grupos</a></li>
                            <!--<li><a href='/freetech_ccenter/qPerformance/Vw/AlarmsLst.php'>Alarmas</a></li>-->
                        </ul>
                    </li>";
                }
                ?>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="col-md-8 col-lg-offset-2">
            <div class="col-md-4 col-lg-offset-4">
                <?php
                $pos = strpos($_SESSION['Permisos'], 'monitoreo');
                if ($pos === 0) {
                    $pos = 1;
                }
                if ($pos) {
                    echo "<form method='post' action='monitoring.php'>"
                    . "<button class='btn btn-lg btn-warning btn-block'>Monitoreo</button>"
                    . "</form>&nbsp;";
                }
                $pos = strpos($_SESSION['Permisos'], 'grabaciones');
                if ($pos === 0) {
                    $pos = 1;
                }
                if ($pos) {
                    echo "<form method='post' action='recordings.php'>"
                    . "<button class='btn btn-lg btn-warning btn-block'>Grabaciones</button>"
                    . "</form>&nbsp;";
                }
                $pos = strpos($_SESSION['Permisos'], 'reportes');
                if ($pos === 0) {
                    $pos = 1;
                }
                if ($pos) {
                    echo "<form method='post' action='reporting.php'>"
                    . "<button class='btn btn-lg btn-warning btn-block'>Reportes</button>"
                    . "</form>&nbsp;";
                }
                $pos = strpos($_SESSION['Permisos'], 'configuracion');
                if ($pos === 0) {
                    $pos = 1;
                }
                if ($pos) {
                    echo "<form method='post' action='configuration.php'>"
                    . "<button class='btn btn-lg btn-warning btn-block'>Configuracion</button>"
                    . "</form>";
                }
                ?>
            </div>
        </div>
        <footer class="footer">
            <div class="ftstext">
                Qperformance is licenced under GPL by 
                <a href="http://www.freetechsolutions.com.ar"><b class="toPage">Freetech Solutions</b></a>
                . 2010 - 2016
            </div>
        </footer>
    </div>
</body>
</html>