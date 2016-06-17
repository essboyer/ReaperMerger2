<?php

class Parser {

    const OPEN = "<";
    const CLOSE = ">";
    const PROJ_OPEN = "REAPER_PROJECT";
    const TRACK = "TRACK";

    private $filePath = "C:/dev/ReaperMerger2/Jimmy.rpp";
    private $DOM;
    private $lines;

    // line: <name other shit

    public function Parser() {

        $this->DOM = new ReaperDOM();
        
        $currentItem = null;
        
        $contents = file_get_contents($this->filePath);
        $this->lines = explode("\n", $contents);
        
        processLines();
        
//        foreach ($lines as $line) {
//            $this->processLine($line);
//        }
    }

    private function processLines(DOMItem $di = null) {
        
        $line = array_pop($this->lines);
        
        $chunks = explode(" ", $line); // everything after the first word
            
        if (self::has($line, self::OPEN)) {
            //$item = array(trim($chunks[0], self::OPEN) => array_splice($chunks, 1));
            $first = trim(trim($chunks[0], self::OPEN)); //the first word

            print_r($chunks); die("...die");
            
            // create a new dom item for this opening thing
            $new = new DOMItem();
            $new->name = $first;
            $new->details = $chunks;
            
        } elseif (self::has($line, self::CLOSE)) {
            
        } elseif (strlen($line) > 1) { // it's a child array with the detail name as key, with an array of the properties as val?
            
        } else { // fail case, doc is over
            
        }
        
        processLines($di);

//        foreach ($chunks as $chunk) {
//            
//        }
    }

    private static function has($line, $const) {
        return stripos($line, $const) !== false;
    }

}

$p = new Parser();