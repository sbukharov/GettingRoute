<?php


class Able extends Application
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
            // this is the view we want shown - default view
            $this->show(1);
	}
}
