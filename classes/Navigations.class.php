<?php
class Navigations extends Entity{
	public static $tableName = 'navigation';
	public static $keyColumn = 'id';
	
	public function render(){
		$render = "<li><a href=\"/#aboutme\">$this->about</a><li> ";
        $render .= "<li><a href=\"/#skills\">$this->skills</a></li>";
        $render .= "<li><a href=\"/#projects\">$this->projects</a></li>";
        $render .= "<li><a href=\"/#services\">$this->services</a></li>";
        $render .= "<li><a href=\"/#contact\">$this->contact</a></li>";
		return $render;
	}
}