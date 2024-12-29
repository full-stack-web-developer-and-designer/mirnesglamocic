<footer id="footer">
        <?php
        function copyright($startYear) {
            $currentYear = date('Y');
            if ($startYear < $currentYear) {
                $currentYear = date('y');
                return "<p><small><span id='footer_copyright'>&copy Copyright $startYear &ndash; $currentYear" . " | SQL Quizzer<span id='footer_comma'>,</span><span id='none'> |</span></span><span id='footer_info'> Developed by <a href='https://mirnesglamocic.com' target='_blank'>Mirnes Glamočić</a></span><span class='footer-social'><a href='https://www.linkedin.com/in/mirnesglamocic/' target='_blank'><i class='footer-icon fab fa-linkedin'></i></a>
                <a href='https://github.com/full-stack-web-developer-and-designer/' target='_blank'><i class='footer-icon fab fa-github'></i></a><a href='https://codepen.io/full-stack-web-developer-and-designer'  target='_blank'><i class='footer-icon fab fa-codepen'></i></a></span></small></p>";
            } else {
                return "<p><small><span id='footer_copyright'>&copy Copyright $startYear " . " | SQL Quizzer<span id='footer_comma'>,</span><span id='none'> |</span></span><span id='footer_info'> Developed by <a href='https://mirnesglamocic.com' target='_blank'>Mirnes Glamočić</a></span>
                <span class='footer-social'>
                <a href='https://www.linkedin.com/in/mirnesglamocic/' target='_blank'>
                <i class='footer-icon fab fa-linkedin'></i></a>
                <a href='https://github.com/full-stack-web-developer-and-designer/' target='_blank'><i class='footer-icon fab fa-github'></i></a><a href='https://codepen.io/full-stack-web-developer-and-designer'  target='_blank'><i class='footer-icon fab fa-codepen'></i></a></span></small></p>";
            }
        }
        echo copyright(2023);
        ?>
    </footer><!-- end footer -->