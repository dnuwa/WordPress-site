<div class="card">
    <!-- <div class="card-header">-15%</div> -->
    <div class="card-header">
    -
    <?php echo intval(esc_attr(get_post_meta(get_the_ID(), '__twenetytwentyonejan_post_discount', true)))?>
    %
    </div>
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="img-wrapper">
    
        <?php the_post_thumbnail(); ?>
    </div>
    <?php } else {?>
        <div class="img-wrapper">                
        <img src="<?php echo get_template_directory_uri() . '/dist/assets/images/placeholder.jpg'; ?>" />
        </div>                
    <?php } ?>

    <!-- modal button -->
    <button class="card-text" data-toggle="modal" data-target="#postModal-<? the_ID(); ?>"><?php the_title_attribute(); ?>
    <div class="post-content"><?php the_excerpt() ?></div>
    </button>

    <div class="modal fade" id="postModal-<? the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="postModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><?php the_title_attribute(); ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?php the_excerpt() ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
            
    <div class="card-footer">
    <div class="cost">LKR <?php echo intval(esc_attr(get_post_meta(get_the_ID(),
        '__twenetytwentyonejan_post_price', true))) - (intval(esc_attr(get_post_meta(get_the_ID(), 
        '__twenetytwentyonejan_post_price', true))) * (intval(esc_attr(get_post_meta(get_the_ID(), 
        '__twenetytwentyonejan_post_discount', true)))/100))?></div>
        
    <div class="discounted">LKR <?php echo intval(esc_attr(get_post_meta(get_the_ID(), 
    '__twenetytwentyonejan_post_price', true)))?></div>
    </div>
</div>