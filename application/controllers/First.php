<?php

/**
 * Display justone.php and fill in who, mug, what for the first quote.
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }
    
    public function _remap() {
        switch($this->uri->segment(1)) {
            case 'first':
                $this->index();
                break;
            case 'sleep':
                $this->zzz();
                break;
            case 'show':
                $this->gimme($this->uri->segment(2));
            default:
                break;
        }
    }
    
    function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
    
    function zzz() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(1);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
        
        $this->render();
    }
    
    function gimme($num) {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get($num);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
        
        $this->render();
    }
}
