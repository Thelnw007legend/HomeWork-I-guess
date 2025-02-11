<HTML>
<HEAD><TITLE>Show Data Book</TITLE></HEAD>
<BODY>
<?php
$bookId = $_REQUEST['bookId'];
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";
$conn = mysqli_connect( $hostname, $username, $password );
if ( ! $conn ) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
mysqli_select_db ( $conn, $dbname )or die ( "ไม่สามารถเลือกฐานข้อมูล bookstore ได้" );
mysqli_query($conn, "SET character_set_results=tis620");
mysqli_query($conn, "SET character_set_client=tis620");
mysqli_query($conn, "SET character_set_connection=tis620");
$sql = "select * from book where BookID = $bookId";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($result);
$Path="pictures/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
$image = "<img src=$Path$data[Picture] valign=middle align = center
width=\"80\" height = \"100\">";echo "<table border=1 align =center bgcolor=#FFCCCC>";
echo "<tr><td align=center colspan = 2 bgcolor =#FF99CC><B>แสดงรายละเอียดหนังสือ
</B></td></tr>";
echo "<tr><td> รหัสหนังสือ : </td><td>".$data["bookId"]."</td></tr>";
echo "<tr><td> ชื่อหนังสือ : </td><td>".$data["bookName"]."</td></tr>";
echo "<tr><td> ประเภทหนังสือ : </td><td>".$data["typeId"]."</td></tr>";
echo "<tr><td> สถานะหนังสือ : </td><td>".$data["statusId"]."</td></tr>";
echo "<tr><td> ส านักพิมพ์ : </td><td>".$data["publish"]."</td></tr>";
echo "<tr><td> ราคาซื้อ : </td><td>".$data["unitPrice"]."</td></tr>";
echo "<tr><td> ราคาเช่า : </td><td>".$data["unitRent"]."</td></tr>";
echo "<tr><td> รูปภาพ : </td><td>".$image."</td></tr>";
echo "<tr><td>จ านวนวันที่ยืมได้ : </td><td>".$data["dayAmount"]."</td></tr>";
echo "<tr><td> วันที่จัดเก็บหนังสือ : </td><td>".$data["bookDate"]."</td></tr></table>";
?>
<BR>
<div align = "center"> <A HREF="listofbook.php">กลับหน้าหลัก</A></div><BR>
</BODY>
</HTML>