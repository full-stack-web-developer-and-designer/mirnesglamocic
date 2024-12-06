<?php
class Navigations extends ConnectSlider
{
    public function renderSlider()
    {
        $sql = "SELECT * FROM mirnesgl_korea.navigation";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $href = $row["href"];
            $target = $row["target"];
            $title = strtoupper($row["title"]);
            $aria_label = ucfirst($row["title"]);

            echo "<li><a href=\"/$href\" target=\"$target\" title=\"View $aria_label\" 
		aria-label=\"View $aria_label\">
		$title</a>
		<li>";
        }
    }
}

