<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-02-19
 * Time: 14:15
 */
?>

<!--opt in section-->
<section id="optin">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <p class="lead"><?php the_field('optin_text')?></p>
            </div>
            <div class="col-sm-4">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php the_field('optin_button_text')?></button>
            </div>
        </div>
    </div>
</section>
