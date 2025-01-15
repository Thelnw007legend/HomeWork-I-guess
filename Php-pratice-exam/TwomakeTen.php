<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function MakeTen($n1,$n2){
        $sum = $n1+$n2;
        if($sum == 10 || $n1 == 10 || $n2 == 10){
            echo "Value($n1,$n2) can make ten";
        } else{
            echo "Value($n1,$n2) cant make ten";
        }   
    }
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    echo "This from file.inputmaketen name1 $n1 <br>";
    echo "This from file.inputmaketen name2 $n2 <br>";
    MakeTen($n1,$n2);
    ?>
</body>
</html>