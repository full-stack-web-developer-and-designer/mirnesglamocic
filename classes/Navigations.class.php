<?php
class Navigations extends Entity{
	public static $tableName = 'navigation';
	public static $keyColumn = 'id';
	
	public function render(){
		$render = "<li><a href=\"/#aboutme\" aria-label=\"about me\">$this->about</a><li> ";
        $render .= "<li><a href=\"/#certificates\" aria-label=\"my certificates\">$this->certificates</a></li>";
        $render .= "<li><a href=\"/#skills\" aria-label=\"my skills\">$this->skills</a></li>";
        $render .= "<li><a href=\"/#projects\" aria-label=\"my projects\">$this->projects</a></li>";
        $render .= "<li><a href=\"/#services\" aria-label=\"my services\">$this->services</a></li>";
        $render .= "<li><a href=\"/#contact\" aria-label=\"contact me\">$this->contact</a></li>";
		return $render;
	}
}