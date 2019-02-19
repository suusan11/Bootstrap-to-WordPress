<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-02-19
 * Time: 14:42
 */
?>

<?php
    $video_featurette_title = get_field('video_featurette_title');
    $video_featurette_body = get_field('video_featurette_body');
?>

<!--video featurette-->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $video_featurette_title; ?></h2>
                <iframe width="100%" height="415" src="<?php echo $video_featurette_body; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>