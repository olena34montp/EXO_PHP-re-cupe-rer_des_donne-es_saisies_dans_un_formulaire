<?php
$autor = '';
if(!empty($_POST)){
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $autor = $nom . " " . $prenom;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Nom : </label>
        <input type="text" name="nom" size="40" required>
        <br>
        <label>Prénom : </label>
        <input type="text" name="prenom" size="40" required><br />
        <input type="submit" name="ok" value="OK">
    </form>
    <?= $autor ?>
</body>

</html>