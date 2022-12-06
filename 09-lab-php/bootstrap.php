<?php
require_once("db/database.php");
$dbh = new DatabaseHelper("localhost", "root", "", "blogisw", 3306);
define("UPLOAD_DIR", "./upload/")
?>