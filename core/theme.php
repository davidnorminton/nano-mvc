<?php
namespace core;

class theme{
	protected $header, $footer;
	private $title;

	
	public function __get($name){
		return $this->$name;
	}

	public function __construct()
	{
	    $this->header = THEME_HEADER;
	    $this->footer = THEME_FOOTER;
	}

	public function render($view){
		ob_start();
		include($this->header);
		echo $view;
		include($this->footer);
		ob_flush();
	}
	
	public function setTitle($title)
	{
	  $this->title = $title;
	}
	
}
