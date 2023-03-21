<?php
class Page{
	private static $db;
	public static function get($id){
		$q = self::$db->query("SELECT * FROM pages WHERE page_id = {$id}");
		$post = $q->fetchObject('Page');
		return $post;
	}
	public static function getAll(){
		$q = self::$db->query("SELECT * FROM pages");
		$postArr = $q->fetchAll();
		return $postArr;
	}	
	public static function init(){
		self::$db = Connect::getInstance();
	}
}
	