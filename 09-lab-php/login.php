<?php
require_once("bootstrap.php");

//var_dump($dbh->getRandomPosts(2));

$templateParams["titolo"] = "Blog TW - Home";
$templateParams["nome"] = "login-form.php";
$templateParams["articolicasuali"] = $dbh->getRandomPosts(2);
$templateParams["categorie"] = $dbh->getCategories();


// Includere template
require("template/base.php");
?>