<!DOCTYPE html>
<html>
 <head>
 <?php


function hitungLuasLingkaran($jari_jari) {
    $luas = 3.14 * $jari_jari * $jari_jari;
    return $luas;
}

function hitungKelilingLingkaran($jari_jari) {
    $keliling = 2 * 3.14 * $jari_jari;
    return $keliling;
}


  $jari_jari_luas = 10;
 $luas_lingkaran = hitungLuasLingkaran($jari_jari_luas);
 echo "<h4>Menghitung Luas Lingkaran</h4>";
echo "Luas lingkaran dengan jari-jari 10 dan luas lingkaran: " . $luas_lingkaran . "<br>";
echo "<hr>";
$jari_jari_keliling = 20;
$keliling_lingkaran = hitungKelilingLingkaran($jari_jari_keliling);
echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Keliling lingkaran dengan jari-jari 20 dan keliling lingkaran: " . $keliling_lingkaran . "<br>";
    echo "<hr>";

?>

</head>
</html>