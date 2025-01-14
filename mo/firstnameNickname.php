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
                $col = 1;
                $array_word = explode(" ", $line); 

                foreach ($array_word as $value) {
                    $value = trim($value); 

                    if ($col == 1) {
                        echo ($value); 
                    } else {
                        
                        if ($value == "Robert") {
                            echo " Dick";
                        } elseif ($value == "Dick") {
                            echo " Robert";
                        } elseif ($value == "Bill") {
                            echo " William";
                        } elseif ($value == "William") {
                            echo " Bill";
                        } elseif ($value == "Valentia") {
                            echo " Jill";
                        } elseif ($value == "Jill") {
                            echo " Valentia";
                        } elseif ($value == "YoMama") {
                            echo " SoGood";
                        } elseif ($value == "SoGood") {
                            echo " YoMama";
                        } elseif ($value == "Wesker") {
                            echo " Albert";
                        } elseif ($value == "Albert") {
                            echo " Wesker";
                        } elseif ($value == "Kakarot") {
                            echo " Goku";
                        } elseif ($value == "Goku") {
                            echo " Kakarot";
                        } elseif ($value == "Ryomen") {
                            echo " Sukuna";
                        } elseif ($value == "Sukuna") {
                            echo " Ryomen";
                        } elseif ($value == "Gojo") {
                            echo " Satoru";
                        } elseif ($value == "Satoru") {
                            echo " Gojo";
                        } elseif ($value == "Kageno") {
                            echo " Cid";
                        } elseif ($value == "Cid") {
                            echo " Kageno";
                        } elseif ($value == "Aijou") {
                            echo " Rentaro";
                        } elseif ($value == "Rentaro") {
                            echo " Aijou";
                        } else {
                            echo " No Match";
                        }
                    }
                    $col++; 
                }
                echo "<br>";
            }
        } else {
            echo "<p style='color:red;'>File not found. Please check the filename and try again.</p>";
        }
    } else {
        ?>
        <form method="post" action="firstnameNickname.php">
            <b>Firstname Nickname</b>
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