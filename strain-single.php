<?php
/**
 * Template: strain-single.php
 */
get_header(5); ?>

<div id="content" class="single-contents">

  <!-- ★ 2カラムレイアウトのラッパ -->
  <div class="strain-layout">

    <!-- ===========================
         左：メインカラム（70%）
    ============================ -->
    <div class="strain-main">
      <section class="strain-hero">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <br clear="all">

        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if ( function_exists('bcn_display') ) { bcn_display(); } ?>
        </div>

        <?php
          // ACFフィールド取得
          $name = get_field('strain-name');
          $meta = get_field('strain-meta');
          $desc = get_field('strain-desc');
          $terp = get_field('strain-terp');
        ?>

        <div class="strain-hero-inner">

          <!-- 左：アイキャッチ -->
          <figure class="strain-hero-thumb">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>
          </figure>

          <!-- 右側：テキスト -->
          <div class="strain-hero-body">
            <p class="strain-hero-label">STRAIN PROFILE</p>

            <!-- ① 名前：ACFが空ならタイトルを表示 -->
            <h1 class="strain-hero-name">
              <?php echo $name ? esc_html($name) : get_the_title(); ?>
            </h1>

            <?php
            // シチュエーションタグ（slug が scene-〇〇 のタグだけ抽出）
            $scene_tags = array();
            $tags = get_the_tags();

            if ( $tags ) {
              foreach ( $tags as $tag ) {
                if ( strpos( $tag->slug, 'scene-' ) === 0 ) {
                  $scene_tags[] = $tag;
                }
              }
            }

            if ( ! empty( $scene_tags ) ) : ?>
              <ul class="strain-scene-list">
                <?php foreach ( $scene_tags as $tag ) : ?>
                  <li class="strain-scene-item">
                    <a href="<?php echo esc_url( get_tag_link( $tag ) ); ?>"
                       class="strain-scene-pill">
                      <?php echo esc_html( $tag->name ); ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <!-- ② メタ情報 -->
            <?php if ( $meta ) : ?>
              <p class="strain-hero-meta"><?php echo esc_html($meta); ?></p>
            <?php endif; ?>

            <!-- ③ 特徴説明 -->
            <?php if ( $desc ) : ?>
              <p class="strain-hero-desc"><?php echo nl2br(esc_html($desc)); ?></p>
            <?php endif; ?>

            <!-- ④ テルペン（名前だけ太字） -->
            <?php if ( $terp ) : ?>
              <?php
                $terp_name = '';
                $terp_desc = '';

                if (strpos($terp, '：') !== false) {
                  $parts = explode('：', $terp, 2);
                  $terp_name = trim($parts[0]);
                  $terp_desc = trim($parts[1]);
                } elseif (strpos($terp, ':') !== false) {
                  $parts = explode(':', $terp, 2);
                  $terp_name = trim($parts[0]);
                  $terp_desc = trim($parts[1]);
                } else {
                  $terp_name = $terp;
                }
              ?>

              <div class="strain-hero-terpenes">
                <span class="strain-terp-title">
                  主なテルペン（<a href="https://ganjabonsai.com/smoking-info/terpenes/">テルペンとは？</a>）
                </span>
                <p class="strain-terp-text">
                  <strong><?php echo esc_html( $terp_name ); ?></strong>
                  <?php if ( $terp_desc ) : ?>：<?php echo nl2br( esc_html( $terp_desc ) ); ?><?php endif; ?>
                </p>
              </div>
            <?php endif; ?>

            <?php
            // ACF：この品種を扱っているディスペンサリー
            $dispensary = get_field( 'cannabis-clinic' );
            if ( $dispensary ) :
              $shop_id    = $dispensary->ID;
              $shop_title = get_the_title( $shop_id );
              $shop_link  = get_permalink( $shop_id );
            ?>
              <section class="related-shop-box">
                <div class="related-shop-inner">
                  <div class="related-shop-text">
                    <p class="related-shop-label">この品種を実際に取り扱っている大麻薬局</p>
                    <h3 class="related-shop-name">
                      <a href="<?php echo esc_url( $shop_link ); ?>">
                        <?php echo esc_html( $shop_title ); ?>
                      </a>
                    </h3>
                    <a href="<?php echo esc_url( $shop_link ); ?>" class="related-shop-btn">
                      この大麻薬局を見る
                    </a>
                  </div>
                </div>
              </section>
            <?php endif; ?>

            <br clear="all">

          </div><!-- /.strain-hero-body -->
        </div><!-- /.strain-hero-inner -->


        <br clear="all">

