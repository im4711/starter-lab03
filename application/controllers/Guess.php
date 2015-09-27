<?php

/**
 * Display justone.php and fill in who, mug, what for the guess quote.
 */
class Guess extends Application {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(4);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
}
