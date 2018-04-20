<?php
// scalar datatype
// int, float, boolean, string
$x = "welcome"; // x is string
$x = 'welcome'; // x is string
$x = 5; // x is integer
$x = 50.5; // x is float
$x = true; // x is boolean
$x = false; // x is boolean

// compound datatype
// array, object
// color is array
$colors = array("red", "green", "blue");
// dbh is object
$dbh = new PDO("mysql:dbhost=localhost;dbname=newspaper5","root","");

// special datatype
// null, resource
$x = null; // x is null
$x = ""; // x is null
// resource

echo 'submit with git';