<html>
<head><title>firstnameNickname</title></head>
<body>
<?php
if (isset($_POST['submit'])) { 
    $filename = $_POST['filename'];
    $text = file($filename);
    foreach($text as $tr_data){

       $col = 1;
       $array_word = explode(",", $tr_data);
       foreach($array_word as $value){
        $value = trim($value);
        if ($col == 1){
        
            echo $value;

        }
        else{
            if ($value == "Robert") echo "Dick";
            elseif($value == "Dick") echo "Robert";
            elseif($value == "Willaim") echo "Bill";
            elseif($value == "Bill") echo "Willam";
            elseif($value == "Jil") echo "Valentia";
            elseif($value == "Valentia") echo "Jil";
            elseif($value == "YoMama") echo "SoGood";
            elseif($value == "SoGood") echo "YoMama";
            elseif($value == "Albert") echo "Wesker";
            elseif($value == "Wesker") echo "Albert";
            elseif($value == "SonGoku") echo "Kakarot";
            elseif($value == "Kakarot") echo "SonGoku";
        }
        $col++;

       }

    }

    
} else {
?>
<html>
<head><title>firstnameNickname</title></head>
<form method="post" action="firstnameNickname.php">
<h3>FirstNameNickName.php</h3>
<table width= "400" border="0" align="center">
    <tr>
        <td width ="100"><br>File name: </td>
        <td width ="100" align="center"><br><input type="text" name="filename" size="30" value=""> </td>
    </tr>
    <tr>
        <td colspan="2" align="center"> <br>
            <input type="submit" name="submit" value="Submit" />
            <input type="reset"  name="reset" value="Reset" />
        </td>
        </tr>
</table>

</form>
</body>
</html>
<?php
}
?>
