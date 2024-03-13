<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Inventory</title>
    <?php wp_head(); ?>
</head>
<body>


<div class="container">
    <h1>Hello world!</h1>
    <div class="top-nav">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-auto col-lg-2">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
            <div class="col-lg-auto col-lg-10">
                <button class="top-nav-btn">
                    <i class="icon-menu"></i>
                </button>

                <?php wp_nav_menu(
                    array(
                    'menu'         => 'top_menu',
                    'container'       => 'ul',
                    'container_class' => 'top-nav-menu',
                    'container_id'    => '',
                    'menu_class'      => 'top-nav-menu',
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
            </div> 
            <div class="col-md"></div>
        </div>
    </div>