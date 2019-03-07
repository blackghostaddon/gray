<?php

$canal = $_GET['v'];
$youtube = file_get_contents('https://www.youtube.com/watch?v='.$canal);
preg_match('/"hlsManifestUrl.":."(.*?)"/', $youtube, $matches);
$url1 = substr($matches[1], 0, -1);
$url1 = str_replace('\/' , "/", $url1);
header ("Location: $url1");
exit ();

?>