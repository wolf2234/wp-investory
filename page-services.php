<?php
/*
Theme Name: Our services
*/
?>

<?php get_header(); ?>
    <div class="row">

            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>


            <div class="col-lg-8">
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>

            </div>
    </div>
<?php get_footer(); ?>

