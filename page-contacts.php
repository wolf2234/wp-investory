<?php
/*
Theme Name: Contacts
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
                <div class="contacts">
                    <p class="contacts-phone">
                        <img class="contacts-img" src="<?php bloginfo('template_directory'); ?>/assets/img/phone.png" alt="Phone">
                        <?php the_field('number_phone', 19); ?>
                    </p>
                    <p class="contacts-email">
                        <img class="contacts-img" src="<?php bloginfo('template_directory'); ?>/assets/img/email.png" alt="Email">
                        <?php the_field('email_field', 19); ?>
                    </p>
                    <a href="#" class="contacts-address"><?php the_field('address_1', 19); ?></a>
                    <a href="#" class="contacts-address"><?php the_field('address_2', 19); ?></a>
                    <a href="#" class="btn btn-primary contacts-btn">Ask question</a>
                </div>
                <div class="contacts-social-links">
                    <ul>
                        <li><a href="<?php the_field('instagram', 19); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/instagram.png" alt="instagramm"></a></li>
                        <li><a href="<?php the_field('facebook', 19); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/pngegg.png" alt="twitter"></a></li>
                        <li><a href="<?php the_field('telegram', 19); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/telegram.png" alt="telegram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>