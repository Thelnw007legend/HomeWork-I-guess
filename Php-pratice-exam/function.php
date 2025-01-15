<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function display(){
        echo "Jirapat <br>";
        echo "3 <br>";
        echo "Vakim <br>";
    }   
    display();

    function add($a,$b){
        $sum = $a + $b;
        echo "Sum of values: $sum <br>";
        return $sum;
    }
    $a =10;
    $b =20;
    $displayFunction = add($a,$b);
    echo "This is main php: $displayFunction <br>";
    ?>
</body>
</html>