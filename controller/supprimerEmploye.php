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
            Suppression
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
                    $sql = "DELETE FROM employes WHERE matricule = '" . $matricule . "'";

                    //Execute the query and return TRUE (if executed) or FALSE (if error)
                    $result = $connect->query($sql);
                    
                    if ($result)
                    {
                        // Return the number of Employe who match for the matricule entered
                        //If the number is greater than 0, at least one employe has been found
                        // It's possible to use $result->num_rows instead of mysqli_num_rows($result) to get the number of rows
                        
                        $rowNumber = $connect->affected_rows;
                        if ($rowNumber < 0) {
                            echo '<h2> Aucun résultat(s) trouvé(s) </h2>';
                            echo '<p> Aucun employé trouvé pour ce matricule : ' . $matricule . '</p>';
                        } else {
                            
                            echo '<h2>'. $rowNumber . ' résultat(s) supprimé(s) </h2>';
                            
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