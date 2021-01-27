<?php 

  function _themename_sidebar_widgets(){
    register_sidebar(array(
      'id' => 'primary-sidebar',
      'name' => esc_html__('Primary Sidbar', '_themename'),
      'description' => esc_html__('this sidebar appears in the blog posts page.', '_themename'),
      'before_widget' => '<section id="%1$s" class="%2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h5>',
      'after_title' => '</h5>'
    ));
  }

  // echo esc_attr(get_post_meta(get_the_ID(),'__themename_footer_grid', true));

  $footer_layout = sanitize_text_field(get_theme_mod('_themename_footer_layout', '3,3,3,3'));
  $footer_layout = preg_replace('/\s+/', '', $footer_layout);
  $columns = explode(',', $footer_layout);
  $footer_bg = _themename_sanitize_footer_bg(get_theme_mod('_themename_footer_bg', 'dark'));
  $widget_theme = '';

  if($footer_bg == 'light'){
    $widget_theme = 'footer-widget-light';
  } else {
    $widget_theme = 'footer-widget-dark';
  }

  foreach($columns as $i => $column){
    register_sidebar(array(

    'id' => 'footer-sidebar-' . ($i + 1),
    'name' => sprintf(esc_html__('Footer Widgets Column %s', '_themename'), $i + 1),
    'description' => esc_html__('Footer Widgets.', '_themename'),
    'before_widget' => '<section id="%1$s" class="footer-widget'.$widget_theme.'%2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h5>',
    'after_title' => '</h5>'

    ));
  }

add_action('widgets_init', '_themename_sidebar_widgets');