<?php

    //Include the connexion file
    include_once("../config/connexion.php");

    //Create the connexion
    $connect = new mysqli(HOST, USER, PASS, "bd_gestpers");

    $vide = false;

    if(empty($_POST['nom'])) {
        $vide = true;
    }

    if(empty($_POST['prenom'])) {
        $vide = true;
    }

    if(empty($_POST['datenaiss'])) {
        $vide = true;
    }

    if(empty($_POST['lieunaiss'])) {
        $vide = true;
    }

    if(empty($_POST['contacts'])) {
        $vide = true;
    }

    if(empty($_POST['email'])) {
        $vide = true;
    }

    if(empty($_POST['direction'])) {
        $vide = true;
    }

    if(empty($_POST['departement'])) {
        $vide = true;
    }

    if(empty($_POST['service'])) {
        $vide = true;
    }

    if(empty($_POST['emploi'])) {
        $vide = true;
    }

    if(empty($_POST['fonction'])) {
        $vide = true;
    }

    if(empty($_POST['grade'])) {
        $vide = true;
    }

    if(empty($_POST['dateembauche'])) {
        $vide = true;
    }

    if(empty($_POST['login'])) {
        $vide = true;
    }

    if(empty($_POST['motdepasse'])) {
        $vide = true;
    }

    if(empty($_POST['matricule'])) {
        $vide = true;
    }
?>

<!DOCTYPE html>
    <head>
        <title>
            Enregistrement
        </title>
    </head>
    <body>
        <?php
            if ($vide) {
                echo 
                    '   <p align="center"> <img src="../images/warn.png" alt="Warning! No value" width="50" height="50"></p>
                        <p align="center"> Veuillez vérifier que tous les champs ne sont pas vides </p>
                    ';
            } else {
                    // Creation de l'entite employé avec les donnees du formulaire
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $datenaiss = $_POST['datenaiss'];
                    $lieunaiss = $_POST['lieunaiss'];
                    $contacts = $_POST['contacts'];
                    $email = $_POST['email'];
                    $direction = $_POST['direction'];
                    $departement = $_POST['departement'];
                    $service = $_POST['service'];
                    $emploi = $_POST['emploi'];
                    $fonction = $_POST['fonction'];
                    $grade = $_POST['grade'];
                    $dateembauche = $_POST['dateembauche'];
                    $login = $_POST['login'];
                    $motdepasse = $_POST['motdepasse'];
                    $matricule = $_POST['matricule'];

                    // Creation de ma requete SQL d'insertion des donnees en suivant l'ordre des champs dans la table employe
                    $sql = "INSERT INTO employes VALUES('" . $matricule . "', '" . $nom . "', '" . $prenom . "', '" . $datenaiss . "', '" . $contacts . "', '" . $email . "', '" . $grade . "', '" . $emploi . "', '" . $fonction . "', '" . $direction . "', '" . $departement . "', '" . $service . "', '" . $dateembauche . "', '" . $login . "', '" . $motdepasse . "', '" . $lieunaiss . "')";
                    
                    //test Affichage script
                    // echo '<p> REQUETE: ' . $sql . '</p>';

                    //Execute the query and return TRUE (if executed) or FALSE (if error)
                    $result = $connect->query($sql);
                    
                    if ($result)
                    {
                        echo '<SCRIPT> alert("Employé enregistré avec succès ! ");
                              alert("'. $last_id.'");</SCRIPT>';
                    } else {

                        echo '<SCRIPT> alert("Employé non enregistré! Erreur: '. $connect->error .' ");</SCRIPT>';
                        
                    }
            }
        ?>
    </body>
</html>