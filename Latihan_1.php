<?php
session_start();
$angka=1;
@$_SESSION["angka"]+=$angka;
echo("Click <strong> <a href =\"angka.php\">refresh</strong></a>untuk melakukan penambahan bilangan!<br>");
echo("Sekarang bilangan ke <b>".$_SESSION["angka"]."</b>");
?>