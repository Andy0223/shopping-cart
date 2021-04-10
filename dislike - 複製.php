<?php
    session_start();
    if(!isset($_SESSION["ac_name"])){
        header("Location: login.php");
    }
    $it_name=$_GET["it_name"];
    unset($_SESSION["$it_name"]);
    header("Location: SHOEshop.php");
?>