<!-- ★ 関連記事（最大4件） -->
<?php
$current_id       = get_the_ID();
$related_post_ids = array();
$categories       = get_the_category();
$max_related      = 4;

if ( $categories ) {
  $cat_ids = wp_list_pluck( $categories, 'term_id' );
  $tag_ids = wp_get_post_tags( $current_id, array( 'fields' => 'ids' ) );

  $base_args = array(
    'post_type'      => 'post',
    'posts_per_page' => $max_related,
    'post__not_in'   => array( $current_id ),
    'category__in'   => $cat_ids,
    'orderby'        => 'date',
    'order'          => 'DESC',
  );

  // ① タグ優先
  if ( ! empty( $tag_ids ) ) {
    $tag_args              = $base_args;
    $tag_args['tag__in']   = $tag_ids;

    $tag_query = new WP_Query( $tag_args );
    if ( $tag_query->have_posts() ) {
      while ( $tag_query->have_posts() ) {
        $tag_query->the_post();
        $pid = get_the_ID();

        if ( $pid !== $current_id && ! in_array( $pid, $related_post_ids, true ) ) {
          $related_post_ids[] = $pid;
        }

        if ( count( $related_post_ids ) >= $max_related ) {
          break;
        }
      }
    }
    wp_reset_postdata();
  }

  // ② タグだけで足りなければカテゴリから補充
  if ( count( $related_post_ids ) < $max_related ) {
    $cat_query = new WP_Query( $base_args );
    if ( $cat_query->have_posts() ) {
      while ( $cat_query->have_posts() ) {
        $cat_query->the_post();
        $pid = get_the_ID();

        if ( $pid !== $current_id && ! in_array( $pid, $related_post_ids, true ) ) {
          $related_post_ids[] = $pid;
        }

        if ( count( $related_post_ids ) >= $max_related ) {
          break;
        }
      }
    }
    wp_reset_postdata();
  }
}
?>

<section class="related-one-section">
  <?php if ( ! empty( $related_post_ids ) ) : ?>
    <ul class="related-list">
      <?php foreach ( $related_post_ids as $related_post_id ) : ?>
        <?php
          $related_link  = get_permalink( $related_post_id );
          $related_title = get_the_title( $related_post_id );

          // タイトルを先頭12文字だけ表示（長い場合は…を付ける）
          $display_title = $related_title;
          if ( function_exists( 'mb_substr' ) ) {
            $short = mb_substr( $related_title, 0, 12, 'UTF-8' );
            if ( mb_strlen( $related_title, 'UTF-8' ) > 12 ) {
              $short .= '…';
            }
            $display_title = $short;
          }

          $thumb_url = get_the_post_thumbnail_url( $related_post_id, 'medium_large' );
          if ( ! $thumb_url ) {
            $thumb_url = get_template_directory_uri() . '/image/noimage.jpg';
          }
        ?>
        <li class="related-item">
          <a href="<?php echo esc_url( $related_link ); ?>" class="related-link">
            <figure class="related-thumb">
              <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $related_title ); ?>">
            </figure>
            <div class="related-meta">
              <p class="related-label">RELATED</p>
              <h3 class="related-title"><?php echo esc_html( $display_title ); ?></h3>
            </div>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php else : ?>
    <p class="related-one-none">関連する記事は見つかりませんでした。</p>
  <?php endif; ?>
