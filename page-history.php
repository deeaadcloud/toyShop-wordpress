<?php
/*
Template Name: Наша история
*/
?>

<?php
 get_header();
?>
<div class="aboutus" id="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('history_title') ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title1') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_text1') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_img1') ?>" alt="мир детства">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_img2') ?>" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title2') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_text2') ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title3') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_text3') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_img3') ?>" alt="мир детства">
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>