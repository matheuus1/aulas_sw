<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
    <style>
        p{
            color: red;
            
        }
    </style>
</head>
<body>
<?php
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $num3 = $_REQUEST['num3'];
    $media = ($num1 + $num2 + $num3) /3;
    echo "A média dos números é: $media"
    
?>
</body>
</html>
