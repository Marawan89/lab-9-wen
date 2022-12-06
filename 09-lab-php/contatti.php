<?php
require_once("bootstrap.php");

//var_dump($dbh->getRandomPosts(2));

$templateParams["titolo"] = "Blog TW - Home";
$templateParams["nome"] = "contatti-autori.php";
$templateParams["articolicasuali"] = $dbh->getRandomPosts(2);
$templateParams["categorie"] = $dbh->getCategories();

$templateParams["autori"] = $dbh->getAuthors();

// Includere template
require("template/base.php");
?>