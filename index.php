<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
    <title>GESPERS - Gestion du personnel </title>
</head>
<body>
   <table width=100% height=100% border="0">
		<tr height=15% bgcolor="grey">
			<th colspan="4" height="100"><h1>Bienvenue sur le portail de Gestion du Personnel</h1>
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
                    <form action="Verification.php" method="POST">
                        <fieldset >
                            <legend>AUTHENTIFICATION</legend>
                            Login :<br><input id="login" type="text" name="login" /><br><br>
                            Mot de passe: <br><input type="password" id="pass" name="pass"><br><br>
                            <button id="annuler" name="annuler" type="reset">Annuler</button>
                            <button id="valider" name="valider" type="submit">Valider</button>
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
</body>
<html>
<?php 
    $login = 'Utilisateur: ' . $_POST['login'];
    echo '<SCRIPT>document.getElementById(uCon).hidden = false;</SCRIPT>';
?>