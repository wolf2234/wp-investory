<?php get_header(); ?>
    <div class="row">

            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>


            <div class="col-lg-8">
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <div class="object-page-gallery">
                        <?php the_content(); ?>
                    </div>
                    <div class="object-page">
                        <div class="object-page-text">
                            <p><b>Lorem:</b><?php the_field('price_object'); ?></p>
                            <p><b>Lorem:</b><?php the_field('area'); ?></p>
                            <p><b>Lorem:</b><?php the_field('target'); ?></p>
                            <p><b>Lorem:</b><?php the_content(); ?></p>
                            <p>
                                <?php the_field('description'); ?>
                            </p>
                            <a href="#" class="btn btn-primary">Free consalting</a>
                        </div>
                    </div>
                </div>

            </div>
    </div>
<?php get_footer(); ?>

