<?php
include("classes/documentParser.php")

function createLinks($src, $url) {

    $scheme = parse_url($url)["scheme"]; //http
    $host = parse_url($url)["host"]; //exm.php

    if(substr($src, 0, 2) == "//") {
        $src = parse_url ($url)["scheme"] . ":" . $src;
    }
    else if (substr($src, 0, 2) == "/") {
        $src = $scheme . "://" . $host . $src;
    }
}
function followLinks($url) {
        $parser = new documentParser($url);
        $linkList = $parser->getLinks();
        foreach ($linkList as $link) {
            $href = $link->getAtrribute("href");
            
            if(strpos($href, "#") !== false) {
                continue;
            }
            else if(substr($href, 0, 11) == "javascript:") {
                continue;
            }
        }
}
$startUrl = "http://www.bbc.com";
followLinks($startUrl);
?>