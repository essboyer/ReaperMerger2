<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DOM
 *
 * @author Boyer
 */
class DOM {

    public $projectDetails;
    public $items;
    
    public function __construct() {
        $this->items = new Collection();
    }

    public function addItem(DomItem $obj) {
        $this->items->add($obj);
    }
    
    public function removeItem(DOMItem $obj) {
        $this->items->delete($obj);
    }
}

class DOMItem {

    public $details;
    public $children;
    public $parentRef;

    public function __construct(DOMItem &$parent) {
        $this->details = array();
        $this->children = new Collection();
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
