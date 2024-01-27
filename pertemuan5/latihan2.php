<?php 
$mhs = ["Ahsan", "50420089", "ahsanfirdaus1@gmail.com"];
$mahasiswa = [["Ahsan", "50420089", "ahsanfirdaus1@gmail.com"],
["Firdaus", "50420090", "firdaus.ahsan@gmail.com"]];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <hr>
    <h2>Cara Manual</h2><br>
    <ul>
        <li><?php echo($mhs[0]);  ?></li>
        <li><?php echo($mhs[1]); ?></li>
        <li><?php echo($mhs[2]); ?></li>
    </ul>
    <br>
    <hr>
    <h2>Cara Foreach</h2><br>
    <ul>
        <?php foreach ($mahasiswa as $m) : ?>
        <li><?= $m[0]; ?></li>
        <li><?= $m[1]; ?></li>
        <li><?= $m[2]; ?></li>
        <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>