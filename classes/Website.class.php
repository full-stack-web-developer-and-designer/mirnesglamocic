<?php
class Website extends ConnectSlider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.projects_website ORDER BY projects_website_id DESC";
        $stmt = $this->__connect()->query($sql);
       
        while($row = $stmt->fetch()) {
            $img_600     = $row['img_600'];
            $img_550     = $row['img_550'];
            $img_500     = $row['img_500'];
            $img_408     = $row['img_408'];
            $img_300     = $row['img_300'];
            $img         = $row['img'];
            $skills      = $row['skills'];
            $skills_class= $row['skills_class'];
            $title       = $row['title'];
            $description = $row['description'];
            $href        = $row['href'];

                echo "<section id='websites' class='project_complete clearfix' aria-label=\"Project $title by professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina\">
                        <div class='main-outer'>
                            <article class='project_mockup clearfix'>
                                <picture class='mockup'><!--[if IE 9]><video style='display: none;'><![endif]-->
                                    <source srcset=\"./websites/$img_600\", type=\"image/webp\" width=\"600\" height=\"391\" media=\"(min-width: 1261px)\">
                                    <source srcset=\"./websites/$img_550\", type=\"image/webp\" width=\"550\" height=\"358\" media=\"(min-width: 1192px)\">
                                    <source srcset=\"./websites/$img_500\", type=\"image/webp\" width=\"500\" height=\"326\" media=\"(min-width: 1148px)\">
                                    <source srcset=\"./websites/$img_600\", type=\"image/webp\" width=\"600\" height=\"391\" media=\"(min-width: 1007px)\">
                                    <source srcset=\"./websites/$img_550\", type=\"image/webp\" width=\"550\" height=\"358\" media=\"(min-width: 949px)\">
                                    <source srcset=\"./websites/$img_500\", type=\"image/webp\" width=\"500\" height=\"326\" media=\"(min-width: 904px)\">
                                    <source srcset=\"./websites/$img_600\", type=\"image/webp\" width=\"600\" height=\"391\" media=\"(min-width: 639px)\">
                                    <source srcset=\"./websites/$img_550\", type=\"image/webp\" width=\"550\" height=\"358\" media=\"(min-width: 580px)\">
                                    <source srcset=\"./websites/$img_500\", type=\"image/webp\" width=\"500\" height=\"326\" media=\"(min-width: 557px)\">
                                    <source srcset=\"./websites/$img_408\", type=\"image/webp\" width=\"408\" height=\"266\" media=\"(min-width: 457px)\">
                                    <source srcset=\"./websites/$img_300\", type=\"image/webp\" width=\"300\" height=\"196\" media=\"(max-width: 456px)\">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img decoding=\"async\" srcset=\"./websites/$img\" loading=\"lazy\" alt=\"Mockup of $title by Expert Web Designer and Developer Mirnes Glamočić from Bosnia and Herzegovina\">
                                </picture>

                                <ul class=\"skills $skills_class\">
                                    $skills
                                </ul>
                            </article>
                            <article class='project_desc'>
                                <h3>$title</h3>
                                    <p>$description</p>
                                    <p><a href=\"$href\" target='_blank' class='button view_project' >VIEW PROJECT &raquo;</a></p>    
                            </article><!-- end .project_desc -->
                        <div><!-- end .main-outer -->
                    </section>";
            }
        }
    }