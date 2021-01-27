<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
</head>
<body>
    <div class="bg-dark mb-4">
        <div class="container">
            <div class="d-flex pt-4">
                <a class="navbar-brand h-link" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html(bloginfo('name')); ?></a>            
                
                <div class="form-inline ml-auto my-2 my-lg-0">
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                    <?php get_search_form(true); ?>
                </div>                
            </div>            
            
            <nav class="navbar-expand-lg navbar-dark bg-dark pb-1" role="navigation" arial-label="<?php esc_html_e('Main Navigation', '_themename')?>">
                <?php wp_nav_menu(array('theme_location' => 'main-menu')) ?>
            </nav>
        </div>
    </div>

    <div id="content" class="container p-0">
