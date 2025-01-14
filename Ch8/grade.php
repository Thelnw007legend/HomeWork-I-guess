<html>
<head><title>ผลลัพท์จากการคำนวณเกรด</title></head>
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
                    

                    
                   }
                   $col++;
               }
               echo "</p>"; 
           }
       } else {
           echo "<p style='color:red;'>File not found. Please check the filename and try again.</p>";
       }
   } else {
       ?>
       <form method="post" action="grade.php">
           <b>ผลลัพท์จากการคำนวณเกรด</b>
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
</body>
</html>