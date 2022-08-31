<!DOCTYPE html>
<html lang="en">
<head>
<title>Personel Tablosu</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1><strong>-----------Personel Tablosu-----------</strong></h1>
<?php

getenv('MYSQL_DBHOST') ? $db_host=getenv('MYSQL_DBHOST') : $db_host="localhost";
getenv('MYSQL_DBPORT') ? $db_port=getenv('MYSQL_DBPORT') : $db_port="3306";
getenv('MYSQL_DBUSER') ? $db_user=getenv('MYSQL_DBUSER') : $db_user="root";
getenv('MYSQL_DBPASS') ? $db_pass=getenv('MYSQL_DBPASS') : $db_pass="";
getenv('MYSQL_DBNAME') ? $db_name=getenv('MYSQL_DBNAME') : $db_name="test";

if (strlen( $db_name ) === 0)
  $conn = new mysqli("$db_host:$db_port", $db_user, $db_pass);
else 
  $conn = new mysqli("$db_host:$db_port", $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) 
	die("Connection failed: " . $conn->connect_error);
 
if (!($result=mysqli_query($conn,'SELECT * FROM personel;')))
    printf("Error: %s\n", mysqli_error($conn));

echo "<h3><strong>Ad-----Soyad-----Yas-----Telefon-----E-posta-----Sehir</strong></h3>";

while($row = mysqli_fetch_row( $result )){
  echo "<h3>";
  echo $row[0];
  echo " ";
  echo $row[1];
  echo " ";
  echo $row[2];
  echo " ";
  echo $row[3];
  echo " ";
  echo $row[4];
  echo " ";
  echo $row[5]."<br />";
}

$result -> free_result();
$conn->close();
?>
</div>
</body>
</html>
