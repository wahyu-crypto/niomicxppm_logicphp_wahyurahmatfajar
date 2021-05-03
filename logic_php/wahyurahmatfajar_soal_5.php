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

    function listMenu($string, $menu) {
        for($i=1; $i <= 3; $i++){
            if($i >= 2 && $i <= 3){
                echo "$i.";
                echo " Menu $menu ke ";
                echo "$i";
                echo "<br>";
            } else {
                echo "$menu";
                echo "<br>";
                echo "$i.";
                echo " Menu $menu ke ";
                echo "$i";
                echo "<br>";
            }
        }
    }
    
    listMenu(3, 'Makanan');
    listMenu(3, 'Minuman');
    listMenu(3, 'Parsel');

    ?>
</body>
</html>