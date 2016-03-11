<?php
require_once 'config.php';

class Applet {
	public $name;
	public $slug;
	public $width;
	public $height;
	public $jarClassFilepath;
	public $jarURL;
	public $descriptionHTML;
	
	function Applet($name, $slug, $width, $height, $jarClassFilepath, $jarURL, $descriptionHTML) {
		$this->name             = $name;
		$this->slug             = $slug;
		$this->width            = $width;
		$this->height           = $height;
		$this->jarClassFilepath = $jarClassFilepath;
		$this->jarURL           = $jarURL;
		$this->descriptionHTML  = $descriptionHTML;
	}
	
	
	
	public static function getList() {
		global $__APPLETS;
		return $__APPLETS;
	}
	
	
	public static function getBySlug($slug) {
		if ($slug === null)
			return null;
		
		$slug = strtolower($slug);
		$applets = self::getList();
		
		foreach ($applets as $applet) {
			if ($applet->slug === $slug)
				return $applet;
		}
		
		return null;
	}
}
?>