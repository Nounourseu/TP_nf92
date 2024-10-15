<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
</head>

<?php
    if (!empty($_POST['nom'])) {
        $nom = $_POST['nom'];
    } else {
        echo "VOUS DEVEZ SAISIR UN NOM";
        exit;
    }

    if (!empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
    } else {
        echo "VOUS DEVEZ SAISIR UN PRENOM";
        exit;
    }

    if (!empty($_POST['date_naissance'])) {
        $date_naissance = $_POST['date_naissance'];
    } else {
        echo "VOUS DEVEZ SAISIR UNE DATE DE NAISSANCE";
        exit;
    }

    echo "<br> Nom : $nom";
    echo "<br> Prenom : $prenom";
    echo "<br> Date de naissance : $date_naissance";

    date_default_timezone_set('Europe/Paris');
    $date = date("Y\-m\-d");
    echo "<br><br> la date actuelle est : "."$date"." <br>";
    sleep(2);
?>


</html>