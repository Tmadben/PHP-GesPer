<!DOCTYPE html>
    <head>
        <title>
            Verification authentification
        </title>
    </head>
    <body>
        <?php 
            if (((isset($_POST['login']) && $_POST['login']!=='')) && (isset($_POST['pass']) && $_POST['pass']!=='')) {
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
                            <p> <img src="images/warn.png" alt="Warning! No value" width="30" height="30"> Veuillez vérifier que le ou les champs ne sont pas vides </p>
                            
                        ';
                }
            ?>
    </body>
    
</html>