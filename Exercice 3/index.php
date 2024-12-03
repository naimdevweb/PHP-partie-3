<?php
$nombre = 100;
$nombre2 = 60;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php for($i = 100; $i >= 10; $i-- ){
        $multiplier = $i * $nombre2;
        echo $multiplier . "<br>" ;
        
    } ?></p>
</body>
</html>