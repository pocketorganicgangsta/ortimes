<?php get_header(8); ?>

<div class="page-template">
  <div class="page-template1">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
    </div>
  </div>

  <div class="pog-cflow5" aria-label="Shop slider">
    <!-- state -->
    <input class="pog-cflow5__state" type="radio" name="pog-cflow5" id="pog-cflow5-s1" checked>
    <input class="pog-cflow5__state" type="radio" name="pog-cflow5" id="pog-cflow5-s2">
    <input class="pog-cflow5__state" type="radio" name="pog-cflow5" id="pog-cflow5-s3">
    <input class="pog-cflow5__state" type="radio" name="pog-cflow5" id="pog-cflow5-s4">
    <input class="pog-cflow5__state" type="radio" name="pog-cflow5" id="pog-cflow5-s5">

    <div class="pog-cflow5__viewport">
      <div class="pog-cflow5__track">
        <figure class="pog-cflow5__card pog-cflow5__card--1">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/Tropical-Thunder-2.jpg" alt="Tropical Thunder" loading="lazy">
        </figure>
        <figure class="pog-cflow5__card pog-cflow5__card--2">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/Tropical-Thunder-1.jpg" alt="Tropical Thunder" loading="lazy">
        </figure>
        <figure class="pog-cflow5__card pog-cflow5__card--3">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/Tropical-Thunder-5.jpg" alt="Tropical Thunder" loading="lazy">
        </figure>
        <figure class="pog-cflow5__card pog-cflow5__card--4">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/Tropical-Thunder-8.jpg" alt="Tropical Thunder" loading="lazy">
        </figure>
        <figure class="pog-cflow5__card pog-cflow5__card--5">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/Tropical-Thunder-10.jpg" alt="Tropical Thunder" loading="lazy">
        </figure>
      </div>

      <!-- arrows -->
      <div class="pog-cflow5__arrows" aria-hidden="true">
        <label class="pog-cflow5__btn pog-cflow5__btn--prev" for="pog-cflow5-s5" data-show="s1">PREV</label>
        <label class="pog-cflow5__btn pog-cflow5__btn--next" for="pog-cflow5-s2" data-show="s1">NEXT</label>

        <label class="pog-cflow5__btn pog-cflow5__btn--prev" for="pog-cflow5-s1" data-show="s2">PREV</label>
        <label class="pog-cflow5__btn pog-cflow5__btn--next" for="pog-cflow5-s3" data-show="s2">NEXT</label>

        <label class="pog-cflow5__btn pog-cflow5__btn--prev" for="pog-cflow5-s2" data-show="s3">PREV</label>
        <label class="pog-cflow5__btn pog-cflow5__btn--next" for="pog-cflow5-s4" data-show="s3">NEXT</label>

        <label class="pog-cflow5__btn pog-cflow5__btn--prev" for="pog-cflow5-s3" data-show="s4">PREV</label>
        <label class="pog-cflow5__btn pog-cflow5__btn--next" for="pog-cflow5-s5" data-show="s4">NEXT</label>

        <label class="pog-cflow5__btn pog-cflow5__btn--prev" for="pog-cflow5-s4" data-show="s5">PREV</label>
        <label class="pog-cflow5__btn pog-cflow5__btn--next" for="pog-cflow5-s1" data-show="s5">NEXT</label>
      </div>

      <!-- dots -->
      <div class="pog-cflow5__dots" aria-label="pagination">
        <label for="pog-cflow5-s1" class="pog-cflow5__dot"></label>
        <label for="pog-cflow5-s2" class="pog-cflow5__dot"></label>
        <label for="pog-cflow5-s3" class="pog-cflow5__dot"></label>
        <label for="pog-cflow5-s4" class="pog-cflow5__dot"></label>
        <label for="pog-cflow5-s5" class="pog-cflow5__dot"></label>
      </div>
    </div>
  </div>

  <div class="category-main">
    <h2 class="clin-p-h1">Tropical Thunder</h2>
<!-- =========================
  SNS Circle Buttons (like your screenshot)
  - put anywhere (header / article top / bottom)
  - change href to your real URLs
