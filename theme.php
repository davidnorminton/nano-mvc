<?php
namespace core;

class theme{
	protected $header = THEME_HEADER,
	          $footer = THEME_FOOTER;
	private $title;
	private $cache;

	
	public function __get($name){
		return $this->$name;
	}


	public function render($view){
		ob_start();
		include($this->header);
		echo $view;
		include($this->footer);
		$this->cache = ob_get_contents();
		ob_end_flush();
	}
	
	public function setTitle($title)
	{
	  $this->title = $title;
	}
	
	public function getCache()
	{
	  return $this->cache;
	}
	
}
