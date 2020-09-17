<?php
$connect = new mysqli("localhost","root","","mysql");
$query = "select * from car";
$result = $connect->query($query);
while ($object = $result->fetch_object()) {
echo $object->f1 . "<br/>";
}
$connect->close();
?>