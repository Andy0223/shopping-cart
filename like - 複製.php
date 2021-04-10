<?php
    session_start();
    if(!isset($_SESSION["ac_name"])){
        header("Location: login.php");
    }
    $it_name=$_GET["it_name"];
    $_SESSION["$it_name"] = $it_name;
//    $_SESSION["it_name"]=true;
    header("Location: SHOEshop.php");
?>