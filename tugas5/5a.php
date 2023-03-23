<?php 
$film = [
[
    'gambar' =>'<img src="thelastofus2.jpg" style="widht:300px;height:300px;" >',
    'judul'=> 'The last Of us',
    'Tahun'=>'2022',
    'pemeran utama' => 'Pedro pascal',
    'genre'=> ['Action ,','Drama'],
    'sutradara'=>'Neil Druckman'
],
[
    'gambar' =>'<img src="wakanda.jpg" style="widht:300px;height:300px;" >',
    'judul'=> 'Black Panther: Wakanda Forever',
    'Tahun'=>'2022',
    'pemeran utama' => 'Letitia Wright',
    'genre'=> ['Action'],
    'sutradara'=>'Ryan Coogler'
],
[
    'gambar' =>'<img src="firstavenger.jpg" style="widht:300px;height:300px;" >',
    'judul'=> 'Captain America The First Avenger',
    'Tahun'=>'2011',
    'pemeran utama' => 'Chris evans',
    'genre'=> ['Action'],
    'sutradara'=>'Joe johnston'
],
[
    'gambar' =>'<img src="theavenger.jpg" style="widht:300px;height:300px;" >',
    'judul'=> 'The Avenger',
    'Tahun'=>'2012',
    'pemeran utama' => 'Robert Downey Jr',
    'genre'=> ['Action'],
    'sutradara'=>'Joss Whedon'
],
[
    'gambar' =>'<img src="amazingspiderman.jpg" style="widht:300px;height:300px;" >',
    'judul'=> 'The Amazing Spider-man',
    'Tahun'=>'2012',
    'pemeran utama' => 'Andrew Garfield',
    'genre'=> ['Action ,','Adventure'],
    'sutradara'=>'Marc webb'
],
[
    'gambar' =>'<img src="civilwar.jpg" style="widht:300px;height:300px;" >',
    'judul'=> 'Captain America Civil War',
    'Tahun'=>'2016',
    'pemeran utama' => 'Chris Evans',
    'genre'=> ['Action'],
    'sutradara'=>'Anthony Russo'
],
[
    'gambar' =>'<img src="dontbreathe.jpg" style="widht:300px;height:300px;" >',
    'judul'=> 'Dont Breath',
    'Tahun'=>'2016',
    'pemeran utama' => 'Stephen Lang',
    'genre'=> ['Horror ,','Crime'],
    'sutradara'=>'Fede Alvarez'
],
[
    'gambar' =>'<img src="avatar.jpg" style="widht:300px;height:300px;" >',
    'judul'=> 'Avatar: The Way of Water',
    'Tahun'=>'2022',
    'pemeran utama' => 'Sam Worthington',
    'genre'=> ['Action ,','Adventure'],
    'sutradara'=>'James cameron'
],
[
    'gambar' =>'<img src="hacksaw.jpg" style="widht:300px;height:300px;" >',
    'judul'=> 'Hacksaw Ridge',
    'Tahun'=>'2016',
    'pemeran utama' => 'Andrew Garfield',
    'genre'=> ['History,','Drama'],
    'sutradara'=>'Mel Gibson'
],
[
    'gambar' =>'<img src="fastandfurious.jpg" style="widht:300px;height:300px;" >',
    'judul'=> 'Fast & Furious',
    'Tahun'=>'2009',
    'pemeran utama' => 'Vin Diesel',
    'genre'=> ['Action ,','Crime'],
    'sutradara'=>'Justine Lin'
],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>flim  </title>
</head>
<body>
<h2>Daftar film </h2>
    <?php foreach($film as $f) { ?>
    <ul>
        <?=$f['gambar']; ?>
        <li>Judul: <?=$f['judul']; ?> </li>
        <li>Tahun: <?=$f['Tahun']; ?></li>
        <li>Pemeran utama:<?=$f['pemeran utama']; ?></li>
        <li>Genre: <?php foreach($f['genre'] as $m ){
            echo $m;
        } ?> </li>
        <li>Sutradara: <?=$f['sutradara']; ?></li>

    </ul>
    <?php } ?>
</body>
</html>