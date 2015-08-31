<?php
class Parser { 
	const OPEN = "<";
	const CLOSE = ">";
	const PROJ_OPEN = "REAPER_PROJECT";
	const TRACK = "TRACK";

	private $filePath = "/Users/seanboyer/Dev/tools/ReaperMerger/Jimmy.rpp";
	private $DOM;


	// line: <name other shit

	public function Parser() {

		$DOM = array();
		$tracks = array();

		$contents = file_get_contents($filePath);
		$lines = explode("\n", $contents);

		foreach ($lines as $line) {
			$this->processLine($line);
		}
	}

	private function processLine($line) {
		$chunks = explode(" ", $line);

		if (self::has($line, OPEN)) {
			$item = array(trim($chunk[0], OPEN) => array_splice($chunks, 1));
		}

		if (self::hasClose($line)) {

		}

		foreach ($chunks as $chunk) {

		}

	}


	private static function has($line, $const) {
		return stripos($line, $const) === false;
	}

}