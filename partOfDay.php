<?php

date_default_timezone_set('Europe/Istanbul');

$saat = date("H");

$gece = "00";
$sabah = "06";
$ogle  = "10";
$ikindi = "17";
$aksam  = "20";

if($saat > $gece && $saat < $sabah)
{
    echo "Esenlikler dilerim";
}

if($saat >= $sabah && $saat < $ogle)
{
    echo "Günaydın";
}

if($saat >= $ogle && $saat < $ikindi)
{
    echo "İyi Günler";
}

if($saat >= $ikindi && $saat < $aksam)
{
    echo "İyi Akşamlar";
}

if($saat >= $aksam)
{
    echo "İyi Geceler";
}


?>