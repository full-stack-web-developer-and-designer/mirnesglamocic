<?php
class Website extends ConnectSlider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.projects_website ORDER BY projects_website_id DESC";
        $stmt = $this->__connect()->query($sql);
       
        while($row = $stmt->fetch()) {
            $img_600     = $row['img_600'];
            $img_500     = $row['img_500'];
            $img_408     = $row['img_408'];
            $img_300     = $row['img_300'];
            $img         = $row['img'];
            $skills      = $row['skills'];
            $skills_class= $row['skills_class'];
            $title       = $row['title'];
            $description = $row['description'];
            $href        = $row['href'];

                echo "<section class='project_complete' aria-label=\"Project $title by Expert Web Designer and Developer Mirnes Glamočić from Bosnia and Herzegovina\">
                        <div class='main-outer'>
                            <article class='project_mockup'>
                                <picture><!--[if IE 9]><video style='display: none;'><![endif]-->
                                    <source srcset=\"./websites/$img_600\", type=\"image/webp\" width=\"600\" height=\"391\" loading=\"lazy\" media=\"(min-width: 600px)\">
                                    <source srcset=\"./websites/$img_500\", type=\"image/webp\" width=\"500\" height=\"326\" loading=\"lazy\" media=\"(min-width: 520px)\">
                                    <source srcset=\"./websites/$img_408\", type=\"image/webp\" width=\"408\" height=\"266\" loading=\"lazy\" media=\"(min-width: 408px)\">
                                    <source srcset=\"./websites/$img_300\", type=\"image/webp\" width=\"300\" height=\"196\" loading=\"lazy\" media=\"(min-width: 100px)\">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img decoding=\"async\" srcset=\"./websites/$img\" alt=\"Mockup of $title by Expert Web Designer and Developer Mirnes Glamočić from Bosnia and Herzegovina\">
                                </picture>

                                <ul class=\"skills $skills_class\">
                                    $skills
                                </ul>
                            </article>
                            <article class='project_desc'>
                                <h3>$title</h3>
                                    <p>$description</p>
                                    <p><a href=\"$href\" target='_blank' class='button view_project' >VIEW PROJECT &raquo;</a></p>    
                            </article>
                        <div><!-- end .main-outer -->
                    </section>";
            }
        }
    }