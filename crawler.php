<?php
include("classes/documentParser.php")

function createLink($src, $url) {

    $scheme = parse_url($url)["scheme"]; //http
    $host = parse_url($url)["host"]; //exm.php

    if(substr($src, 0, 2) == "//") {
        $src = parse_url ($url)["scheme"] . ":" . $src;
    }
    else if (substr($src, 0, 2) == "/") {
        $src = $scheme . "://" . $host . $src;
    }
    else if (substr($src, 0, 2) == "./"){
        $src = $scheme . "://" . $host . dirname(parse_url($url)["path"]) . substr($src, 1);
    }
    else if (substr($src, 0, 2, 3) == "../"){
        $src = $scheme . "://" . $host . "/" . src;
    }
    else if (substr($src, 0, 2, 5) != "https" && substr($src, 0, 5) != "http"){
        $src = $scheme . "://" . $host . "/" . src;
    }

    return $src;
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

            $href = $createLink($href, $url);
            echo $href . "<br>";
        }
}
$startUrl = "http://www.bbc.com";
followLinks($startUrl);
?>