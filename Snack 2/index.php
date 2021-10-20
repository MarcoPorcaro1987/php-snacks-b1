<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
 $name = $_GET['name'] ;
 $email = $_GET['email'];
 $age = $_GET['age'];
 $verified = false;

if (!empty($name) && !empty($email) && !empty($age)){
    if (strlen($name) > 3 && strpos($email, "@") && strpos($email, ".") && is_numeric($age)) {
        $verified = true;
        } 
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 2</title>
</head>
<body>
    <form action="">
        <h2>Iscrizione</h2>
        <input type="text" name="name" value="" placeholder="Nome">
        <input type="text" name="email" value="" placeholder="Mail">
        <input type="number" name="age" value="" placeholder="Age">
        <input type="submit" name="submit" value="Invia">
    </form>
    <?php if (!empty($name) && !empty($email) && !empty($age)){ ?>
        <?php if ($verified) { ?>
            <h1>Email verificata!</h1>
        <?php } else {?>
            <h1>Email non verificata!</h1>
        <?php } ?>
    <?php } ?>
</body>
</html>