<!-- /entry-related -->
<div class="entry-related">
  <div class="related-title">関連記事</div>

  <div class="related-items">
    <?php 
      $myposts = get_posts(
        array(
          'posts_per_page' => '8',
          'post__not_in' => array(get_the_ID()),
          'category__in' => wp_get_post_categories(get_the_ID()),
          'orderby' => 'rand'
        )
      );
    ?>
    <?php
      if($myposts):
        foreach ($myposts as $post):
          setup_postdata($post);
      ?>
      <a class="related-item" href="<?php the_permalink(); //記事のリンクを表示 ?>">
        <div class="related-item-img">
          <?php
            if (has_post_thumbnail() ) {
              // アイキャッチ画像が設定されてれば大サイズで表示
              the_post_thumbnail('large');
            } else {
              // なければnoimage画像をデフォルトで表示
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
            }
          ?>
        </div><!-- /related-item-img -->
        <div class="related-item-title"><?php the_title(); ?></div><!-- /related-item-title -->
      </a><!-- /related-item -->
    <?php 
      endforeach;
      wp_reset_postdata();
      endif;
    ?>
  </div><!-- /related-items -->
</div><!-- /entry-related -->
