<?php

function _twenetytwentyonejan_add_meta_box(){
    add_meta_box(
        '_twenetytwentyonejan_post_meta_box', 
        'Discount', 
        '_twenetytwentyonejan_post_metabox_html',
        'post', 
        'normal', 
        'default');
}

add_action('add_meta_boxes', '_twenetytwentyonejan_add_meta_box');

function _twenetytwentyonejan_post_metabox_html($post){
    $post_discount = get_post_meta($post->ID, '__twenetytwentyonejan_post_discount', true);
    $post_price = get_post_meta($post->ID, '__twenetytwentyonejan_post_price', true);
    wp_nonce_field('_twenetytwentyonejan_update_post_metabox', '_twenetytwentyonejan_update_post_once ');

    
    // wp_nonce_field('_twenetytwentyonejan_update_post_metabox', '_twenetytwentyonejan_update_post_once ');

    ?>
        <p>
            <label for=""><?php esc_html_e('Post Discount', '_themename-_metaboxes'); ?></label>
            <br />
            <input type="text" name="_twenetytwentyonejan_post_discount_field" 
            id="_twenetytwentyonejan_post_discount_field" 
            value="<?php echo esc_attr($post_discount);?>"/>
        </p>
        <p>
            <label for=""><?php esc_html_e('Price', '_themename-_metaboxes'); ?></label>
            <br />
            <input type="text" name="_twenetytwentyonejan_post_price_field" 
            id="_twenetytwentyonejan_post_price_field" 
            value="<?php echo esc_attr($post_price);?>"/>
        </p>
    <?php
}

function _twenetytwentyonejan_save_post_metabox($post_id, $post ){
    // $edit_cap = get_post_type_object($post->post_type)->cap->edit_post;
    // if(current_user_can($edit_cap, $post_id)){
    //     return;
    // }

    // if(!isset( $_POST['_twenetytwentyonejan_update_post_once']) || !wp_verify_nonce($_POST
    // ['_twenetytwentyonejan_update_post_once'],'_twenetytwentyonejan_update_post_metabox')){
    //     return;
    // }

    if(array_key_exists('_twenetytwentyonejan_post_discount_field', $_POST)){
        update_post_meta($post_id, '__twenetytwentyonejan_post_discount', 
        sanitize_text_field($_POST['_twenetytwentyonejan_post_discount_field']));
    }

    if(array_key_exists('_twenetytwentyonejan_post_price_field', $_POST)){
        update_post_meta($post_id, '__twenetytwentyonejan_post_price', 
        sanitize_text_field($_POST['_twenetytwentyonejan_post_price_field']));
    }
}

add_action('save_post', '_twenetytwentyonejan_save_post_metabox', 10, 2);


//footer coolumns
/*
function _themename_footer_meta(){
    add_meta_box('_themename_footer_meta_box', 'Footer Columns', '_themename_footer_metabox_html', 'post', 'normal', 'default');
}

add_action('add_meta_boxes', '_themename_footer_meta');

function _themename_footer_metabox_html($post){
    $grid = get_post_meta($post->ID, '__themename_footer_grid', true);
    wp_nonce_field('_themename_update_post_metabox', '_themename_update_post_once ');

    ?>
        <p>
            <label for=""><?php esc_html_e('Footer Grid', '_themename'); ?></label>
            <br />
            <input type="text" name="_themename_footer_grid_field"
            placeholder="3,3,3" 
            id="_themename_footer_grid_field" 
            value="<?php echo esc_attr($grid);?>"/>
        </p>
    <?php
}

function _themename_save_post_metabox($post_id, $post ){

    if(array_key_exists('_themename_footer_grid_field', $_POST)){
        update_post_meta($post_id, '__themename_footer_grid', 
        sanitize_text_field($_POST['_themename_footer_grid_field']));
    }

}

add_action('save_post', '_themename_save_post_metabox', 10, 2);
*/