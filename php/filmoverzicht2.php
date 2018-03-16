<?php
include 'functies.php';
require_once '../php/databaseconnection.php';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">

    <link rel="icon" href="../afbeeldingen/favicon.ico"/>
    <title>Filmoverzicht</title>
    <link rel="stylesheet" href="../css/basisstijlen.css">
    <link rel="stylesheet" href="../css/filmoverzicht.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/knoppen.css">
</head>
<body>
<header>
    <?php printHeaderLogo(); ?>
    <?php  printHeaderKnoppen(); ?>
</header>
<main>
    <div class="cover">
    <?php
    $data = $dbh->query("select * from totale_films ");

    $overzicht = "";
    while ($row = $data->fetch()) {
//        "<img src='Image/".$row['cover_image']."' />
//        $overzicht .= "{$row['cover_image']}
//    <p>{$row['title']}</p>";}
        $titel = $row['title'];
//        echo "<img src=""../afbeeldingen/films/" . $titel . ".png"" >";
        echo '<img src="afbeeldingen/films/'.$titel.'.png" >';
        echo "<p>" . $row['title'] . "</p>";
    }

    ?>
        <p> "Actie!" </p>
        <?php
        $data = $dbh->query("select * from actie_films  ");

        $overzicht = "";
        while ($row = $data->fetch()) {
//        "<img src='Image/".$row['cover_image']."' />
//        $overzicht .= "{$row['cover_image']}
//    <p>{$row['title']}</p>";}
            echo "<img src='afbeeldingen/" . $row['title'] . ".png' />";
            echo "<p>" . $row['title'] . "</p>";
        }

        ?>
    </div>


</main>
<footer>
    <div class="footer">
        <div class="footer1">
            <?php printFooter1();?>
        </div>
        <div class="footer2">
            <?php printFooter2();?>
        </div>
    </div>
    <div class="bottom">
        <?php printCopyright();?>
    </div>
</footer>
</body>
</html>