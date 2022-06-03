<?php
$idu = $_GET["idu"];
$id = mysqli_connect("127.0.0.1","root","","musee");
$req = mysqli_query($id, "update user set valide=1 where idu=$idu");
echo "<h3>Le compte N° $idu a été validé...</h3>",
header("refresh:3;url=admin.php");
?>