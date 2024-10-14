<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
</head>

<?php
    $nom = $_POST['nom'];
    $desc = $_POST['desc'];

    echo "<br> Nom : $nom";
    echo "<br> Descriptif : $desc";

    date_default_timezone_set('Europe/Paris');
    $date = date("Y\-m\-d");
    echo "<br><br> la date actuelle est : "."$date"." <br>";
?>

</html>