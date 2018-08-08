<?php


echo'<h1> Failas 1 </h1>';

include 'failas2.php'; // itrauki kiek nori
include_once 'failas2.php'; // iterppia tik viena karta faila


require 'failas2.php'; 
require_once __DIR__.'/failas2.php'; 

@include_once'failasZ.php'; //jei klaida ne fataline, tada su @ yra paignoruojama ta vieta ir programa veikia toliau

echo __FILE__;

echo '<br>';
echo '<br>';
echo __DIR__; // nuroda kelia

echo $_GET['var'];
echo '<br>';
echo '<br>';
echo $_GET['var2'];


echo '<h2> pridejo antra faila<h2>';