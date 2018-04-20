<?php
#script name : school 
#script version : 2.03
#last updated : 1/1/2017
#developed by : ahmed fahi

// valid is var refer to is user logged in
$valid = true;

/*
    getAction function
    @param $x : string
    return type of action 
*/
function getAction($x)
{
    return ($x)?$x:"no";
}