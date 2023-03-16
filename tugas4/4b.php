<?php
$hardware = ['Motherboard', 'Processor', 'Hardisk', 'PC Cooler', 'VGA Card', 'SSD'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b.php</title>
</head>
<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($hardware as $item) { ?>
            <li><?= $item ?></li>
        <?php } ?>
    </ol>
    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php
        array_push($hardware, 'Card Reader', 'Modem');
        sort($hardware);
        foreach ($hardware as $item) { ?>
        <li><?= $item ?></li>
        <?php } ?>
  </ol>
  
</body>
</html>