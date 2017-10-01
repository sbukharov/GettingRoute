<?php
class Must extends Application
{
	function __construct()
	{
		parent::__construct();
	}
	public function wehave()
	{
		// this is the view we want shown
		$this->show(5);
	}
}