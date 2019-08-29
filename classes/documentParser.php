<?php
class documentParser {
    private $doc;


    public function __construct($url) {
        $options = array(
            'http'==>array('method'==>"GET", 'header'==>"user-agent: boogleBot/0.1\n")
        );
        $context = stream_context_create($options); 
        $doc = new DomDocument();
        $doc->loadHTML(file_get_contents($url, false, $context));
    }
    public function getLinks() {
        return $this->doc->getElementsByTagName("a");
    }
    public function getTitletags() {
        return $this->doc->getElementsByTagName("title");
    }
}
?>
