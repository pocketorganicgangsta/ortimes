<div class="must-list">

<?php
// タグ "must" の投稿をランダムに取得する
$args = array(
  'tag' => 'must', // スラッグ 'must' のタグ
  'posts_per_page' => 4, // 1ページに表示する投稿数
  'orderby' => 'rand', // ランダム表示
);
	
$query = new WP_Query( $args );

// 投稿が見つかったか確認
if ( $query->have_posts() ) : ?>
  <div class="most-popular-container">
    <div class="gbj-section-title">
  <p class="gbj-section-en">ORGANIC GANGSTA TIMES</p>
  <h2 class="gbj-section-ja">
    タイで初めて大麻を吸う人向け必読記事一覧
  </h2>
  <span class="gbj-section-line"></span>

</div>
	  
	  <br clear="all">
    <div class="most-popular-grid">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="popular-post">
          <!-- サムネイル画像 -->
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('large'); ?>
              </a>
            </div>
          <?php endif; ?>
          
          <!-- 投稿タイトル -->
          <h3 class="post-title">
            <a href="<?php the_permalink(); ?>">
  <?php 
    $title = get_the_title(); // 投稿のタイトルを取得
    if (mb_strlen($title) > 40) {
      echo mb_strimwidth($title, 0, 40, '...'); // 20文字を超える場合「...」を追加
    } else {
      echo $title; // 20文字以下の場合そのまま表示
    }
  ?>
</a>

          </h3>
        </div>
      <?php endwhile; ?>
    </div>

    <!-- 'もっと他の記事を見る' ボタン -->
  </div>

<?php else : ?>
  <p>該当する投稿がありません。</p>
<?php endif; 

// 投稿データをリセット
wp_reset_postdata();
?>


</div>



<br clear="all">

