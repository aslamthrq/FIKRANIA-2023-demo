<?php

$base_url = "http://" . $_SERVER['SERVER_NAME'] . "/fikrania-baru";
$p = "";


if (!empty($_GET["p"])) {
    $p = $_GET["p"];
}

if ($p== "akun") {
    include "Akun/index.php";
}
else if($p=="dashboard") {
    header("location: $base_url/dashboard/index.php");
}else {
    include "index.php";
}
?>