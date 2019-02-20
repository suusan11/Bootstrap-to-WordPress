<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>



<?php wp_footer(); ?>

<!--sign up section-->
<section id="signup" data-type="background" data-speed="4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Are you ready to take your coding skills to the <strong>next level</strong> ?</h2>
                <p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
            </div>
        </div>
    </div>
</section>

<!--footer-->
<footer>
    <div class="container">
        <div class="col-sm-3">
            <p><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Bootstarap to Wordpress"></a></p>
        </div>
        <div class="col-sm-6">
            <!--create navbar in Dashboard-->
            <?php
            wp_nav_menu( array(
                    'theme_location' => 'Footer',
                    'container' => 'nav',
                    'menu_class' => 'list-unstyled list-inline'
                )
            )
            ?>
        </div>
        <div class="col-sm-3">
            <p class="pull-right"><?php echo bloginfo('name'); ?>&copy; <?php echo date('Y'); ?><?php the_author_link(); ?></p>
        </div>
    </div>
</footer>

<!--modal-->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only"></span>
                </button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i>Subscribe to our mailing list.</h4>
            </div>
            <div class="modal-body">
                <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-name">Your first name</label>
                        <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">and your email</label>
                        <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                    </div>
                    <input type="submit" class="btn btn-danger" value="Subscribe!">
                </form>
                <hr>
                <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters.
                        <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
            </div>
        </div>
    </div>
</div>

<!--bootstrap core javascript-->
<script src="//ajax.googleapis.com/ajax/libs/jquery2.1.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>

<!--type kit-->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>//use.typekit.net/gla7wnd.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</body>
</html>
