<?php
$db = mysqli_connect("localhost","root","pass","my_blog");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
include_once("func/blog.php");
?>