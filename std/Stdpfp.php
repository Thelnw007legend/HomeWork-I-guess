<?php
$name = "Jirapat Singka";
$nickname = "วาคิม";
$age = "20";
$birthDate = "5 กันยายน 2547";
$height = "181 เซนติเมตร";
$weight = "100 โล";
$classroom = "Sec 2";
$school = "มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ";
$hobby = "เล่นเกม";
$movies = "5 คืนสยองที่ร้านเฟรดดี้";
$major = "Information Technology";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayoht Sooton</title>
    <link rel="stylesheet" href="stdpfp.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Prayoht Sooton</h1>
        </div>
        <div class="profile-image">
            <img src="pfp.jpg" 
                 alt="a handsome person" />
        </div>
        <div class="info">
            <h2><?php echo $name; ?></h2>
            <p>ชื่อเล่น: <span><?php echo $nickname; ?></span></p>
            <p>วันเกิด: <span><?php echo $age; ?></span></p>
            <p>เกิด: <span><?php echo $birthDate; ?></span></p>
            <p>ส่วนสูง: <span><?php echo $height; ?></span></p>
            <p>น้ำหนัก: <span><?php echo $weight; ?></span></p>
            <p>ห้องเรียน: <span><?php echo $classroom; ?></span></p>
            <p>มหาลัย: <span><?php echo $school; ?></span></p>
            <p>งานอดิเรก: <span><?php echo $hobby; ?></span></p>
            <p>หนังที่ชอบ: <span><?php echo $movies; ?></span></p>
            <p>สาขา: <span><?php echo $major; ?></span></p>
        </div>


    </div>
</body>
</html>
