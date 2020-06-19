<div id="pickup">
  <div class="inner">

    <div class="pickup-items">
      <?php 
        $pickupPosts = get_posts(
          array(
            'post_type' => 'post',
            'posts_per_page' => '3',
            'post__not_in' => array(get_the_ID()),
            'tag' => 'pickup',
            'order' => 'DESC',
            'orderby' => 'date'
          )
        );
      ?>
      <?php foreach ( $pickupPosts as $post ) : ?>

        <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" class="pickup-item">
          <div class="pickup-item-img">
            <?php
              if ( has_post_thumbnail( $post->ID ) ) {
                echo get_the_post_thumbnail( $post->ID, 'large' );
              } else {
                echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
              }
            ?>
            <div class="pickup-item-tag"><?php my_the_post_category( false, $post->ID ); ?></div><!-- /pickup-item-tag -->
          </div><!-- /pickup-item-img -->
          <div class="pickup-item-body">
            <h2 class="pickup-item-title"><?php echo esc_html( get_the_title( $post->ID ) ); ?></h2><!-- /pickup-item-title -->
          </div><!-- /pickup-item-body -->
        </a><!-- /pickup-item -->
      <?php endforeach; ?>

    </div><!-- /pickup-items -->

  </div><!-- /inner -->
</div><!-- /pickup -->