<html>
<body>
    <?php 
    $x = "33" 
   ?>
<p> Aku adalah angka <span> <?php echo "<b>$x</b>" ?> </span> </p>
<p> Jika aku dikali 5, maka aku sekarang menjadi <span> <b><?php echo  $x * 5; ?> </span></b> </p>
<p> Jika aku dibagi 2, maka aku sekarang menjadi <span> <b><?php echo $x / 2; ?> </span></b> </p>
<p> Jika aku ditambah 75, maka aku sekarang menjadi <span> <b><?php echo  $x +  75; ?> </span></b> </p>
<p> Jika aku dikali 20, maka aku sekarang menjadi <span> <b><?php echo $x - 20; ?> </span></b> </p>
</body>
</html>