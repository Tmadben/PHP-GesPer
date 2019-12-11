<?php

    //Include the connexion file
    include_once("config/connexion.php");

    //Create the connexion
    $connect = new mysqli(HOST, USER, PASS, "bd_gestpers");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
    <title>GESPERS - Gestion du personnel </title>
</head>
<body>
   
<?php
    $vide = false;

    if(empty($_POST['login'])) {
        $vide = true;
    }

    if(empty($_POST['pass'])) {
        $vide = true;
    }

    if ($vide) {
        echo 
            '   <p align="center"> <img src="../images/warn.png" alt="Warning! No value" width="50" height="50"></p>
                <p align="center"> Veuillez vérifier que tous les champs ne sont pas vides </p>
            ';
    } else {
            // Creation de l'entite employé avec les donnees du formulaire
            $login = $_POST['login'];
            $pass = $_POST['pass'];

            // Creation de la requete SQL de recherche dans la table employe
            $sql = "SELECT * FROM employes WHERE login = '" . $login . "' AND motdepasse = '" . $pass . "'";

            //Execute the query and return TRUE (if executed) or FALSE (if error)
            $result = $connect->query($sql);
            
            if ($result)
            {
                // Return the number of Employe who match for the matricule entered
                //If the number is greater than 0, at least one employe has been found
                // It's possible to use $result->num_rows instead of mysqli_num_rows($result) to get the number of rows
                
                $rowNumber = mysqli_num_rows($result);
                if ($rowNumber == 0) {
                    echo '<p> login et/ou mot de passe érronée ! </p>';
                    $afficheLogin = "";
                } else {
                    $message = "";
                    $row = $result->fetch_assoc();
                    $nom = 'Nom: ' . $row["nom"];
                    $prenom = 'Prenom: ' . $row["prenom"];
                    $afficheLogin = 'Utilisateur : ' . $login; 
?>
<table width=100% height=100% border="0">
		<tr height=15% bgcolor="grey">
            <th colspan="4" height="100">
                <h1>Bienvenue sur le portail de Gestion du Personnel</h1>
                <p align="right" id="uCon" >
                    <?php echo $nom;?><br> 
                    <?php echo $prenom;?><br>
                    <?php echo $afficheLogin;?><br>
                </p>
            </th>
		</tr>
		
		<tr bgcolor="#00FF00" height="35" align="justify">
			<td>Accueil</td>
			<td><a href="#">Présentation</a></td>
			<td><a href="#">Services</a></td>
			<td><a href="#">Contact</a></td>
        </tr>
        <tr height=100% >
			<td width="280">
                    <form action="controller/rechercheEmploye.php" method="POST">
                        <fieldset >
                            <legend>RECHERCHE EMPLOYE</legend>
                             Matricule : <input id="matricule" type="text" name="matricule" /><br><br>
                            <button id="valider" name="valider" type="submit">Rechercher</button>
                        </fieldset>
                    </form>
                    
                    <form action="controller/supprimerEmploye.php" method="POST">
                        <fieldset >
                            <legend>SUPPRIMER EMPLOYE</legend>
                             Matricule : <input id="matricule" type="text" name="matricule" /><br><br>
                            <button id="valider" name="valider" type="submit">Supprimer</button>
                        </fieldset>
                    </form>
			</td>
            <td colspan="3" rowspan="2" height=500px>
                <h2> Que fait nôtre application?</h2>
                 <p>
                 Pour ce cours nous allons proceder au developpement 
                    d'une application de gestion du personnel.
                    Notre application doit contenir les éléments suivants:
                    - le portail
                    - la gestion de l'authentification
                    - le Menu personnalisé de chaque utilisateur
                    - les Fonctionalités
                    - les états
                    - les Statistiques
                    - les fiches  
                 </p>               
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr  height="100" bgcolor="grey">
			<td colspan="4">
				<footer>
				<p align="center"> 
					copyright (c) 2019 - tous droit reservé.
					<br />WebMasters: <br> 
                    - Mamadou Ben TRAORE
                    - Paul DJE LOUKOU
                    - DANHO Marcel
                    - DJEHIDJE GNININ EMILE 
				</p>
				</footer>
			</td>
		</tr>
   </table>
<?php

                }
            
            }
    }

?>
        
</body>
</html>