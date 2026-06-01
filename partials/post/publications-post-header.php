<?php
$pdf_url        =  get_post_meta( $post->ID, 'pdf_link', true );
$thumbnail_id   = get_post_thumbnail_id( $post->ID );
$thumbnail_url  = wp_get_attachment_image_src( $thumbnail_id, 'full' );
?>
<div class="single-post-header publications-post-header">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h1 class="post-title"><?php the_title();?></h1>
        <div class="post-meta">
          <p><?php echo do_shortcode("[treads_post_authors]"); ?></p>
          <p><?php the_time( 'jS F Y' ); ?></p>
        </div>
        <?php if( $pdf_url ): ?>
          <a href="<?php _e( $pdf_url ); ?>" class="btn-tread-download" download>
            Download PDF
            <i class="fa fa-arrow-down" aria-hidden="true"></i>
          </a>
        <?php endif; ?>
      </div>
      <div class="col-sm-4">
        <?php
          if( !empty( $thumbnail_url ) ): $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
          if( !$thumbnail_alt ){ $thumbnail_alt = get_the_title( $thumbnail_id ); }
        ?>
          <img src="<?php _e( $thumbnail_url[0] ); ?>" alt="<?php _e( $thumbnail_alt ); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="bg-wave" style="background-image: url(<?php _e(TREADS_THEME_URI.'/assets/images/bg-publication-wave.svg');?>);"></div>
