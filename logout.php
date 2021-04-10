<?php
    session_start();
    unset($_SESSION["ac_name"]);
    header("Location: SHOEshop.php");
?>
