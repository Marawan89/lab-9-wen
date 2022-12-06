<?php
require_once("bootstrap.php");

//var_dump($dbh->getRandomPosts(2));

$templateParams["titolo"] = "Blog TW - Home";
$templateParams["nome"] = "lista-articoli.php";
$templateParams["articolicasuali"] = $dbh->getRandomPosts(2);
$templateParams["categorie"] = $dbh->getCategories();

$templateParams["articoli"] = $dbh->getPosts(2);

// Includere template
require("template/base.php");
?>