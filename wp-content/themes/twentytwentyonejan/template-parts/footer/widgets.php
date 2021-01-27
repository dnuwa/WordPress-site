<?php
    // $footer_layout = '6,6';
    $footer_layout = sanitize_text_field(get_theme_mod('_themename_footer_layout', '3,3,3,3'));
  $footer_layout = preg_replace('/\s+/', '', $footer_layout);
    $columns = explode(',', $footer_layout);
    // $footer_bg = 'dark';
    $footer_bg = _themename_sanitize_footer_bg(get_theme_mod('_themename_footer_bg', 'dark'));
?>

<div>
    <div class="d-flex footer-bg-<?php echo $footer_bg; ?> mt-3">
        <?php foreach($columns as $i => $column){ ?>
            <div class="col-<?php echo $column?> text-center text-light pt-4">
                <?php if(is_active_sidebar('footer-sidebar-'.($i +1))) { 
                    dynamic_sidebar('footer-sidebar-'.($i +1 ));
                }?>
            </div>
        <?php } ?>
    </div>
</div>
