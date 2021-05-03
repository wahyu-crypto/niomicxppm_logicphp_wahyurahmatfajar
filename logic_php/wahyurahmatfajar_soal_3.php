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

    $cabangToko = 100;
    $biaya = 10000;
    $kelipatan = 295.5882352941176;

    for($i = 1; $i<$cabangToko; $i++)
    {
        if($i == 1){
            $biaya += 0;
        } else {
            $biaya += $kelipatan;
        }

        echo "$i $biaya <br>";
    };

    ?>
</body>
</html>