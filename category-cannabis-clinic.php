<?php
/*
Template Name: トップページ（home）
*/
get_header(11);
?>

<br clear="all">

<main>

  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
  </div>
  <br clear="all">

  <!-- ===== Section 1 : タイのオススメ（※ここは今は固定カードのまま） ===== -->
  <section class="ogx-latestRail" data-ogx-latest-rail aria-label="タイのオススメの大麻薬局">
    <div class="ogx-latestRail__head">
      <div class="ogx-latestRail__headText">
        <p class="ogx-latestRail__label">TEAM ORGANIC GANGSTA</p>
        <h2 class="ogx-latestRail__title">タイのオススメの大麻薬局</h2>
        <span class="ogx-latestRail__underline" aria-hidden="true"></span>
      </div>
    </div>

    <div class="ogx-latestRail__wrap">
      <div class="ogx-latestRail__viewport" tabindex="0">
        <div class="ogx-latestRail__track">

          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/greenhouse-6.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">バンコク/サムイ島</button>
              <h3 class="ogx-latestCard__headline">世界的に評価される大麻ブランド”Green House”の背景と思想</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/tag/green-house/">まとめを見る<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>
			
          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/siamgreen.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">バンコク/サムイ島</button>
              <h3 class="ogx-latestCard__headline">「嗜好」ではなく「医療」として大麻を必要としてる人向けの大麻薬局</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/tag/siam-green-cannabis-co/">記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>

          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/Tropical-Thunder-2.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">パタヤ(ジョムティエン）</button>
              <h3 class="ogx-latestCard__headline">15年以上の栽培経験を持つ彼らが育てる大麻は抜群の職人の味</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/tag/tropical-thunder/">まとめを見る<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>


        </div>
      </div>

      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--right" type="button" aria-label="次へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">›</span>
      </button>
      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--left" type="button" aria-label="前へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">‹</span>
      </button>

      <div class="ogx-latestRail__fade ogx-latestRail__fade--right" aria-hidden="true"></div>
      <div class="ogx-latestRail__fade ogx-latestRail__fade--left" aria-hidden="true"></div>
    </div>
  </section>

  <!-- ===== 新着一覧：cannabis-clinic（除外ID: 580, 2511） ===== -->
  <?php
  $args_new = [
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'category_name'  => 'cannabis-clinic',
    'post__not_in'   => [580, 2511],
    'no_found_rows'  => true,
  ];
  $q_new = new WP_Query($args_new);
  ?>

  <section class="ogx-newlist3" aria-label="新着一覧">
    <div class="ogx-latestRail__head">
      <div class="ogx-latestRail__headText">
        <p class="ogx-latestRail__label">TEAM ORGANIC GANGSTA</p>
        <h2 class="ogx-latestRail__title">新着大麻薬局一覧</h2>
        <span class="ogx-latestRail__underline" aria-hidden="true"></span>
      </div>
    </div>

    <ul class="ogx-newlist3__list">
      <?php if ($q_new->have_posts()) : ?>
        <?php while ($q_new->have_posts()) : $q_new->the_post(); ?>
          <?php
            $shop_copy = get_post_meta(get_the_ID(), 'shop-copy', true);
            if (!$shop_copy) $shop_copy = get_the_title();
          ?>
          <li class="ogx-newlist3__item">
            <a class="ogx-newlist3__link" href="<?php the_permalink(); ?>">
              <div class="ogx-newlist3__left">
                <h3 class="ogx-newlist3__title"><?php echo esc_html($shop_copy); ?></h3>

                <div class="ogx-newlist3__tags">
                  <?php
                    $tags = get_the_tags();
                    if (!empty($tags)) {
                      $shown = 0;
                      foreach ($tags as $t) {
                        if ($shown >= 2) break;
                        echo '<span class="ogx-newlist3__tag">' . esc_html($t->name) . '</span>';
                        $shown++;
                      }
                    }
                  ?>
                </div>
              </div>

              <div class="ogx-newlist3__right" aria-hidden="true">
                <span class="ogx-newlist3__chev">›</span>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </ul>
  </section>


	
	
  <!-- ===== Section 2 : バンコク（タグ bangkok / 5件ランダム / 除外ID 141,2511） ===== -->
  <section class="ogx-latestRail" data-ogx-latest-rail aria-label="バンコクのオススメの大麻薬局">
    <div class="ogx-latestRail__head">
      <div class="ogx-latestRail__headText">
        <p class="ogx-latestRail__label">TEAM ORGANIC GANGSTA</p>
        <h2 class="ogx-latestRail__title">バンコクのオススメの大麻薬局</h2>
        <span class="ogx-latestRail__underline" aria-hidden="true"></span>
      </div>

      <a class="ogx-latestRail__more" href="/tag/bangkok">
        すべて見る <span aria-hidden="true">›</span>
      </a>
    </div>

    <?php
    $args_bkk = [
      'post_type'      => 'post',
      'posts_per_page' => 5,
      'post_status'    => 'publish',
      'tag'            => 'bangkok',
      'post__not_in'   => [2511,1877],
      'orderby'        => 'rand',
      'no_found_rows'  => true,
    ];
    $q_bkk = new WP_Query($args_bkk);
    ?>

    <div class="ogx-latestRail__wrap">
      <div class="ogx-latestRail__viewport" tabindex="0">
        <div class="ogx-latestRail__track">
          <?php if ($q_bkk->have_posts()) : ?>
            <?php while ($q_bkk->have_posts()) : $q_bkk->the_post(); ?>
              <?php
                $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (!$thumb) $thumb = 'https://ganjabonsai.com/wp/wp-content/uploads/2025/01/no-image.jpg';

                $tags = get_the_tags();
                $area_label = '';
                if (!empty($tags)) {
                  $names = [];
                  foreach ($tags as $t) {
                    $names[] = $t->name;
                    if (count($names) >= 2) break;
                  }
                  $area_label = implode(' / ', $names);
                }
              ?>

              <article class="ogx-latestCard">
                <div class="ogx-latestCard__thumb">
                  <img class="ogx-latestCard__img" src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                </div>

                <div class="ogx-latestCard__body">
                  <?php if ($area_label) : ?>
                    <button class="ogx-latestChip ogx-latestChip--date" type="button"><?php echo esc_html($area_label); ?></button>
                  <?php endif; ?>

                  <h3 class="ogx-latestCard__headline"><?php the_title(); ?></h3>

                  <div class="ogx-latestCard__row">
                    <a class="ogx-latestCard__cta" href="<?php the_permalink(); ?>">
                      記事を読む <span class="ogx-latestCard__chev" aria-hidden="true">›</span>
                    </a>
                  </div>
                </div>
              </article>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>

      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--right" type="button" aria-label="次へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">›</span>
      </button>
      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--left" type="button" aria-label="前へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">‹</span>
      </button>

      <div class="ogx-latestRail__fade ogx-latestRail__fade--right" aria-hidden="true"></div>
      <div class="ogx-latestRail__fade ogx-latestRail__fade--left" aria-hidden="true"></div>
    </div>
  </section>

