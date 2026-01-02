<?php
class FullstackApp extends ConnectSlider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderSlider()
    {
        $sql =
            "SELECT * FROM mirnesgl_korea.projects_website WHERE category='fullstack' OR category='featured fullstack' OR category='mini fullstack' ORDER BY projects_website_id DESC;";
        $stmt = $this->__connect()->query($sql);

         while ($row = $stmt->fetch()) {
            $img_1100 = $row["img_1100"];
            $img_768 = $row["img_768"];
            $img_375 = $row["img_375"];
            $img = $row["img"];
            $role = $row["role"];
            $skills = $row["skills"];
            $title = $row["title"];
            $summary = $row["summary"];
            $features = $row["features"];
            $link = $row["link"];
            $github = $row["github"];

            echo "<article class=\"case-study\">

                            <div class=\"mockup\">

                                <picture class='mockup'><!--[if IE 9]><video style='display: none;'><![endif]-->
                                    <source srcset=\"./websites/$img_1100\" type=\"image/webp\" width=\"1100\" height=\"650\" media=\"(min-width: 949px)\">
                                    <source srcset=\"./websites/$img_768\" type=\"image/webp\" width=\"768\" height=\"454\" media=\"(min-width: 600px)\">
                                    <source srcset=\"./websites/$img_375\" type=\"image/webp\" width=\"375\" height=\"222\" media=\"(max-width: 599px)\">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img decoding=\"async\" src=\"./websites/$img\" loading=\"lazy\" alt=\"Mockup of the $title by Expert Web Developer and Designer Mirnes Glamočić from Bosnia and Herzegovina\">
                                </picture>

                            </div><!-- end .mockup -->
                                
                            <!-- CONTENT -->
                            <div class=\"view\">
                                <h1>$title</h1>
                                    <div class=\"block\">
                                    <h2>Project overview</h2>
                                    </div><!-- end .block -->
                                    
                                    <!-- OVERVIEW -->
                                    <section class=\"overview\">
                                    
                                        <div class=\"overview-box\">
                                        <strong>My Role</strong>
                                        <span>$role</span>
                                        </div><!-- end .overview-box -->
                                        
                                        <div class=\"overview-box\">
                                        <strong>Tech Used</strong>
                                        <span>$skills</span>
                                        </div><!-- end .overview-box -->

                                    </section><!-- end .overview -->

                                    <div class=\"block\">
                                      <h2>Summary</h2>
                                        <p>$summary</p>
                                    </div><!-- end .block -->

                                    <div class=\"block\">
                                      <h2>Key Features</h2>
                                        <ul class=\"features\">
                                            $features
                                        </ul>
                                    </div><!-- end .block -->

                                    <!-- ACTIONS -->
                                    <section class=\"actions\">

                                        <a href=\"https://$link\" target='_blank' class='btn primary' rel='noopener noreferrer'>
                                            <svg class=\"icon\" viewBox=\"0 0 32 32\"><path d=\"M0 22.944q0 2.464 1.76 4.224l3.072 3.104q1.76 1.728 4.224 1.728t4.256-1.728l2.688-2.976q1.376-1.344 1.664-3.232t-0.512-3.552l-6.784 6.784q-0.576 0.576-1.408 0.576t-1.44-0.576l-2.816-2.816q-0.576-0.608-0.576-1.408t0.576-1.408l6.784-6.816q-1.632-0.8-3.52-0.512t-3.264 1.664l-2.944 2.72q-1.76 1.76-1.76 4.224zM9.792 20.256q0 0.832 0.576 1.408t1.408 0.576 1.408-0.576l8.48-8.48q0.576-0.576 0.576-1.408t-0.576-1.408q-0.608-0.576-1.44-0.576t-1.408 0.576l-8.448 8.48q-0.576 0.576-0.576 1.408zM14.336 7.968q-0.288 1.888 0.512 3.552l6.816-6.816q0.576-0.576 1.408-0.576t1.408 0.576l2.816 2.848q0.576 0.576 0.576 1.408t-0.576 1.408l-6.784 6.784q1.632 0.832 3.52 0.512t3.264-1.664l2.944-2.944q1.76-1.76 1.76-4.224t-1.76-4.256l-2.816-2.816q-1.76-1.76-4.224-1.76t-4.256 1.76l-2.944 2.944q-1.344 1.376-1.664 3.264z\"></path>
                                            </svg> VIEW LIVE DEMO &raquo;
                                        </a>

                                        <a href=\"https://github.com/full-stack-web-developer-and-designer/$github\" target='_blank' class='btn secondary'>
                                            <svg class=\"icon\" aria-hidden=\"true\">
                                                <use href=\"#icon-github\"></use>
                                            </svg> VIEW SOURCE CODE &raquo;
                                        </a>

                                    </section><!-- end .actions -->

                             </div> <!-- end .view -->
                             
                </article>"; // end .case-study
        }
    }
}
