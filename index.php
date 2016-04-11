<?php
session_start();
if (isset($_SESSION["Usuario"])) {
    header('Location: Vw/panel.php');
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>qPerformance</title>
        <!-- bootstrap 3.3.6 -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/miCss.css" rel="stylesheet">
    </head>
    <body>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <div class="container-fluid wrapper">
            <header>
                <div class="row">
                    <div class="col-xs-5 col-xs-offset-5">
                        <img src="img/lg2.png" class="img-responsive logoIndex" alt="Imagen responsive">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-md-offset-4">
                        <h3 class="form-signin-heading welcome">Bienvenidos</h3>
                    </div>
                </div>
            </header>
            <form class="form-signin" action="Ctl/Login.php" method="post" role="form">
                <div class="row form-group">
                    <div class="col-xs-3 col-xs-offset-4">
                        <input type="text" name="usuario" for="user" class="form-control" placeholder="Usuario" required autofocus>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xs-3 col-xs-offset-4">
                        <input type="password" name="clave" class="form-control" placeholder="Clave" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-1 col-md-offset-4">
                        <select name="proto" class="form-control">
                            <option>Tipo</option>
                            <option>SIP</option>
                            <option>IAX2</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="extension" class="form-control" id='selectExtension'>
                            <option>Extension</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xs-3 col-xs-offset-4">
                        <button class="btn btn-lg btn-success btn-block" value="login" id="login" name="login" type="submit">Ingresar</button>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xs-4 col-xs-offset-4">
                        <?php
                        $auth = isset($_GET['auth']) ? $_GET['auth'] : null;
                        if ($auth != null) {
                            echo "<label id='authError' class='authError'>Usuario o contraseña incorrecta.</label>";
                        }
                        ?>
                    </div>
                </div>
            </form>
            <footer class="footer">
                <div class="ftstext">
                    Qperformance is licenced under GPL by 
                    <a href="http://www.freetechsolutions.com.ar"><b class="toPage">Freetech Solutions</b></a>
                    . 2010 - 2016
                </div>
            </footer>
        </div>
        <script src="js/jsLogin.js"></script>
        <!-- bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
