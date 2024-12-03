<?php
$nombre = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php while( $nombre <= 10 ){
        echo $nombre . "<br>";
        $nombre += $nombre/2;
    } ?></p>
</body>
</html>