<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="formulaire.css">
</head>
<body>
    <?php echo "recuperer THEMES et CALENDRIER"; ?>
    
    <form method="POST" action="ajouter_eleve.php">
        <h2>Ajout séance</h2>
        <br>
        <label>Thême : </label>
        <br>
        <input type="text" name="theme" required>
        <br>
        <label>Date : </label>
        <br>
        <input type="date" name="date_naissance" required>
        <br>
        <label>Nombre maximum de participants : </label>
        <br>
        <input type="number" name="nb_max_participants" required>
        <br>
        <input type="submit" value="Saisir">
        <br>
    </form>
</body>
</html>