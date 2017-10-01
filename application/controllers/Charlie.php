<?php

class Charlie extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
            // this is the view we want shown
            //$this->show(1);
	}
        
        public function brown()
        {
                // this is the view we want shown
                $this->show(3);
        }
}
