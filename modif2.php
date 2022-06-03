<?php
session_start();
$idu = $_SESSION["idu"];
?>


<?php
 $nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$cp = $_POST["postal"];
$mdp = $_POST["mdp"];
$avatar = $_POST["avatar"];

$id = mysqli_connect("127.0.0.1","root","","musee"); 
    $req = "UPDATE `user` SET `nom` = '$nom', `prenom` = '$prenom', `adresse` = '$adresse', `postal` = '$cp', `mdp` = '$mdp' WHERE `user`.`idu` = $idu"; 
    $resultat = mysqli_query($id, $req);

   //echo mysqli_error($resultat);
    header("location:expo.php");
?>

