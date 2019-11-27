<!DOCTYPE html>
    <head>
        <title>
            Verification authentification
        </title>
    </head>
    <body>
        <?php 
            if (isset($_POST['login']) && (isset($_POST['pass']))) {
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
                    echo ('Les champs sont vides');
                }
            ?>
    </body>
    
</html>