<?php
$nombre = 0;
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
    <p><?php for($i = 0; $i < 21; $i++ ){
        $multiplier = $nombre * $nombre2;
        echo $multiplier . "<br>" ;
        $nombre += 1;
    } ?></p>
</body>
</html>