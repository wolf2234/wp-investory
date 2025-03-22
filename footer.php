<div class="directions">
    <h2>Area Of Activity</h2>
    <div class="direction-blocks">
        <?php
            $pages = get_pages( [
                'hierarchical' => 1,
                'child_of'     => 59,
                'parent'       => -1,
                'post_type'    => 'page',
                'post_status'  => 'publish',
            ] );
            
            foreach( $pages as $post ){
                setup_postdata( $post );
                ?>
                <div class="directions-block">
                    <h3><?php the_title(); ?></h3>
                    <?php the_post_thumbnail('directions-preview', ''); ?>
                </div>
                <?php
            }
            wp_reset_postdata();
        ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="copy">
                    <p>Copyright @ 2014-<?php echo date('Y'); ?></p>
                    <a href="#" class="footer-policy-link">Privacy Policy</a>
                    <small>
                    <?php echo the_field('law_text', 19); ?>
                    </small>
                </div>
            </div>
            <!-- /.col-md -->
    
            <div class="col-lg-2 col-6">
            <?php wp_nav_menu(
                    array(
                    'menu'            => 'top_menu',
                    'container'       => 'ul',
                    'container_class' => 'footer-menu',
                    'container_id'    => '',
                    'menu_class'      => 'footer-menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                    )
                ); ?>
                <div class="col-lg col-6">
                    <ul class="footer-menu">
                        <?php $args = [
                                'orderby'            => 'name',
                                'order'              => 'ASC',
                                'style'              => 'list',
                                'show_count'         => 0,
                                'hide_empty'         => 0,
                                'use_desc_for_title' => 1,
                                'child_of'           => 0,
                                'feed'               => '',
                                'feed_type'          => '',
                                'feed_image'         => '',
                                'exclude'            => '1',
                                'exclude_tree'       => '',
                                'include'            => '',
                                'hierarchical'       => true,
                                'title_li'           => NULL,
                                'number'             => NULL,
                                'echo'               => 1,
                                'depth'              => 0,
                                'current_category'   => 0,
                                'pad_counts'         => 0,
                                'taxonomy'           => 'category',
                                'walker'             => 'Walker_Category',
                                'hide_title_if_empty' => false,
                                'separator'          => '<br />',
                                ];
                        wp_list_categories( $args ); ?>
                    </ul>
                </div>
            </div>
            <!-- /.col-md -->
    
            <div class="col-lg-4">
                <ul class="footer-menu">
                    <li><a href="#">Land</a></li>
                    <li><a href="#">Residential real estate</a></li>
                    <li><a href="#">Commercial real estate</a></li>
                    <li><a href="#">New buildings</a></li>
                    <li><a href="#">Dova/Cottages</a></li>
                    <li><a href="#">Construction</a></li>
                    <li><a href="#">Rent</a></li>
                </ul>
            </div>
            <!-- /.col-md -->
    
            <div class="col-lg">
                <div class="footer-contacts">
                    <p class="footer-contacts-phone">
                        <?php echo the_field('number_phone', 19); ?>
                    </p>
                    <p class="footer-contacts-address">
                        <?php echo the_field('address_1', 19); ?>
                    </p>
                    <p class="footer-contacts-address">
                        <?php echo the_field('address_2', 19); ?>
                    </p>
                    <p class="footer-contacts-email">
                        <?php echo the_field('email_field', 19); ?>
                    </p>
                </div>
                <div class="footer-social-links">
                    <ul>
                        <li><a href="<?php the_field('telegram', 19); ?>"><img src="img/instagram.png" alt="instagramm"></a></li>
                        <li><a href="<?php the_field('facebook', 19); ?>"><img src="img/pngegg.png" alt="twitter"></a></li>
                        <li><a href="<?php the_field('instagram', 19); ?>"><img src="img/telegram.png" alt="telegram"></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.col-md -->

        </div>
    </div>
    <!-- /.conteainer -->
</footer>

<div class="modal">
    <div class="modal-content">
        <div class="close">&times;</div>
        <h4>Full field</h4>
        <p>At vero eos et accusamus et iusto.</p>
        <div class="modal-form">
            <!-- <?php echo do_shortcode('[contact-form-7 id="114" title="Contact form 1"]'); ?> -->
            <form action="">
                <input type="text" placeholder="Your name">
                <input type="text" placeholder="Your phone">
                <button type="submit" class="btn btn-primary modal-form-btn">Send</button>
                <small>
                    Lorem ipsum dolor sit amet consectetur
                    <a href="#">adipisicing</a> elit. Illum, et.
                </small>
            </form>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
