<?php
session_start();
if(!isset($_SESSION["u"]) || strlen($_SESSION["u"]) == 0) {
  header("location:form.htm");
  exit;
} ?>
hello world
<a href=signout.php>signout</a>