========================= -->
<nav class="ogSnsDock" aria-label="Social links">
  <a class="ogSnsBtn" href="http://www.tropicalthunderfarm.com" target="_blank" aria-label="Home">
    <!-- home -->
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M12 3 3 10v10h6v-6h6v6h6V10L12 3z"/>
    </svg>
  </a>

<!--  <a class="ogSnsBtn" href="https://x.com/" target="_blank" rel="noopener" aria-label="X">
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M18.9 3H21l-6.9 7.9L22 21h-6.2l-4.9-6.3L5.5 21H3.4l7.4-8.5L2 3h6.3l4.4 5.7L18.9 3zm-1.1 16h1.7L7.1 4.9H5.3L17.8 19z"/>
    </svg>
  </a>-->

  <a class="ogSnsBtn" href="https://www.instagram.com/tropicalthunder_farm/" target="_blank" rel="noopener" aria-label="Instagram">
    <!-- instagram -->
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2zm9 2h-9A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9A3.5 3.5 0 0 0 20 16.5v-9A3.5 3.5 0 0 0 16.5 4z"/>
      <path d="M12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2.1a2.9 2.9 0 1 0 0 5.8 2.9 2.9 0 0 0 0-5.8z"/>
      <path d="M17.7 6.3a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0z"/>
    </svg>
  </a>

  <a class="ogSnsBtn" href="https://www.facebook.com/p/Tropical-Thunder-Farm-61565420437643/" target="_blank" rel="noopener" aria-label="Facebook">
    <!-- facebook -->
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M13.5 22v-8h2.7l.4-3h-3.1V9.2c0-.9.3-1.5 1.6-1.5H16.7V5.1c-.3 0-1.4-.1-2.6-.1-2.6 0-4.3 1.6-4.3 4.4V11H7v3h2.8v8h3.7z"/>
    </svg>
  </a>
    <!-- youtube

  <a class="ogSnsBtn" href="https://www.youtube.com/" target="_blank" rel="noopener" aria-label="YouTube">
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M21.6 7.2a3 3 0 0 0-2.1-2.1C17.8 4.7 12 4.7 12 4.7s-5.8 0-7.5.4A3 3 0 0 0 2.4 7.2 31 31 0 0 0 2 12a31 31 0 0 0 .4 4.8 3 3 0 0 0 2.1 2.1c1.7.4 7.5.4 7.5.4s5.8 0 7.5-.4a3 3 0 0 0 2.1-2.1A31 31 0 0 0 22 12a31 31 0 0 0-.4-4.8z"/>
      <path d="M10.2 15.2V8.8L15.8 12l-5.6 3.2z" fill="currentColor"/>
    </svg>
  </a> -->

    <!-- tiktok (simple note) 
	
  <a class="ogSnsBtn" href="https://www.tiktok.com/" target="_blank" rel="noopener" aria-label="TikTok">
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M14 3v10.2a3.6 3.6 0 1 1-3-3.5V7.6a6 6 0 1 0 5.2 5.9V8.2c1.1 1 2.5 1.7 3.8 1.8V7.3c-1.8-.2-3.6-1.7-4.1-4.3H14z"/>
    </svg>
  </a>-->
