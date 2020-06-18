<?php get_header(); ?>

	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

        <?php if ( function_exists( 'bcn_display' ) ) : ?>
          <!-- breadcrumb -->
          <div class="breadcrumb">
            <?php bcn_display(); ?> 
          </div><!-- /breadcrumb -->
        <?php endif; ?>

        <?php
        if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
        ?>

          <!-- entry -->
          <article <?php post_class( array( 'entry' ) ); ?>>

            <!-- entry-header -->
            <div class="entry-header">
              <?php
                // カテゴリー１つ目の名前を表示
                $category = get_the_category();
                if ( $category[0] ) : ?>
                  <div class="entry-label"><a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>"><?php echo $category[0]->cat_name; ?></a></div><!-- /entry-item-tag -->
              <?php endif; ?>
              <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

              <div class="entry-label"><a href="<?php the_permalink(); //記事のリンクを表示 ?>">カテゴリ名</a></div><!-- /entry-item-tag -->
              <h1 class="entry-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h1><!-- /entry-title -->

              <!-- entry-meta -->
              <div class="entry-meta">
                <time class="entry-published" datetime="2019-01-01">公開日 2019/1/1</time>
                <time class="entry-updated" datetime="2019-04-01">最終更新日 2019/4/1</time>
              </div><!-- /entry-meta -->

              <!-- entry-img -->
              <div class="entry-img">
                <img src="img/entry1.png" alt="">
              </div><!-- /entry-img -->

            </div><!-- /entry-header -->

            <!-- entry-body -->
            <div class="entry-body">
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>

              <div id="toc_container">
                <p class="toc_title">この記事のコンテンツ</p>
                <ul class="toc_list">
                  <li><a href="#i">見出しが入ります</a>
                    <ul>
                      <li><a href="#">見出しが入ります</a></li>
                      <li><a href="#">見出しが入ります</a></li>
                    </ul>
                  </li>
                  <li><a href="#i">見出しが入ります</a>
                    <ul>
                      <li><a href="#">見出しが入ります</a></li>
                      <li><a href="#">見出しが入ります</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

              <h2>見出しが入ります</h2>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<a
                  href="#">テキストリンクテキストリンク</a>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <h3>見出しが入ります</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<a
                  href="#">テキストリンクテキストリンク</a>テキストテキストテキストテキストテキスト<strong>テキストボールドテキストボールド</strong>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <h4>見出しが入ります</h4>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<a
                  href="#">テキストリンクテキストリンク</a>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <h4>見出しが入ります</h4>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<a
                  href="#">テキストリンクテキストリンク</a>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <div class="entry-btn"><a class="btn" href="">テキストテキスト</a></div><!-- /entry-btn -->

            </div><!-- /entry-body -->


            <div class="entry-tag-items">
              <div class="entry-tag-head">タグ</div><!-- /entry-tag-head -->
              <div class="entry-tag-item"><a href="">WordPress</a></div><!-- /entry-tag-item -->
              <div class="entry-tag-item"><a href="">コーディング</a></div><!-- /entry-tag-item -->
              <div class="entry-tag-item"><a href="">フリーランス</a></div><!-- /entry-tag-item -->
            </div><!-- /entry-tag-items -->


            <div class="entry-related">
              <div class="related-title">関連記事</div>

              <div class="related-items">

                <a class="related-item" href="">
                  <div class="related-item-img"><img src="img/entry1.png" alt=""></div><!-- /related-item-img -->
                  <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
                </a><!-- /related-item -->

                <a class="related-item" href="">
                  <div class="related-item-img"><img src="img/entry1.png" alt=""></div><!-- /related-item-img -->
                  <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
                </a><!-- /related-item -->

                <a class="related-item" href="">
                  <div class="related-item-img"><img src="img/entry1.png" alt=""></div><!-- /related-item-img -->
                  <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
                </a><!-- /related-item -->

                <a class="related-item" href="">
                  <div class="related-item-img"><img src="img/entry1.png" alt=""></div><!-- /related-item-img -->
                  <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
                </a><!-- /related-item -->

                <a class="related-item" href="">
                  <div class="related-item-img"><img src="img/entry1.png" alt=""></div><!-- /related-item-img -->
                  <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
                </a><!-- /related-item -->

                <a class="related-item" href="">
                  <div class="related-item-img"><img src="img/entry1.png" alt=""></div><!-- /related-item-img -->
                  <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
                </a><!-- /related-item -->

                <a class="related-item" href="">
                  <div class="related-item-img"><img src="img/entry1.png" alt=""></div><!-- /related-item-img -->
                  <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
                </a><!-- /related-item -->

                <a class="related-item" href="">
                  <div class="related-item-img"><img src="img/entry1.png" alt=""></div><!-- /related-item-img -->
                  <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
                </a><!-- /related-item -->

              </div><!-- /related-items -->
            </div><!-- /entry-related -->

          </article> <!-- /entry -->
          
        <?php
          endwhile;
          endif;
        ?>

			</main><!-- /primary -->

      <?php get_sidebar(); ?>

		</div><!-- /inner -->
	</div><!-- /content -->

  <?php get_footer(); ?>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/sns.js"></script>

</body>

</html>