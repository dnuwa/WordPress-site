<?php

function _themename_add_meta_box(){
    add_meta_box('_themename_post_meta_box', 'Discount', '_themename_post_metabox_html', 'post', 'normal', 'default');
}

add_action('add_meta_boxes', '_themename_add_meta_box');

function _themename_post_metabox_html($post){
    $post_discount = get_post_meta($post->ID, '__themename_post_discount', true);
    $post_price = get_post_meta($post->ID, '__themename_post_price', true);
    wp_nonce_field('_themename_update_post_metabox', '_themename_update_post_once ');

    
    // wp_nonce_field('_themename_update_post_metabox', '_themename_update_post_once ');

    ?>
        <p>
            <label for=""><?php esc_html_e('Post Discount', '_themename'); ?></label>
            <br />
            <input type="text" name="_themename_post_discount_field" 
            id="_themename_post_discount_field" 
            value="<?php echo esc_attr($post_discount);?>"/>
        </p>
        <p>
            <label for=""><?php esc_html_e('Price', '_themename'); ?></label>
            <br />
            <input type="text" name="_themename_post_price_field" 
            id="_themename_post_price_field" 
            value="<?php echo esc_attr($post_price);?>"/>
        </p>
    <?php
}

function _themename_save_post_metabox($post_id, $post ){
    // $edit_cap = get_post_type_object($post->post_type)->cap->edit_post;
    // if(current_user_can($edit_cap, $post_id)){
    //     return;
    // }

    // if(!isset( $_POST['_themename_update_post_once']) || !wp_verify_nonce($_POST
    // ['_themename_update_post_once'],'_themename_update_post_metabox')){
    //     return;
    // }

    if(array_key_exists('_themename_post_discount_field', $_POST)){
        update_post_meta($post_id, '__themename_post_discount', 
        sanitize_text_field($_POST['_themename_post_discount_field']));
    }

    if(array_key_exists('_themename_post_price_field', $_POST)){
        update_post_meta($post_id, '__themename_post_price', 
        sanitize_text_field($_POST['_themename_post_price_field']));
    }
}

add_action('save_post', '_themename_save_post_metabox', 10, 2);