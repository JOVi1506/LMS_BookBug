<?php
session_start();
unset($_SESSION["user"]);
header("location:http://localhost/trial470/LMS/indexX.php");
?>