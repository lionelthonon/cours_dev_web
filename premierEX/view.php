<?php
/*
 * view.php
 * VIEW -> Html et tout ce que l'user verra
 *
 */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Cours 1 - 05_02_14</title>
	<meta name="Author" content=""/>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h1>Hello World !</h1>
    
    <!-- Introduction -->
    <p>
        <?php
            // Déclaration de variable
            echo($Hello);

            echo '<br />';

            // -- Déclaration de fonction -- //
            function nom() {
                // Des trucs

                return 'Je suis une fonction';
            }

            echo nom();

            // -- Déclaration de constante -- //
            echo '<br />';

            echo 'Bonjour '.NOM.' '.PRENOM;

            // -- Les concaténations -- //
            // MAUVAIS CHOIX
            echo "<br />Je suis $prenom $nom";
            // BON CHOIX
            echo '<br />Bonjour '.$prenom.' '.$nom;
        ?>
    </p>
    
    <!-- Exercice Fruits -->
    <!--<ul style="list-style-type: none;">
        <?php for($i=0; $i<$tab_length; $i++): ?>
            <li><?php echo($fruits[$i]); ?></li>
        <?php endfor; ?>
    </ul>-->
    
    <ul>
        <?php foreach($fruits as $key => $fruit): ?>
            <li><?php echo $key.' : '; echo $fruit; ?></li>
        <?php endforeach; ?>
    </ul>

    <p>Le plus petit chiffre est : <span style="font-weight: bold; color: green;"><?php echo getMini($chiffres); ?></span></p>
</body>
</html>
