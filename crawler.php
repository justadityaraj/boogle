<?php
include("classes/documentParser.php")
function followLinks($url) {

        $parser = new documentParser($url);

}

$startUrl = "https://www.adityaraj.com";
followLinks($startUrl);
