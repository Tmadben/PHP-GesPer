<!DOCTYPE html>
    <head>
        <title>
            Verification authentification
        </title>
    </head>
    <body>
        <?php 
            if (!empty($_POST['login']) && !empty($_POST['pass']) ) {
                $login = $_POST['login'];
                $passe = $_POST['pass'];
                echo 
                   '<table border="1">
                        <tr>
                            <td colspan=2> Tentative d acces </td>
                        </tr>
                        <tr>
                            <td>Login: </td>                        
                            <td>' .  $login . '</td>
                        </tr>
                        <tr>
                            <td>Mot de passe : </td>
                            <td>' . $passe . '</td>
                        </tr>
                    </table>';
        
                } else {
                    echo 
                        '
                            <p align="center"> <img src="images/warn.png" alt="Warning! No value" width="50" height="50"></p>
                            <p align="center"> Veuillez vérifier que le ou les champs ne sont pas vides </p>
                            
                        ';
                }
            ?>
    </body>
    
</html>