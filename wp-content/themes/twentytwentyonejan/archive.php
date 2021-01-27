<?php get_header(); ?>
    <div class="row m-0">
      <header>
        <?php the_archive_title('<h1>', '</h1>'); ?>
        <?php the_archive_description('<p>', '</p>') ?>
      </header>
    </div>

    <div class="row m-0">
      <div class="col-<?php echo is_active_sidebar('primary-sidebar') ? 10 : 12?> card-container">
        <?php get_template_part('loop', 'archive') ?>
        </div>
        <?php if(is_active_sidebar('primary-sidebar')) { ?>
          <div class="col-2">
                <?php get_sidebar(); ?>
          </div>
        <?php } ?>
      </div>
<?php get_footer(); ?>
