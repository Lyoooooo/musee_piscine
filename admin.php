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
    <h1>Demande de comptes</h1><br>


    <table>
        <tr>
            <th>Numéro du compte</th>
            <th>Voir le profil en détail</th>
        </tr>



        <?php

        // connexion au serveur mariaDB
        $id = mysqli_connect("127.0.0.1", "root", "", "musee");
        // execution d'une requete stockage du resultat dans $resultat
        $req = "select * from user";
        $resultat = mysqli_query($id, $req);
        // Récupération
        while ($ligne = mysqli_fetch_assoc($resultat)) {
            echo "<tr>
            <td>" . $ligne["idu"] . "</td>
            <td><a href='detail_compte.php?idu=" . $ligne["idu"] . "'><img src='images/voir.jpg' width='30'></a></td>
        </tr>";
        }
        echo "</table> Il y a " . mysqli_num_rows($resultat) . " demande(s).";
        ?>

</body>

</html>