</section>



      <?php endwhile; endif; ?>
    </div><!-- /.strain-main -->

 <!-- ===========================
       左：サイドバー（PCは常時表示 / スマホは開閉）
  ============================ -->
  <aside class="strain-sidebar">

    <!-- PC表示：常時表示（detailsを使わない） -->
    <div class="scene-pc">
      <h2 class="strain-side-title">シチュエーションで探す</h2>

      <div class="strain-tags-list">
        <a href="https://ganjabonsai.com/tag/scene-creative-time/" class="tag-card">
          <div class="tag-card-title">創作タイム</div>
          <div class="tag-card-desc">クリエイティブ脳が冴える</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-social-mode/" class="tag-card">
          <div class="tag-card-title">社交モード</div>
          <div class="tag-card-desc">人と話すのが楽しくなる</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-day-high/" class="tag-card">
          <div class="tag-card-title">昼ハイ</div>
          <div class="tag-card-desc">外出やアクティブなシーン向け</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-night-chill/" class="tag-card">
          <div class="tag-card-title">夜チル</div>
          <div class="tag-card-desc">落ち着いた静かな夜に最適</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-midnight-trip/" class="tag-card">
          <div class="tag-card-title">深夜のインナートリップ</div>
          <div class="tag-card-desc">感覚が鋭くなる系</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-movie-time/" class="tag-card">
          <div class="tag-card-title">映画タイム</div>
          <div class="tag-card-desc">感情移入が高まる</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-deep-sleep/" class="tag-card">
          <div class="tag-card-title">熟睡モード</div>
          <div class="tag-card-desc">睡眠の質を上げたい時</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-heart-detox/" class="tag-card">
          <div class="tag-card-title">心のデトックス</div>
          <div class="tag-card-desc">情緒を整えたい時</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-focus-work/" class="tag-card">
          <div class="tag-card-title">集中ワーク</div>
          <div class="tag-card-desc">タスクをこなしたい時</div>
        </a>
      </div>
    </div>

    <!-- スマホ表示：開閉（初期は閉） -->
    <details class="scene-accordion scene-sp">
      <summary class="scene-summary">シチュエーションで探す</summary>

      <div class="strain-tags-list">
        <a href="https://ganjabonsai.com/tag/scene-creative-time/" class="tag-card">
          <div class="tag-card-title">創作タイム</div>
          <div class="tag-card-desc">クリエイティブ脳が冴える</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-social-mode/" class="tag-card">
          <div class="tag-card-title">社交モード</div>
          <div class="tag-card-desc">人と話すのが楽しくなる</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-day-high/" class="tag-card">
          <div class="tag-card-title">昼ハイ</div>
          <div class="tag-card-desc">外出やアクティブなシーン向け</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-night-chill/" class="tag-card">
          <div class="tag-card-title">夜チル</div>
          <div class="tag-card-desc">落ち着いた静かな夜に最適</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-midnight-trip/" class="tag-card">
          <div class="tag-card-title">深夜のインナートリップ</div>
          <div class="tag-card-desc">感覚が鋭くなる系</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-movie-time/" class="tag-card">
          <div class="tag-card-title">映画タイム</div>
          <div class="tag-card-desc">感情移入が高まる</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-deep-sleep/" class="tag-card">
          <div class="tag-card-title">熟睡モード</div>
          <div class="tag-card-desc">睡眠の質を上げたい時</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-heart-detox/" class="tag-card">
          <div class="tag-card-title">心のデトックス</div>
          <div class="tag-card-desc">情緒を整えたい時</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-focus-work/" class="tag-card">
          <div class="tag-card-title">集中ワーク</div>
          <div class="tag-card-desc">タスクをこなしたい時</div>
        </a>
      </div>
    </details>

  </aside>
	
  </div><!-- /.strain-layout -->

</div><!-- /#content -->

<?php get_footer(3); ?>