<!-- エリアタグボタン（タイトルと一覧の間） 
<nav class="pocketog__v1__areaChips" aria-label="バンコク・エリア別の一覧フィルター">
<!--  <a class="pocketog__v1__areaChip" href="">アソーク</a>
  <span class="pocketog__v1__areaChip">アソーク</span>
  <span class="pocketog__v1__areaChip">スクンビット</span>
  <span class="pocketog__v1__areaChip">トンロー</span>
  <span class="pocketog__v1__areaChip">エカマイ</span>
  <span class="pocketog__v1__areaChip">シーロム</span>
  <span class="pocketog__v1__areaChip">サトーン</span>
  <span class="pocketog__v1__areaChip">カオサン</span>
  <span class="pocketog__v1__areaChip">ラチャダー</span>
</nav>-->
	
<?php /*?>  <nav class="pocketog__v1__areaChips" aria-label="パタヤ・エリア別の一覧フィルター">
<!--    <a class="pocketog__v1__areaChip" href="">ビーチロード</a>
    <a class="pocketog__v1__areaChip" href="">セカンドロード</a>
    <a class="pocketog__v1__areaChip" href="">セントラルパタヤ</a>-->
    <span class="pocketog__v1__areaChip is-disabled">アソーク</span>
    <span class="pocketog__v1__areaChip is-disabled">スクンビット</span>
    <span class="pocketog__v1__areaChip is-disabled">トンロー</span>
    <span class="pocketog__v1__areaChip is-disabled">エカマイ</span>    
	<span class="pocketog__v1__areaChip is-disabled">シーロム</span>
    <span class="pocketog__v1__areaChip is-disabled">サトーン</span>
    <span class="pocketog__v1__areaChip is-disabled">カオサン</span>
    <span class="pocketog__v1__areaChip is-disabled">ラチャダー</span>
  </nav><?php */?>


  <!-- ===== Section 3 : パタヤ（タグ pattaya / 5件ランダム） ===== -->
  <section class="ogx-latestRail" data-ogx-latest-rail aria-label="パタヤのオススメの大麻薬局">
    <div class="ogx-latestRail__head">
      <div class="ogx-latestRail__headText">
        <p class="ogx-latestRail__label">TEAM ORGANIC GANGSTA</p>
        <h2 class="ogx-latestRail__title">パタヤのオススメの大麻薬局</h2>
        <span class="ogx-latestRail__underline" aria-hidden="true"></span>
      </div>

      <a class="ogx-latestRail__more" href="/tag/pattaya">
        すべて見る <span aria-hidden="true">›</span>
      </a>
    </div>

    <?php
    $args_pattaya = [
      'post_type'      => 'post',
      'posts_per_page' => 5,
      'post_status'    => 'publish',
      'tag'            => 'pattaya',
      'orderby'        => 'rand',
      'no_found_rows'  => true,
    ];
    $q_pattaya = new WP_Query($args_pattaya);
    ?>

    <div class="ogx-latestRail__wrap">
      <div class="ogx-latestRail__viewport" tabindex="0">
        <div class="ogx-latestRail__track">
          <?php if ($q_pattaya->have_posts()) : ?>
            <?php while ($q_pattaya->have_posts()) : $q_pattaya->the_post(); ?>
              <?php
                $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (!$thumb) $thumb = 'https://ganjabonsai.com/wp/wp-content/uploads/2025/01/no-image.jpg';

                $tags = get_the_tags();
                $area_label = '';
                if (!empty($tags)) {
                  $names = [];
                  foreach ($tags as $t) {
                    $names[] = $t->name;
                    if (count($names) >= 2) break;
                  }
                  $area_label = implode(' / ', $names);
                }
              ?>

              <article class="ogx-latestCard">
                <div class="ogx-latestCard__thumb">
                  <img class="ogx-latestCard__img" src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                </div>

                <div class="ogx-latestCard__body">
                  <?php if ($area_label) : ?>
                    <button class="ogx-latestChip ogx-latestChip--date" type="button"><?php echo esc_html($area_label); ?></button>
                  <?php endif; ?>

                  <h3 class="ogx-latestCard__headline"><?php the_title(); ?></h3>

                  <div class="ogx-latestCard__row">
                    <a class="ogx-latestCard__cta" href="<?php the_permalink(); ?>">
                      記事を読む <span class="ogx-latestCard__chev" aria-hidden="true">›</span>
                    </a>
                  </div>
                </div>
              </article>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>

      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--right" type="button" aria-label="次へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">›</span>
      </button>
      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--left" type="button" aria-label="前へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">‹</span>
      </button>

      <div class="ogx-latestRail__fade ogx-latestRail__fade--right" aria-hidden="true"></div>
      <div class="ogx-latestRail__fade ogx-latestRail__fade--left" aria-hidden="true"></div>
    </div>
  </section>

