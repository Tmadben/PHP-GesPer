<html>
    <head>
        <meta charset="UTF-8" />
        <title>GesPers_0.0</title>
        <link rel="" href="css/style.css" />

    </head>
    <body>
        <header>
            Bienvenue sur notre application de Gestion du Personnel
        </header>
            <nav>
            
            <nav>
        <?php 
            // Variables: Elles doivent étre initialisées à leur création et leur type est le type de leur premiére valeur d'affection
            $user="BERTHE";
            $bienvenue="Bienvenue sur le portail de Gestion du Personnel"
        ?>
        <h1 align='center' > 
            <?php 
                echo ($bienvenue);
                echo ("<br />");
                print ("M. ".$user);
                
            ?>
        </h1>
        <?php
           echo("<span align='center'>" );
            echo ("<br /> Affectation par valeur $"."var1=1; $"."var2=4;");
            echo ("<br /> Affectation par reference $"."var2=&$"."var1;");
            echo ("<br /> Affectation par reference signifie que ce qui se passe dans la var1 impact var2");
            echo(" </span>")
        ?>
    </body>
</html>