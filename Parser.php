<?php

class Parser {

    const OPEN = "<";
    const CLOSE = ">";
    const PROJ_OPEN = "REAPER_PROJECT";
    const TRACK = "TRACK";

    private $filePath = "C:/dev/ReaperMerger2/Jimmy.rpp";
    private $DOM;

    // line: <name other shit

    public function Parser() {

        $this->DOM = new ReaperDOM();
        
        $currentItem = null;
        
        $contents = file_get_contents($this->filePath);
        $lines = explode("\n", $contents);
        
        foreach ($lines as $line) {
            $this->processLine($line);
        }
    }

    private function processLine($line) {
        $chunks = explode(" ", $line); // everything after the first word
            
        if (self::has($line, self::OPEN)) {
            //$item = array(trim($chunks[0], self::OPEN) => array_splice($chunks, 1));
            $first = trim(trim($chunks[0], self::OPEN)); //the first word

            print_r($chunks); die("...die");
        }

        if (self::has($line, self::CLOSE)) {
            
        }

        foreach ($chunks as $chunk) {
            
        }
    }

    private static function has($line, $const) {
        return stripos($line, $const) !== false;
    }

}

$p = new Parser();