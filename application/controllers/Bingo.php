<?php

/**
 * Display justone.php and fill in who, mug, what for the first quote.
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(5);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
    
    function wisdom() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(6);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
}
