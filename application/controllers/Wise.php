<?php

/*
 * application/controllers/Wise.php
 */

class Wise extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    
    // function for quote for sixth link
    function bingo()
    {
        $this->data['pagebody'] = 'justone';	// this is the view we want shown
        $record = $this->quotes->get(6);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}
