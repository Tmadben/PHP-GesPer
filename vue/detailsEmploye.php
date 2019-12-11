<?php
echo '
<form action="../controller/enregistrerEmploye.php" method="post">
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
                                            <input type="text" id="nom" name="nom"><br><br>
                                            <input type="text" id="prenom" name="prenom"><br><br>
                                            <input type="text" id="contacts" name="contacts"><br><br>
                                            <input type="text" id="email" name="email"><br><br>
                                            <input type="text" id="lieunaiss" name="lieunaiss"><br><br>
                                            <input type="date" id="datenaiss" name="datenaiss" date_format="0000-00-00" placeholder="YYYY-MM-DD">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td align="center">
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
                                            <input type="matricule" id="matricule" name="matricule"><br><br>
                                            <input type="text" id="direction" name="direction"> <br><br>
                                            <input type="text" id="departement" name="departement"> <br><br>
                                            <input type="text" id="service" name="service"> <br><br>
                                            <input type="text" id="emploi" name="emploi"> <br><br>
                                            <input type="text" id="fonction" name="fonction"> <br><br>
                                            <input type="text" id="grade" name="grade"> <br><br>
                                            <input type="date" id="dateembauche" name="dateembauche" date_format="0000-00-00" placeholder="YYYY-MM-DD">
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

?>