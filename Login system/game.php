<?php
session_start();
if(isset($_SESSION["Logged"]) != true ){
    header("Location: index.php");
    exit();
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
    <?php
        echo "<p>Welcome ".$_SESSION["dbUser"].'! </p>';
        echo "<p><b>Wood</b>: ".$_SESSION["dbWood"];
        echo " | <b>Rocks</b>: ".$_SESSION["dbRock"];
        echo " | <b>Wheet</b>: ".$_SESSION["dbWheet"]."</p>";
        
        echo "<p><b>E-mail</b>: ".$_SESSION["dbEmail"];
        echo "<br /><b>Subscribtion expires in</b>: ".$_SESSION["dbSubscriber"]." days </p>";
    ?>

</body>

</html>