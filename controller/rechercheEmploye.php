<?php

    //Include the connexion file
    include_once("../config/connexion.php");

    //Create the connexion
    $connect = new mysqli(HOST, USER, PASS, "bd_gestpers");

    $vide = false;

    if(empty($_POST['matricule'])) {
        $vide = true;
    }
?>
<!DOCTYPE html>
<html>
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
                    // Recuperation du matricule
                    $matricule = $_POST['matricule'];

                    // Creation de la requete SQL de recherche dans la table employe
                    $sql = "SELECT * FROM employes WHERE matricule = '" . $matricule . "'";

                    //Execute the query and return TRUE (if executed) or FALSE (if error)
                    $result = $connect->query($sql);
                    
                    if ($result)
                    {
                        // Return the number of Employe who match for the matricule entered
                        //If the number is greater than 0, at least one employe has been found
                        $rowNumber = mysqli_num_rows($result);
                        if ($rowNumber <= 0) {
                            echo '<p> Aucun employé trouvé pour ce matricule : ' . $matricule . '</p>';
                        } else {
                            $row = $result->fetch_assoc();
                            echo '<h2>'. $rowNumber . ' résultat(s) trouvé(s) </h2>';
                            echo '
                                <p> MATRICULE: ' .$row["matricule"]. '</p>' .
                                '<p> NOM: ' .$row["nom"]. '</p>' .
                                '<p> PRENOM: ' .$row["prenom"]. '</p>' .
                                '<p> DATE NAISS: ' .$row["datenaiss"]. '</p>' .
                                '<p> LIEU NAISS: ' .$row["lieunaiss"]. '</p>' .
                                '<p> DIRECTION: ' .$row["direction"]. '</p>' .
                                '<p> DEPARTEMENT: ' .$row["departement"]. '</p>' .
                                '<p> SERVICE: ' .$row["service"]. '</p>' .
                                '<p> GRADE: ' .$row["grade"]. '</p>' .
                                '<p> EMPLOI: ' .$row["emploi"]. '</p>' .
                                '<p> FONCTION: ' .$row["fonction"]. '</p>' .
                                '<p> DATE EMBAUCHE: ' .$row["dateembauche"]. '</p>' .
                                '<p> CONTACTS: ' .$row["contacts"]. '</p>' .
                                '<p> EMAIL: ' .$row["email"]. '</p>' . '';
                        }

                    } else {

                        echo '<SCRIPT> alert("Erreur: '. $connect->error .' ");</SCRIPT>';
                        echo '<p align="center"> <img src="../images/warn.png" alt="Warning! No value" width="50" height="50"></p>';
                        
                    }
            }
            $connect->close();
        ?>
    </body>
</html>