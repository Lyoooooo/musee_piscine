<?php
$idu = $_GET["idu"];
$id = mysqli_connect("127.0.0.1:3307","root","","musee");
$req = "select user where idu=$idu"; //mettre l'idu a 4 pour client exemple
$resultat = mysqli_query($id, $req);
echo "<h3>Le compte N° $idu a été validé...</h3>",
header("refresh:3;url=admin.php");
?>