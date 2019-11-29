<?php
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
                echo 
                    '<p> Bravo! Tous les champs sont renseignés </p>
                    ';
            }
        ?>
    </body>
</html>