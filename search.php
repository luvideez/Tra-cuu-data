<center><span style="font-size: 32px">
<?php
$servername = "localhost";
$username = "privatew_privatew";
$password = "xxxx";
$dbname = "privatew_khachhang";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'UTF8');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$search = $_POST['txtUserName'];
$sql = "SELECT * FROM `DS_khachhang_intimex` WHERE `Phone`=$search";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "Số thẻ :   " . $row["MemberCard"]. " <br> Tên Họ : " . $row["Name"]. " <br> Địa chỉ :   " . $row["Address"]. " <br> Sinh nhật :   " . $row["Birthday"]. " <br> Số điện thoại :  " . $row["Mobi"]." " . $row["Phone"]."<br>";
  }
} else {
  echo "Gõ sai số con mẹ nó rồi. Gõ lại đi bạn ơi!";
}
$conn->close();
?>
</span></span>
</center>