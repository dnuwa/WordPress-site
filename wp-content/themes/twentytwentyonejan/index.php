<?php get_header(); ?>

    <div class="row">
      <div class="col-<?php echo is_active_sidebar('primary-sidebar') ? 8 : 12?> card-container p-0">
          <?php get_template_part('loop', 'index') ?>
        </div>
        <?php if(is_active_sidebar('primary-sidebar')) { ?>
          <div class="col-4">
                <?php get_sidebar(); ?>
          </div>
        <?php } ?>
      </div>
<?php get_footer(); ?>
