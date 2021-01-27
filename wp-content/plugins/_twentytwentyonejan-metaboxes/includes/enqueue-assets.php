<?php

    function _themename__metaboxes_assets(){

			global $pagenow;
			if($pagenow !== 'post.php') return;

      wp_enqueue_script( '_themename-metaboxes-scripts', plugins_url(
          '_themename-metaboxes/dist/assets/js/bundle.js'), array(), '1.0.0', true);
      
      wp_enqueue_style( '_themename-metaboxes-stylesheet', plugins_url(
          '_themename-metaboxes/dist/assets/css/bundle.css'), array(), '1.0.0', 'all');

    }

add_action('admin_enqueue_scripts', '_themename__metaboxes_assets');
