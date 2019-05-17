<!-- 
Name: Abdullah Al Noman
Student ID: IT17155908
-->

<?php
session_start();
session_unset();
session_destroy();
header('Location: index.php');
exit();
?>