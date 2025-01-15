<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array1 = array();
    $array2 = [];

    $ColorArray = ['red','green','blue','purple'];
    echo "Index <br>";

    echo $ColorArray[0], "<br>";
    echo $ColorArray[1], "<br>";
    echo $ColorArray[2], "<br>";
    echo $ColorArray[3], "<br>";
    echo "For Loop <br>";
    
    echo count($ColorArray);
    for($i = 0 ;$i < count($ColorArray) ;$i++){ //Count($ColorArray)
        echo $ColorArray[$i], "<br>";
    }
    echo "foreach <br>";
    foreach ($ColorArray as $color){
        echo $color, "<br>";
    }
    ?>
</body>
</html>