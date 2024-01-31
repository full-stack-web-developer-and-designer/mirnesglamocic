<?php
class Pages extends Entity{
	public static $tableName = 'pages';
	public static $keyColumn = 'page_id';
	
	public function render(){
		$render = "<article id='hero'>
        <div class='wrapper'><h1 class='white'>$this->title_1</h1></div></article>";
		$render .= "<article id='aboutme'>
        <div class='wrapper'><img src='images/$this->my_image' alt='$this->alt' class='imgLeft'><h2>" . $this->title . "</h2><p>" . $this->pages_description . "</p></div></article><article id='about' class='lazy white'><div class='wrapper'>
            <div id='quotes'>
                <h2>$this->title_quotes</h2><p>$this->quote_1<em>$this->Picasso</em></p><br class='none'><p>$this->quote_2<em>$this->Gandhi</em></p><br class='none'><p>$this->quote_3<em>$this->Confucius</em></div></div></article>";
		return $render;
	}
	}