<?php
$idu=$_POST["idu"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=$_POST["mail"];
$adresse=$_POST["adresse"];
$cp=$_POST["postale"];
$mdp=$_POST["mdp"];
$avatar=$_POST["avatar"];
$id = mysqli_connect("127.0.0.1","root","","musee"); 
    $req = "update user set 
    nom='$nom',
    prenom='$prenom',
    mail='$mail',
    adresse='$adresse'
    postal='$cp',
    mdp='$mdp',
    avatar='$avatar' 
    where idu = $idu";
    $resultat = mysqli_query($id, $req);

   // echo mysqli_error($id);
    header("location:expo.php");
?>