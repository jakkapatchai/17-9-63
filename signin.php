<?php 
session_start();
if($_GET["u"] == 1 && $_GET["p"] == 2) {
  $_SESSION["u"] = "1";
  echo "<a href=page1.php>page1</a>";
} else {
  header("location:form.htm");
}
?>
