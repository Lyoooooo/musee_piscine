<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssMusee.css">
    <title>Document</title>
</head>
<body>
    <h1>Détail du Compte</h1>

    <table>
        <tr>
            <th>Numéro</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Niveau</th>
            <th>Avatar</th>
            <th>Accepter</th>
            <th>Refuser</th>
        </tr>
    <?php
    // connexion au serveur mysql ou mariaDB
    $id = mysqli_connect("127.0.0.1:3307","root","","musee");
    // execution d'une requete stockage du resultat dans $resultat
    $idu = $_GET["idu"];
    $req = "select * from user where idu=$idu";
    $resultat = mysqli_query($id, $req);
    // Récupération
    while($ligne = mysqli_fetch_assoc($resultat)){
    echo "<tr>
               <td>".$ligne["idu"]."</td>
               <td>".$ligne["nom"]."</td>
               <td>".$ligne["prenom"]."</td>
               <td>".$ligne["mail"]."</td>
               <td>".$ligne["adresse"]."</td>
               <td>".$ligne["postal"]."</td>
               <td>".$ligne["niv"]."</td>
               <td>".$ligne["avatar"]."</td>
               <td><a href='ok.php?idu=".$ligne["idu"]."'><img src='images/ok.png' width='30'></a></td>
               <td><a href='sup.php?idu=".$ligne["idu"]."'><img src='images/sup.png' width='30'></a></td>
             </tr>";
    }
    ?>
    <br><br>

    
    <?php
    // // connexion au serveur mysql ou mariaDB
    // $id = mysqli_connect("127.0.0.1:3307","root","","musee");
    // // execution d'une requete stockage du resultat dans $resultat
    // $idu = $_GET["idu"];
    // $req = "select * from user where idu=$idu";
    // $resultat = mysqli_query($id, $req);
    // // Récupération
    // while($ligne = mysqli_fetch_assoc($resultat)){
    // echo "<table><tr>
    //     <th>Numéro</th> &nbsp <td>".$ligne["idu"]."</td><br>
    //     <th>Nom</th> &nbsp <td>".$ligne["nom"]."</td><br>
    //     <th>Prénom</th> &nbsp <td>".$ligne["prenom"]."</td><br>
    //     <th>Mail</th> &nbsp <td>".$ligne["mail"]."</td><br>
    //     <th>Adresse</th> &nbsp <td>".$ligne["adresse"]."</td><br>
    //     <th>Code Postal</th> &nbsp <td>".$ligne["postal"]."</td><br>
    //     <th>Niveau</th> &nbsp <td>".$ligne["niv"]."</td><br>
    //     <th>Avatar</th> &nbsp <td>".$ligne["avatar"]."</td><br>
    //     <th>Accepter</th> &nbsp <td><a href='ok.php?idu=".$ligne["idu"]."'><img src='images/ok.png' width='30'></a></td><br>
    //     <th>Refuser</th> &nbsp <td><a href='sup.php?idu=".$ligne["idu"]."'><img src='images/sup.png' width='30'></a></td><br>
    //         </tr>
    //     </table>";
    // }
    ?>

</body>
</html>