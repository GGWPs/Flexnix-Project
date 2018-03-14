<!--/*-->
<!-- * Team: Kaene Peters en Ivan Miladinovic-->
<!-- * Auteur: Kaene en Ivan-->
<!-- * Versie: 1-->
<!-- * Datum: 14 maart 2018-->
<!---->
<!-- * Aangepast:-->
<!-- *Gastenboek is alleen voor de herkansing dus deze hele pagina is "nieuw"
<!-- *
<!--*/-->
<?php
include 'functies.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/basisstijlen.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/knoppen.css">
    <link rel="stylesheet" href="../css/gastboek.css"
    <link rel="icon" href="../afbeeldingen/favicon.ico"/>
    <title>Fletnix</title>

</head>
<body>
<header>
    <div class="logoheader">
        <?php printHeaderLogo(); ?>
    </div>
    <div class="headerbuttons">
        <?php printHeaderKnoppen(); ?>
    </div>
</header>
<main>
    <div class="cover">
        <h1> Welkom bij ons gastenboek hier kunt u een reactie op onze website achterlaten</h1>


        <?php

        if (isset($_SESSION['voornaam'])) {
            echo '<div class="invoerveld">';
            echo '  Plaats uw reactie om:' . "<br>" . date("Y/m/d") . "<br>";
            print_r($_SESSION['voornaam']);
            echo " ";
            print_r($_SESSION['achternaam']);
            gastenBoekInvoer();
            echo '</div>';
            roepComments();

        } else {
            echo '<h1> gelieve eerst in te loggen</h1>';
            roepComments();
        }
        ?>

    </div>
</main>
<footer>
    <div class="footer">
        <div class="footer1">
            <?php printFooter1(); ?>
        </div>
        <div class="footer2">
            <?php printFooter2(); ?>
        </div>
    </div>
    <div class="bottom">
        <?php printCopyright(); ?>
    </div>
</footer>
</body>


