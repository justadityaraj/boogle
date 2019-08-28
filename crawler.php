<?php
include("classes/documentParser.php")

function createLinks($src, $url) {
    echo "SRC: $src \n";
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