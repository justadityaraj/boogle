<?php
include("classes/documentParser.php")
function followLinks($url) {
        $parser = new documentParser($url);
        $linkList = $parser->getLinks();
        foreach ($linkList as $link) {
            $href = $link->getAtrribute("href");
            echo $href;
        }
}
$startUrl = "http://www.apple.com";
followLinks($startUrl);
?>