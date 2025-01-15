<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $month = 1;
    switch ($month) {
        case '1':
            $monthName = "January";
            break;
        case '2':
            $monthName =  "Febuary";
            break;
        case '3':
            $monthName = "Your mom";
            break;
        default:
            $monthName = "No Selected Month";
            break;
    }
    echo "Your month is $monthName";
    ?>
</body>
</html>