</nav>
    <p class="clin-p-01">
      パタヤのジョムティエンにある”Tropical Thunder Dispensary”は小さな店舗ですが、
      <strong>自分たちで育てた大麻のクオリティは有名ブランドにもまったく引けを取らず、本当に完成度の高いものばかりです。</strong>
      オーガニック栽培のため体への負担も少なく、効果もしっかり感じられるのが特徴です。
    </p>

    <div class="custom-card-container">
      <!-- Card 1 -->
      <div class="custom-card">
        <div class="custom-card-image-wrapper">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/Tropical-Thunder-1.jpg" alt="" loading="lazy">
          <span class="custom-card-tag">コメント</span>
        </div>
        <div class="custom-card-content">
          <h3>大麻栽培歴15年以上のカルフォルニア出身の大麻農家が作る医療大麻</h3>
        </div>
        <div class="custom-card-text">
          15年以上の栽培経験を持つプロの大麻農家集団が、リビングソイル（生きた土壌）を用いた完全インドア栽培を行う、パタヤにある大麻農家。
        </div>
      </div>

      <!-- Card 2 -->
      <div class="custom-card">
        <div class="custom-card-image-wrapper">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/Tropical-Thunder-1.jpg" alt="" loading="lazy">
          <span class="custom-card-tag">コメント</span>
        </div>
        <div class="custom-card-content">
          <h3>タイで開催された大麻関連コンテストで何度も受賞経験あり！</h3>
        </div>
        <div class="custom-card-text">
          パタヤで開催された「The Budtender Cup」や、プーケットで開催された「Phuket Cannabis Cup」でも入賞実績があり。
        </div>
      </div>

      <!-- Card 3 -->
      <div class="custom-card">
        <div class="custom-card-image-wrapper">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/Tropical-Thunder-6.jpg" alt="" loading="lazy">
          <span class="custom-card-tag">コメント</span>
        </div>
        <div class="custom-card-content">
          <h3>タイミングが良ければ大麻盆栽が見られるかも？</h3>
        </div>
        <div class="custom-card-text">
          一部の店舗だけでコラボで大麻盆栽を展示しています。他の大麻薬局では体験できない体験を楽しんでください。
        </div>
      </div>
    </div>

    <!-- ▼ Greenhouse と同じ：タブ3つ構成に統合 -->
    <div class="tabs sppage-tab">

      <!-- TAB 1 -->
      <input id="programming" type="radio" name="tab_item" checked>
      <label class="tab_item" for="programming" id="back-1-link">記事一覧</label>

      <!-- TAB 2 -->
      <input id="design" type="radio" name="tab_item">
      <label class="tab_item" for="design" id="back-2-link">取扱医療大麻</label>

      <!-- TAB 3（追加） -->
      <input id="shopinfo" type="radio" name="tab_item">
      <label class="tab_item" for="shopinfo">大麻薬局情報</label>


      <!-- =========================
           TAB 1：記事一覧
      ========================= -->
      <div class="tab_content" id="programming_content">
        <div id="back-blog-1">
          <h2 class="clin-p-h2">記事一覧</h2>

          <ul class="og-articlegrid">
            <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <li class="og-articlegrid__item">
                  <a href="<?php the_permalink(); ?>" class="og-articlecard" aria-label="<?php echo esc_attr( get_the_title() ); ?>">

                    <span class="og-articlecard__thumb">
                      <?php
                        if ( has_post_thumbnail() ) {
                          the_post_thumbnail('large', array(
                            'class'   => 'og-articlecard__img',
                            'loading' => 'lazy',
                            'alt'     => esc_attr( get_the_title() )
                          ));
                        } else {
                          echo '<img class="og-articlecard__img" loading="lazy" alt="" src="' . esc_url( get_template_directory_uri() . '/image/noimg.jpg' ) . '">';
                        }
                      ?>
                    </span>

                    <span class="og-articlecard__body">
                      <span class="og-articlecard__meta">
                        <?php
                          $cats = get_the_category();
                          if ( ! empty($cats) ) {
                            echo '<span class="og-articlecard__pill">' . esc_html($cats[0]->name) . '</span>';
                          } else {
                            echo '<span class="og-articlecard__pill">記事</span>';
                          }
                        ?>

                        <?php
                          $post_time = get_the_time('U');
                          if ( ( time() - $post_time ) < 7 * DAY_IN_SECONDS ) {
                            echo '<span class="og-articlecard__new">NEW</span>';
                          }
                        ?>
                      </span>

                      <h2 class="og-articlecard__title"><?php the_title(); ?></h2>

                      <span class="og-articlecard__cta">
                        <span class="og-articlecard__ctaText">記事を読む</span>
                        <span class="og-articlecard__ctaArrow" aria-hidden="true">→</span>
                      </span>
                    </span>

                  </a>
                </li>
              <?php endwhile; ?>
            <?php else : ?>
              <p class="og-articlegrid__empty">該当する記事がありません。</p>
            <?php endif; ?>
          </ul>

          <?php the_posts_pagination(array('prev_next' => false)); ?>
          <br clear="all">
        </div>
      </div>


      <!-- =========================
           TAB 2：取扱医療大麻
      ========================= -->
      <div class="tab_content" id="design_content">
        <div id="back-blog-2">
          <p class="small1">→右にスクロールできます</p>

          <!-- ★あなたの既存 og-sketchtable をそのまま -->
          <div class="og-sketchtable">
            <div class="og-sketchtable__scroll" aria-label="横スクロールで続きを表示">
              <div class="og-sketchtable__grid">

                <div class="og-sketchtable__head">
                  <div class="og-sketchtable__cell og-sketchtable__cell--head">名前</div>
                  <div class="og-sketchtable__cell og-sketchtable__cell--head">割合<br>(S/I比率)</div>
                  <div class="og-sketchtable__cell og-sketchtable__cell--head">紹介文</div>
                  <div class="og-sketchtable__cell og-sketchtable__cell--head">シュチュエーション</div>
                  <div class="og-sketchtable__cell og-sketchtable__cell--head">品種詳細</div>
                </div>

                <!-- ROW 1 -->
                <div class="og-sketchtable__row">
                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__who">
                      <div class="og-sketchtable__name">Miami Mami</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__ratio">
                      <div class="og-sketchtable__pct">17–21％</div>
                      <div class="og-sketchtable__split">(65:35)</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--content">
                    <p class="og-sketchtable__text">
                      トロピカルフルーツの甘さが立ち、明るく軽快な高揚が出やすい。体感は重くならず、気分が前向きに整うタイプ。外出前や人と会う前に使いやすく、日中のテンポを心地よく上げてくれるアクティブ系。
                    </p>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--tags">
                    <div class="og-sketchtable__tagscol" aria-label="タグ一覧">
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-day-high/" class="og-sketchtable__btn1">昼ハイ</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-social-mode/" class="og-sketchtable__btn1">社交モード</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-creative-time/" class="og-sketchtable__btn1">創作タイム</a></span>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__cta">
                      <a class="og-sketchtable__btn" href="https://ganjabonsai.com/cannabis-strain/miami-mami/" target="_blank" rel="noopener">詳細を見る</a>
                    </div>
                  </div>
                </div>

                <!-- ROW 2 -->
                <div class="og-sketchtable__row">
                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__who">
                      <div class="og-sketchtable__name">Orangutan Titties</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__ratio">
                      <div class="og-sketchtable__pct">24–28％</div>
                      <div class="og-sketchtable__split">(40:60)</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--content">
                    <p class="og-sketchtable__text">
                      柑橘とスパイスが混ざる個性的な香りと、じわじわ広がるボディ寄りの体感が印象的。高揚は控えめで、気分がほどけながら会話もしやすい。夜に人と過ごす時間や、映画を観ながらのチルに向いたバランス型。
                    </p>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--tags">
                    <div class="og-sketchtable__tagscol" aria-label="タグ一覧">
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-night-chill/" class="og-sketchtable__btn1">夜チル</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-social-mode/" class="og-sketchtable__btn1">社交モード</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-movie-time/" class="og-sketchtable__btn1">映画タイム</a></span>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__cta">
                      <span class="og-sketchtable__btn og-sketchtable__btn--disabled">準備中</span>
                    </div>
                  </div>
                </div>

                <!-- ROW 3 -->
                <div class="og-sketchtable__row">
                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__who">
                      <div class="og-sketchtable__name">Total Eclipse</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__ratio">
                      <div class="og-sketchtable__pct">16–20％</div>
                      <div class="og-sketchtable__split">(50:50)</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--content">
                    <p class="og-sketchtable__text">
                      派手さのない落ち着いた香りと、静かに広がるチル感が特徴。最初は頭が整理され、その後ゆっくりと身体が落ち着いていく。刺激を求める日ではなく、考えをまとめたい夜や一人時間に向いた内省寄りストレイン。
                    </p>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--tags">
                    <div class="og-sketchtable__tagscol" aria-label="タグ一覧">
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-night-chill/" class="og-sketchtable__btn1">夜チル</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-heart-detox/" class="og-sketchtable__btn1">心のデトックス</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-midnight-trip/" class="og-sketchtable__btn1">深夜のインナートリップ</a></span>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__cta">
                      <span class="og-sketchtable__btn og-sketchtable__btn--disabled">準備中</span>
                    </div>
                  </div>
                </div>

                <!-- ROW 4 -->
                <div class="og-sketchtable__row">
                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__who">
                      <div class="og-sketchtable__name">Gorilla Dosha</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__ratio">
                      <div class="og-sketchtable__pct">22–26％</div>
                      <div class="og-sketchtable__split">(30:70)</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--content">
                    <p class="og-sketchtable__text">
                      ガスとウッドの重たい香りが立ち、吸うごとに身体の力が一気に抜けていく。高揚よりも沈静が前に出るタイプで、意識が内側へ向かいやすい。深く落ち着きたい夜や、完全にオフへ切り替えたい場面に向いた重量級。
                    </p>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--tags">
                    <div class="og-sketchtable__tagscol" aria-label="タグ一覧">
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-night-chill/" class="og-sketchtable__btn1">夜チル</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-deep-sleep/" class="og-sketchtable__btn1">熟睡モード</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-heart-detox/" class="og-sketchtable__btn1">心のデトックス</a></span>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__cta">
                      <span class="og-sketchtable__btn og-sketchtable__btn--disabled">準備中</span>
                    </div>
                  </div>
                </div>

                <!-- ROW 5 -->
                <div class="og-sketchtable__row">
                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__who">
                      <div class="og-sketchtable__name">Mimosa</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__ratio">
                      <div class="og-sketchtable__pct">18–22％</div>
                      <div class="og-sketchtable__split">(70:30)</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--content">
                    <p class="og-sketchtable__text">
                      オレンジジュースのような明るい柑橘香が広がり、吸った瞬間に気分が軽く持ち上がる。高揚感はクリアで、頭が冴えながらも神経が尖りにくい。会話や作業の入り口として使いやすく、朝〜昼の時間帯に相性の良い爽快系ストレイン。
                    </p>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--tags">
                    <div class="og-sketchtable__tagscol" aria-label="タグ一覧">
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-day-high/" class="og-sketchtable__btn1">昼ハイ</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-social-mode/" class="og-sketchtable__btn1">社交モード</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-creative-time/" class="og-sketchtable__btn1">創作タイム</a></span>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__cta">
                      <span class="og-sketchtable__btn og-sketchtable__btn--disabled">準備中</span>
                    </div>
                  </div>
                </div>

              </div><!-- /.og-sketchtable__grid -->
            </div><!-- /.og-sketchtable__scroll -->
          </div><!-- /.og-sketchtable -->

        </div>
      </div>


      <!-- =========================
           TAB 3：大麻薬局情報（追加）
      ========================= -->
      <div class="tab_content" id="shopinfo_content">

        <section class="ogtPlaceTable" aria-label="関連店舗">
          <div class="ogtPlaceTable__inner">

            <div class="ogtPlaceTable__row ogtPlaceTable__row--head">
              <div>店舗名</div>
              <div>エリア</div>
              <div>記事</div>
              <div>Googleマップ</div>
            </div>

            <div class="ogtPlaceTable__row">
              <div class="ogtPlaceTable__name">Tropical Thunder Dispensary</div>
              <div class="ogtPlaceTable__area">パタヤ / ジョムティエン</div>
              <div class="ogtPlaceTable__action">
                <a href="https://ganjabonsai.com/cannabis-clinic/tropical-thunder-dispensary/"
                   class="ogtPlaceBtn" target="_blank" rel="noopener">詳細を見る</a>
              </div>
              <div class="ogtPlaceTable__action">
                <a href="https://maps.app.goo.gl/3x11ySao4wtPYPKB9"
                   class="ogtPlaceBtn ogtPlaceBtn--map" target="_blank" rel="noopener">Googleマップ</a>
              </div>
            </div>

          </div>
        </section>

      </div>

    </div>
    <!-- ▲ タブ統合ここまで -->

  </div><!-- /.category-main -->
</div><!-- /.page-template -->

<?php get_footer(3); ?>