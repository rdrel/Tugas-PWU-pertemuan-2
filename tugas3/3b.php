<!DOCTYPE html>
<html>
<head>

<?php
function urutan_angka($n) {
    $number = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            if ($number <= 15) { 
                echo $number . " ";
                $number++;
            } else {
                break 2;
            }
        }
        echo "<br>"; 
    }
}

urutan_angka(15);

?>

</head>
</html>