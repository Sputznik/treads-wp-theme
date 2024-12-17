<?php
$thumbnail      = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
$background_img = !empty( $thumbnail ) ? 'style="background-image:url('.$thumbnail.');"' : "";
?>
<div class="single-post-header def-post-header">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h1 class="post-title"><?php the_title();?></h1>
        <div class="post-meta">
          <p><?php the_time( 'jS F Y' ); ?></p>
          <p class="post-categories"><?php the_category(', '); ?></p>
        </div>
      </div>
      <div class="col-sm-4">
        <?php if( $background_img ): ?>
        <div class="orbit-thumbnail-bg" <?php _e( $background_img ); ?>></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="bg-wave" style="background-image: url(<?php _e(TREADS_THEME_URI.'/assets/images/bg-def-wave.svg');?>);"></div>
