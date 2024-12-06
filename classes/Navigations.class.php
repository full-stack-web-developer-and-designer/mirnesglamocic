<?php
class Navigations extends ConnectSlider
{
    public function renderSlider()
    {
        $sql = "SELECT * FROM mirnesgl_korea.navigation";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $href = $row["href"];
            $title = strtoupper($row["title"]);
            $aria_label = ucfirst($row["title"]);
            //public static $keyColumn = 'id';

            //public function render(){

            echo "<li><a href=\"/$href\" title=\"View $aria_label\" 
		aria-label=\"View $aria_label\">
		$title</a>
		<li>";
        }
    }
}
