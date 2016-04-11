<form method='post'>
<div class="logout">
 <span>&nbsp;Bienvenido <?php $_SESSION['Usuario']  ?></span>
 <span> Su extension es: <?php $_SESSION['Extension'] ?> </span>&nbsp;
 <input class='btn btn-success' type='submit' value='Salir' name='btnCerrarSesion'>
 </div>
 <input type='hidden' name='<?php echo session_name(); ?>' value='<?php echo session_id; ?>'>
 </form>
<?php
if (isset($_POST["btnCerrarSesion"])) {
    if (!empty($_SESSION["Usuario"])) {
        unset($_SESSION["Usuario"]);
        unset($_SESSION["Extension"]);
        unset($_SESSION["Permisos"]);
        unset($_SESSION["Proto"]);
        unset($_SESSION["Codigo"]);
        session_destroy();
    }
    header('location: /freetech_ccenter/supervision/index.php');
}
?>