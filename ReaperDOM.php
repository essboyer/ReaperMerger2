<?php

/**
 * Reaper Domain Object Model
 * 
 */
class ReaperDOM {

    public $projectDetails;
    public $items;
    
    public function __construct() {
        $this->items = new SplObjectStorage();
    }

    public function addItem(DomItem $obj) {
        $this->items->add($obj);
    }
    
    public function removeItem(DOMItem $obj) {
        $this->items->delete($obj);
    }
}

class DOMItem {

    public $name;
    public $details;
    public $children;
    public $parentRef;

    public function __construct(DOMItem &$parent) {
        $this->details = array();
        $this->children = new SplObjectStorage();
        $this->parentRef = $parent;
    }

}

class Project extends DOMItem {
    
}

class Track extends DOMItem {
    
}

class Item extends DOMItem {
    
}

class FXChain extends DOMItem {
    
}

class VST extends DOMItem {
    
}

class Source extends DOMItem {
    
}

class RecordCfg extends DOMItem {
    
}

class ApplyFxCfg extends DOMItem {
    
}

class Metronome extends DOMItem {
    
}

class MasterPlaySpeedEnv extends DOMItem {
    
}

class TempoEnvEx extends DOMItem {
    
}

class ProjBay extends DOMItem {
    
}

class Extensions extends DOMItem {
    
}
