<?php
$countries=array(
    "India"=>"New Delhi",
    "USA"=>"Washington D.C.",
    "Japan"=>"tokyo",
    "France"=>"Paris",
    "Germany"=>"Berlin"
);

$capital="Paris";

$country=array_search($capital,$countries);

if ($country !==false){
    echo "$capital is the capital of $country";
}
    else{
        echo "$capital is not in array"; 
    }