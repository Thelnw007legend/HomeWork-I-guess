<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Firstname to Nickname</title>
</head>
<body>
<center>
    <?php
    if (isset($_POST['submit'])) {
        $fname = $_POST['filename'];

        if (file_exists($fname)) {
            $text = file($fname);
            foreach ($text as $line) {
                $col = 1; // รีเซ็ตตัวนับคอลัมน์ใหม่สำหรับแต่ละแถว
                $array_word = explode(" ", $line); // แยกข้อมูลตามช่องว่าง

                foreach ($array_word as $value) {
                    $value = trim($value); // ตัดช่องว่างออก

                    if ($col == 1) {
                        echo ($value); // แสดงคอลัมน์แรก
                    } else {
                        // เริ่มเงื่อนไข if-else สำหรับการจับคู่ชื่อและนามแฝง
                        if ($value == "Robert") {
                            echo " Dick";
                        } elseif ($value == "Dick") {
                            echo " Robert";
                        } elseif ($value == "Bill") {
                            echo " William";
                        } elseif ($value == "William") {
                            echo " Bill";
                        } elseif ($value == "James") {
                            echo " Jamie";
                        } elseif ($value == "Jamie") {
                            echo " James";
                        } elseif ($value == "Jack") {
                            echo " John";
                        } elseif ($value == "John") {
                            echo " Jack";
                        } elseif ($value == "Margaret") {
                            echo " Maggie";
                        } elseif ($value == "Maggie") {
                            echo " Margaret";
                        } elseif ($value == "Ed") {
                            echo " Edward";
                        } elseif ($value == "Edward") {
                            echo " Ed";
                        } elseif ($value == "Sarah") {
                            echo " Sally";
                        } elseif ($value == "Sally") {
                            echo " Sarah";
                        } elseif ($value == "Andy") {
                            echo " Andrew";
                        } elseif ($value == "Andrew") {
                            echo " Andy";
                        } elseif ($value == "Anthony") {
                            echo " Tony";
                        } elseif ($value == "Tony") {
                            echo " Anthony";
                        } elseif ($value == "Debbie") {
                            echo " Deborah";
                        } elseif ($value == "Deborah") {
                            echo " Debbie";
                        } else {
                            echo " No Match"; // กรณีที่ไม่มีการจับคู่
                        }
                    }
                    $col++; // เพิ่มตัวนับคอลัมน์
                }
                echo "<br>"; // แยกแถวใหม่
            }
        } else {
            echo "<p style='color:red;'>File not found. Please check the filename and try again.</p>";
        }
    } else {
        ?>
        <form method="post" action="firstnameNickname.php">
            <b>Firstname to Nickname</b>
            <p></p>
            <table>
                <tr>
                    <td align="right">File name:</td>
                    <td><input type="text" name="filename" size="30" value=""/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="SUBMIT"/>
                        <input type="reset" name="reset" value="RESET"/>
                    </td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</center>
</body>
</html>