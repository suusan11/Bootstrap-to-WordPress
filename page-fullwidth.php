<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-02-20
 * Time: 07:23
 * Template Name: Full-width Template
 */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

get_header();
?>

<?php if( has_post_thumbnail() ) { ?>
    <section class="feature-image feature-image-default" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
        <h1 class="page-title">Contact</h1>
    </section>
<?php } ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1 class="page-title">Contact</h1>
</section>

<!--main content-->
<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <section class="main-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>

