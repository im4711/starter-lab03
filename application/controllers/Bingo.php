<?php

/**
 * Display justone.php and fill in who, mug, what for bingo and wisdom.
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
    
    /**
     * Function to display wisdom quote.
     */
    function wisdom() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(6);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
}
