<?php
// assignment operators
// = += -= *= /= .=
$visitors = 50; // = assigment
$visitors +=5; // += addition assigmenet like $visitors = $visitors + 5
$visitors -=5; // -= subtraction assigmenet like $visitors = $visitors - 5
$visitors *=5; // *= multiplcation assigmenet like $visitors = $visitors * 5
$visitors /=5; // /= division assigmenet like $visitors = $visitors / 5
//echo $visitors;

$firstName = "ahmed";
$middleName = "fathi";
$lastName = "aboelazm";

// .= connectnation assignment
$fullName = $firstName; // $fullName = "ahmed"
$fullName .= " "; // $fullName = "ahmed "
$fullName .= $middleName; // $fullName = "ahmed fathi"
$fullName .= " "; // $fullName = "ahmed fathi "
$fullName .= $lastName; // $fullName = "ahmed fathi aboelazm"
echo $fullName;



