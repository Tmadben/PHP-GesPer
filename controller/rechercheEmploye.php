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
                        // It's possible to use $result->num_rows instead of mysqli_num_rows($result) to get the number of rows
                        
                        $rowNumber = mysqli_num_rows($result);
                        if ($rowNumber = 0) {
                            echo '<h2>'. $rowNumber . ' résultat(s) trouvé(s) </h2>';
                            echo '<p> Aucun employé trouvé pour ce matricule : ' . $matricule . '</p>';
                        } else {
                            $row = $result->fetch_assoc();
                            //Il est aussi possible d'utiliser ce code pour affecter $ligne = $result ->fetch_object();
                            //Ainis que ceci pour afficher echo $ligne->matricule;

                            //echo '<h2>'. $rowNumber . ' résultat(s) trouvé(s) </h2>';
                            echo '
                                <form action="../controller/modifierEmploye.php" method="post">
                                                <table border="1" align="center">        
                                                        <tr>
                                                            <th>Informations Personnelles</th>
                                                            <th>Informations Administratives</th>
                                                        </tr>
                                                        <tr align="center">
                                                            <td align="center">
                                                                <table>
                                                                    <tr>
                                                                        <td align="left">
                                                                            Nom : <br><br>
                                                                            Prénom(s) : <br><br>
                                                                            Contacts : <br><br>
                                                                            email : <br><br>
                                                                            Lieu de naissance : <br><br>
                                                                            Date de naissance :
                                                                        </td>
                                                                        <td align="right">
                                                                            <input type="text" id="nom" name="nom" value="'. $row["nom"] .'"><br><br>
                                                                            <input type="text" id="prenom" name="prenom" value="' . $row["prenom"]. '"><br><br>
                                                                            <input type="text" id="contacts" name="contacts" value="' . $row["contacts"] .'"><br><br>
                                                                            <input type="text" id="email" name="email" value="' . $row["email"] . '"><br><br>
                                                                            <input type="text" id="lieunaiss" name="lieunaiss" value="' . $row["lieunaiss"] . '"><br><br>
                                                                            <input type="date" id="datenaiss" name="datenaiss" date_format="0000-00-00" placeholder="YYYY-MM-DD" value="' . $row["datenaiss"] . '">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td align= "center">
                                                                <table>
                                                                    <tr>
                                                                        <td align="left">
                                                                            Matricule : <br><br>
                                                                            Direction : <br><br>
                                                                            Département : <br><br>
                                                                            Service : <br><br>
                                                                            Emploi : <br><br>
                                                                            Fonction : <br><br>
                                                                            Grade : <br><br>
                                                                            Date de prise de service :
                                                                        </td>
                                                                        <td align="right">
                                                                            <input type="matricule" id="matricule" name="matricule" value="' . $row["matricule"]. '"><br><br>
                                                                            <input type="text" id="direction" name="direction" value="' . $row["direction"]. '"> <br><br>
                                                                            <input type="text" id="departement" name="departement" value="' . $row["departement"]. '"> <br><br>
                                                                            <input type="text" id="service" name="service" value="' . $row["service"]. '"> <br><br>
                                                                            <input type="text" id="emploi" name="emploi" value="' . $row["emploi"]. '"> <br><br>
                                                                            <input type="text" id="fonction" name="fonction" value="' . $row["fonction"]. '"> <br><br>
                                                                            <input type="text" id="grade" name="grade" value="' . $row["grade"]. '"> <br><br>
                                                                            <input type="date" id="dateembauche" name="dateembauche" date_format="0000-00-00" placeholder="YYYY-MM-DD" value="' . $row["dateembauche"]. '">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <br><br>                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" align="center">
                                                                <br><br>
                                                                <input type="button" value="Supprimer"> &nbsp;&nbsp;&nbsp;&nbsp;
                                                                <input type="submit" value="Modifier">
                                                                <br><br>
                                                            </td>
                                                        </tr>  
                                                </table> 
                                    </form> ' ;

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