<?php /*?>  <nav class="pocketog__v1__areaChips" aria-label="パタヤ・エリア別の一覧フィルター">
<!--    <a class="pocketog__v1__areaChip" href="">ビーチロード</a>
    <a class="pocketog__v1__areaChip" href="">セカンドロード</a>
    <a class="pocketog__v1__areaChip" href="">セントラルパタヤ</a>-->
    <span class="pocketog__v1__areaChip is-disabled">ウォーキングストリート</span>
    <span class="pocketog__v1__areaChip is-disabled">ビーチロード</span>
    <span class="pocketog__v1__areaChip is-disabled">セカンドロード</span>
    <span class="pocketog__v1__areaChip is-disabled">セントラルパタヤ</span>    
	<span class="pocketog__v1__areaChip is-disabled">ノースパタヤ</span>
    <span class="pocketog__v1__areaChip is-disabled">ジョムティエン</span>
    <span class="pocketog__v1__areaChip is-disabled">プラタムナック</span>
  </nav>
<?php */?>	
	

  <!-- ===== Section 1 : タイのオススメ（※ここは今は固定カードのまま） ===== -->
  <section class="ogx-latestRail" data-ogx-latest-rail aria-label="タイのオススメの大麻薬局">
    <div class="ogx-latestRail__head">
      <div class="ogx-latestRail__headText">
        <p class="ogx-latestRail__label">TEAM ORGANIC GANGSTA</p>
        <h2 class="ogx-latestRail__title">大麻薬局まとめ一覧</h2>
        <span class="ogx-latestRail__underline" aria-hidden="true"></span>
      </div>
    </div>

    <div class="ogx-latestRail__wrap">
      <div class="ogx-latestRail__viewport" tabindex="0">
        <div class="ogx-latestRail__track">

          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/cannabis-clinic.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">まとめ記事</button>
              <h3 class="ogx-latestCard__headline">タイの大麻はどこで買える？初心者でも安心できるおすすめ大麻薬局完全ガイド</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/smoking-info/dispensary-guide-thailand/">記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>
			
          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2026/02/asoke-cannabis-clinics-guide.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">まとめ記事</button>
              <h3 class="ogx-latestCard__headline">アソーク周辺の大麻薬局まとめ｜ホテル徒歩圏で安心して選ぶガイド</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/cannabis-clinic/asoke-cannabis-clinics-guide/">記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>			

			
        </div>
      </div>

      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--right" type="button" aria-label="次へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">›</span>
      </button>
      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--left" type="button" aria-label="前へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">‹</span>
      </button>

      <div class="ogx-latestRail__fade ogx-latestRail__fade--right" aria-hidden="true"></div>
      <div class="ogx-latestRail__fade ogx-latestRail__fade--left" aria-hidden="true"></div>
    </div>
  </section>
	
	
  <!-- ===== Section 1 : タイのオススメ（※ここは今は固定カードのまま） ===== -->
  <section class="ogx-latestRail" data-ogx-latest-rail aria-label="タイのオススメの大麻薬局">
    <div class="ogx-latestRail__head">
      <div class="ogx-latestRail__headText">
        <p class="ogx-latestRail__label">TEAM ORGANIC GANGSTA</p>
        <h2 class="ogx-latestRail__title">必読記事一覧</h2>
        <span class="ogx-latestRail__underline" aria-hidden="true"></span>
      </div>
    </div>

    <div class="ogx-latestRail__wrap">
      <div class="ogx-latestRail__viewport" tabindex="0">
        <div class="ogx-latestRail__track">

          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/10/ganja.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">まとめ記事</button>
              <h3 class="ogx-latestCard__headline">初めてタイで医療大麻を吸う人へ｜合法化の現状と安全に楽しむための完全ガイド</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/smoking-info/smoker-beginner/">記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>

          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2026/02/thailand-cannabis-beginner-safety-guide-.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">人気記事</button>
              <h3 class="ogx-latestCard__headline">初心者が安全にタイで大麻を使うための基礎知識完全ガイド｜準備・適量・注意点を整理</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/smoking-info/thailand-cannabis-beginner-safety-guide">記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>

          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/cannabis-1-4.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">人気記事</button>
              <h3 class="ogx-latestCard__headline">大麻バッドトリップとは？初心者が知るべき原因・症状・回避法</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/smoking-info/cannabis-anxiety-bad-trip-prevention/">まとめを見る<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>
			
          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/cannabis-2.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">人気記事</button>
              <h3 class="ogx-latestCard__headline">初めての大麻 “適量”ガイド｜初心者が安心して楽しむ為の目安</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/smoking-info/cannabis-beginner-dosage-guide/">まとめを見る<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>
			
          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/ganja.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">人気記事</button>
              <h3 class="ogx-latestCard__headline">「非犯罪化＝自由」じゃない！タイで大麻を吸う上でのルールを大麻盆栽家が解説</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/smoking-info/thailand-weed-guide/">まとめを見る<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>
			
          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2026/02/medical-vs-recreational-cannabis-difference.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">人気記事</button>
              <h3 class="ogx-latestCard__headline">医療大麻と嗜好大麻の違いとは？目的・体感・制度の違いをわかりやすく整理</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/smoking-info/medical-vs-recreational-cannabis-difference/">まとめを見る<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>			
			
        </div>
      </div>

      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--right" type="button" aria-label="次へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">›</span>
      </button>
      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--left" type="button" aria-label="前へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">‹</span>
      </button>

      <div class="ogx-latestRail__fade ogx-latestRail__fade--right" aria-hidden="true"></div>
      <div class="ogx-latestRail__fade ogx-latestRail__fade--left" aria-hidden="true"></div>
    </div>
  </section>




</main>

<?php get_footer(1); ?>
