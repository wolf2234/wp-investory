<?php
/*
Theme Name: Structure
*/
?>

<?php get_header(); ?>

    <div class="row">
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-lg-8">
            <div class="content">
                <?php the_title(); ?>
            <div class="organization">
                    <div class="row">
                        <?php
                            $pages = get_pages( [
                                'sort_order'   => 'ASC',
                                'sort_column'  => 'post_title',
                                'hierarchical' => 1,
                                'child_of'     => 15,
                                'parent'       => -1,
                                'post_type'    => 'page',
                                'post_status'  => 'publish',
                            ] );
                            foreach( $pages as $post ){
                                setup_postdata( $post );
                                ?>
                                    <div class="col-md-6">
                                        <div class="organization-card">

                                            <a href="#" class="organization-title">
                                                <?php the_title(); ?>
                                            </a>
                                            <small>
                                                OGRN <?php the_field('ogrn'); ?><br>
                                                INN <?php the_field('inn'); ?>
                                            </small>
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                <?php 
                            }
                                    wp_reset_postdata();
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>