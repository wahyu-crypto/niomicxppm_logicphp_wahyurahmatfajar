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

        $uangRian = 5000;
        $bolpoin = 1750;
        $lusin = 12;
        
        echo "Riang Membayar dengan nominal uang 5000 x 5 = 25000 <br>";
        echo "harga bolpoin 1 buah 1750 bila 1 lusin x 12 hasil nya 21000 <br>";
        echo "lalu Rian menerima kembalian sebesar ";
        echo ($uangRian * 5) - ($bolpoin * $lusin);

    ?>
</body>
</html>