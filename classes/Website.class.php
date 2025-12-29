<?php
class Website extends ConnectSlider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderSlider()
    {
        $sql =
            "SELECT * FROM mirnesgl_korea.projects_website ORDER BY projects_website_id DESC";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $category = $row["category"];
            $img_600 = $row["img_600"];
            $img_550 = $row["img_550"];
            $img_500 = $row["img_500"];
            $img_408 = $row["img_408"];
            $img_300 = $row["img_300"];
            $img = $row["img"];
            $role = $row["role"];
            $skills = $row["skills"];
            $title = $row["title"];
            $summary = $row["summary"];
            $features = $row["features"];
            $link = $row["link"];
            $github = $row["github"];


            echo "<article class='project_complete clearfix' aria-label=\"Project $title by professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina\">
                            <article aria-label=\"Project $title by professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina\">
                                <picture class='mockup'><!--[if IE 9]><video style='display: none;'><![endif]-->
                                    <source srcset=\"./websites/$img_600\" type=\"image/webp\" width=\"600\" height=\"391\" media=\"(min-width: 1261px)\">
                                    <source srcset=\"./websites/$img_550\" type=\"image/webp\" width=\"550\" height=\"358\" media=\"(min-width: 1192px)\">
                                    <source srcset=\"./websites/$img_500\" type=\"image/webp\" width=\"500\" height=\"326\" media=\"(min-width: 1148px)\">
                                    <source srcset=\"./websites/$img_600\" type=\"image/webp\" width=\"600\" height=\"391\" media=\"(min-width: 1007px)\">
                                    <source srcset=\"./websites/$img_550\" type=\"image/webp\" width=\"550\" height=\"358\" media=\"(min-width: 949px)\">
                                    <source srcset=\"./websites/$img_500\" type=\"image/webp\" width=\"500\" height=\"326\" media=\"(min-width: 904px)\">
                                    <source srcset=\"./websites/$img_600\" type=\"image/webp\" width=\"600\" height=\"391\" media=\"(min-width: 639px)\">
                                    <source srcset=\"./websites/$img_550\" type=\"image/webp\" width=\"550\" height=\"358\" media=\"(min-width: 580px)\">
                                    <source srcset=\"./websites/$img_500\" type=\"image/webp\" width=\"500\" height=\"326\" media=\"(min-width: 557px)\">
                                    <source srcset=\"./websites/$img_408\" type=\"image/webp\" width=\"408\" height=\"266\" media=\"(min-width: 457px)\">
                                    <source srcset=\"./websites/$img_300\" type=\"image/webp\" width=\"300\" height=\"196\" media=\"(max-width: 456px)\">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img decoding=\"async\" src=\"./websites/$img\" loading=\"lazy\" alt=\"Mockup of the $title by Expert Web Developer and Designer Mirnes Glamočić from Bosnia and Herzegovina\">
                                </picture>

                            <article class='project_desc'>
                                <h3>$title</h3>
                                    <p>$summary</p>
                                    <!-- OVERVIEW -->
                                    <section class=\"overview\">
                                        <div class=\"overview-box\">
                                        <strong>My Role</strong>
                                        <span>$role</span>
                                        </div>
                                        <div class=\"overview-box\">
                                        <strong>Tech Used</strong>
                                        <span>$skills</span>
                                        </div>
                                    </section>
                                    
                                    <p><a href=\"https://$link\" target='_blank' class='btn primary' ><svg fill=\"#FFF\" version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"12px\" height=\"12px\" viewBox=\"0 0 442.246 442.246\" xml:space=\"preserve\"><g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"></g><g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></g><g id=\"SVGRepo_iconCarrier\"> <g> <g> <path d=\"M409.657,32.474c-43.146-43.146-113.832-43.146-156.978,0l-84.763,84.762c29.07-8.262,60.589-6.12,88.129,6.732 l44.063-44.064c17.136-17.136,44.982-17.136,62.118,0c17.136,17.136,17.136,44.982,0,62.118l-55.386,55.386l-36.414,36.414 c-17.136,17.136-44.982,17.136-62.119,0l-47.43,47.43c11.016,11.017,23.868,19.278,37.332,24.48 c36.415,14.382,78.643,8.874,110.467-16.219c3.06-2.447,6.426-5.201,9.18-8.262l57.222-57.222l34.578-34.578 C453.109,146.306,453.109,75.926,409.657,32.474z\"></path> <path d=\"M184.135,320.114l-42.228,42.228c-17.136,17.137-44.982,17.137-62.118,0c-17.136-17.136-17.136-44.981,0-62.118 l91.8-91.799c17.136-17.136,44.982-17.136,62.119,0l47.43-47.43c-11.016-11.016-23.868-19.278-37.332-24.48 c-38.25-15.3-83.232-8.262-115.362,20.502c-1.53,1.224-3.06,2.754-4.284,3.978l-91.8,91.799 c-43.146,43.146-43.146,113.832,0,156.979c43.146,43.146,113.832,43.146,156.978,0l82.927-83.845 C230.035,335.719,220.243,334.496,184.135,320.114z\"></path> </g> </g> </g></svg> VIEW LIVE DEMO &raquo;</a><a href=\"https://github.com/full-stack-web-developer-and-designer/$github\" target='_blank' class='button view_project github' ><svg xmlns=\"http://www.w3.org/2000/svg\"  width=\"12px\" height=\"12px\" viewBox=\"0 0 496 512\"><path id=\"github-icon\" fill=\"#635336\" d=\"M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z\"/></svg> VIEW SOURCE CODE &raquo;</a></p>    
                            </article><!-- end .project_desc -->
                        </div><!-- end .main-outer -->
                    </article>";
        }
    }
}
