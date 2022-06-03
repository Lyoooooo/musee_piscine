<?php
// if(isset($like)){
//     $idp=$_GET["idp"];
//     $id = mysqli_connect("127.0.0.1:3307","root","","musee");
//     $requete = "add 1 from produit where idp=$idp";
//     $requete = "INSERT INTO produit (idp, nom, description, prix, degre, likes) VALUES (null, '$nom', '$desc', '$prix', '$deg', '1')";
//     $resultat = mysqli_query($id, $requete);
//     header("refresh:0;url=detail_produit.php");
// }

// $id = mysqli_connect("127.0.0.1","root","","musee");
$id = mysqli_connect("127.0.0.1:3307","root","","musee");
//$idp=$_GET["idp"];
$idp=$ligne["idp"];
$req = "select * from produit where idp= '$idp'";
$res = mysqli_query($id, $req); 
$ligne = mysqli_fetch_assoc($res);
$nom = $ligne["nom"];
$desc = $ligne["description"];
$deg = $ligne["degre"];
$prix = $ligne["prix"];
$req = "select * from produit where idp= '$idp'";
$likes=$ligne["likes"];
//$requete = "INSERT INTO produit ('idp', 'nom', 'description', 'prix', 'degre', 'likes') VALUES ('$idp', '$nom', '$desc', '$prix', '$deg', '1')";
$requete = "INSERT INTO produit ('idp', 'nom', 'description', 'prix', 'degre', 'likes') VALUES (null, '$nom', '$desc', '$prix', '$deg', $likes)";
$resultat = mysqli_query($id, $requete);
header("refresh:20;url=detail_produit.php");

?>