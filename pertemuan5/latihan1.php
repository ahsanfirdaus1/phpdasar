<?php
$angka = [24,2,10,9,3,4,5];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: pink;
            text-align: center;
            line-height: 30px;
            font-size: 12px;
            margin: 2px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            background-color: limegreen;
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <!-- Perulangan Array 1 -->
    <?php 
    for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>
    <br><br>

    <!-- Perulangan Array 2 -->
    <?php foreach( $angka as $a) { ?>
        <div class="kotak"><?php echo $a ?></div>
    <?php } ?>
    <br><br>

    <!-- Perulangan Array 3 -->
    <!-- symbol { bisa diganti dengan : dengan diakhiri endforeach;  -->
    <?php foreach( $angka as $a) : ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
    <br><br>


    
</body>
</html>