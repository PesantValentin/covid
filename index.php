<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <title>Mon site</title>
</head>
<body>
    
    <?
    include "fonction.php"; 

    if($access){
        
        echo "Mon site";
        echo '<a href="combat.php">combat!!</a>';

    }else{
        echo "incroyable!";
        echo $errorMessage;
    }
    ?>
</body>
</html>