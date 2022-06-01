<?php
$idu = $_GET["idu"];
$id = mysqli_connect("127.0.0.1:3307","root","","musee");
$req = "delete from user where idu=$idu";
$resultat = mysqli_query($id, $req);
echo "<h3>Le compte N° $idu a été supprimé de la base de données...</h3>",
header("refresh:3;url=admin.php");
?>