<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-02-19
 * Time: 14:08
 */
?>

<!--hero-->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">

                <div class="col-sm-5">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
                </div>

                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name')?></h1>
<p class="lead"><?php bloginfo('description')?></p>

<div id="price-timeline">
    <div class="price active">
        <h4>Pre-Launch Price <small>End soon!</small></h4>
        <span><?php the_field('prelaunch_price')?></span>
    </div>
    <div class="price">
        <h4>Launch Price <small>Coming soon!</small></h4>
        <span><?php the_field('launch_price')?></span>
    </div>
    <div class="price">
        <h4>Final Price <small>Coming soon!</small></h4>
        <span><?php the_field('final_price')?></span>
    </div>
    </divćc
    <p><a class="btn btn-lg btn-danger" href="<?php the_field('course_url')?>" role="button"><?php the_field('button_text')?></a></p>
</div>

</div>
</div>
</article>
</section>