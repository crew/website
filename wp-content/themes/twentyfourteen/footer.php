<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


<!-- / meat -->
</div>


<!-- Footer Container -->
<div class = "footer_container">
    <!-- Footer -->
    <div class = "footer">
        <div style = "float:left">
            <!-- Northeastern Logo -->
            <a href = "http://www.ccs.neu.edu" id = "northeastern_logo"></a>
            <p class = "footer">
                CREW &copy; . All Rights Reserved.
            </p>
        </div>
        <!-- Buttons -->
        <div id = "footer_buttons">
            <?php get_sidebar( 'footer' ); ?>

<!--            <ul class = "main_nav">-->
<!--                <li class = "main_nav" style = "width:40px">-->
<!--                    <a href = "https://www.facebook.com/groups/crew.ccis/">-->
<!--                        <img class="social" src = "assets/icons/facebook.png" style = "box-shadow:none"></img>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class = "main_nav" style = "width:40px">-->
<!--                    <a href = "https://github.com/crew">-->
<!--                        <img class="social" src = "assets/icons/github.png" style = "box-shadow:none"></img>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class = "main_nav" style = "width:40px">-->
<!--                    <a href = "https://wiki.ccs.neu.edu/display/Crew/Home">-->
<!--                        <img class="social" src = "assets/icons/wiki.png" style = "box-shadow:none"></img>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
        </div>
        <!-- / footer -->
    </div>
    <!-- / footer container -->
</div>
<!-- / container -->
</div>
<?php wp_footer(); ?>
</body>
</html>