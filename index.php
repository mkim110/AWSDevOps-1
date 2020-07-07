<!DOCTYPE html>
<html>
<head>
<title> WEB PAGE </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body align="center">
<a href="./song.html"><H1>애국가</H1></a><br>
<a href="./timetable.html"><H1>시간표</H1></a><br>
<?php
include "./db.php";
$query = "select url from photobook.photo";
$resource = mysqli_query($mysqli,$query);
for($i=0; $i<3; $i++) {
echo "<tr>";
for($j=0; $j<3; $j++) {
$row = mysqli_fetch_row($resource);
?>
<td><img src="<?=$row[0] ?>"/></td>
<?php
}
echo "</tr>";
}
$mysqli->close()
?>
</body>
</html>
