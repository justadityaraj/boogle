<?php
class documentParser {

    public function __construct($url) {
        $options = array('http'==>array('method'==>"GET", 'header'==>"user-agent: boogleBot/0.1\n"));
        $context = stream_context_create($options); 
        $doc = new DOMDocument();
        $doc=loadHTML(file_get_contents($url, false, $context));
    }
}
