<?php

$botToken = "721990304:AAGU8O5_Ugtr6dn3PX0YkJV0pmsJ654CGYE";
$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents($website."/getupdates");
$updateArray = json_decode($update, TRUE);
$chatId = $updateArray["result"][0]["message"]["chat"]["id"];
file_get_contents($website. "/sendmessage?chat_id=".$chatId."&text=test");

?>