<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NIOMIC X PPM</title>
</head>
<body>
    <?php 

    $SetyoDuapuluh = 20000 * 5;
    $SetyoSepuluh = 10000 * 3;
    $SetyoLima = 5000 * 4;

    $totalUangSetyo = $SetyoDuapuluh + $SetyoSepuluh + $SetyoLima;

    echo "Uang Setyo sepuluh ribuan ada 3 lembar dengan nominal 30000 <br>";
    echo "ditambah uang setyo lima ribuan ada 4 lembar dengan nominal 20000 <br>";
    echo "ditambah lagi dengan dua puluh ribuan ada 5 lembar dengan nominal 100000 <br>";
    echo "lalu Setyo membeli mainan dengan harga 55000 <br>";
    echo "dengan alur perhitungan 30000 + 20000 + 100000 - 55000 dan menghasilkan jumlah uang Setyo setelah membeli mainan sebesar : ";
    echo ($totalUangSetyo - 55000);

    ?>
</body>
</html>