<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $score = 85;
    if($score > 80) {
        $grade = "A";
    }elseif ($score >= 70) {
        $grade = "B";
    }elseif ($score >= 60) {
        $grade = "C";
    }elseif ($score >= 50) {
        $grade = "D";
    }else{
        $grade = "F";
    }
    echo "Your scores $score and your grade is $grade";
    
    ?>
</body>
</html>