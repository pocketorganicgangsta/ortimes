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
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/greenhouse-7.jpg" alt="Green House" loading="lazy">
        </figure>
        <figure class="pog-cflow5__card pog-cflow5__card--2">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/greenhouse1.jpg" alt="Green House" loading="lazy">
        </figure>
        <figure class="pog-cflow5__card pog-cflow5__card--3">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/greenhouse2.jpg" alt="Green House" loading="lazy">
        </figure>
        <figure class="pog-cflow5__card pog-cflow5__card--4">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/greenhouse3.jpg" alt="Green House" loading="lazy">
        </figure>
        <figure class="pog-cflow5__card pog-cflow5__card--5">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/greenhouse4.jpg" alt="Green House" loading="lazy">
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
    <h2 class="clin-p-h1">Green House Seed</h2>
<nav class="ogSnsDock" aria-label="Social links">
  <a class="ogSnsBtn" href="https://greenhousethailand.com/" aria-label="Home">
    <!-- home -->
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M12 3 3 10v10h6v-6h6v6h6V10L12 3z"/>
    </svg>
  </a>

<?php /*?>  <a class="ogSnsBtn" href="https://x.com/" target="_blank" rel="noopener" aria-label="X">
    <!-- X -->
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M18.9 3H21l-6.9 7.9L22 21h-6.2l-4.9-6.3L5.5 21H3.4l7.4-8.5L2 3h6.3l4.4 5.7L18.9 3zm-1.1 16h1.7L7.1 4.9H5.3L17.8 19z"/>
    </svg>
  </a><?php */?>

  <a class="ogSnsBtn" href="https://greenhousethailand.com/" target="_blank" rel="noopener" aria-label="Instagram">
    <!-- instagram -->
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2zm9 2h-9A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9A3.5 3.5 0 0 0 20 16.5v-9A3.5 3.5 0 0 0 16.5 4z"/>
      <path d="M12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2.1a2.9 2.9 0 1 0 0 5.8 2.9 2.9 0 0 0 0-5.8z"/>
      <path d="M17.7 6.3a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0z"/>
    </svg>
  </a>

<?php /*?>  <a class="ogSnsBtn" href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook">
    <!-- facebook -->
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M13.5 22v-8h2.7l.4-3h-3.1V9.2c0-.9.3-1.5 1.6-1.5H16.7V5.1c-.3 0-1.4-.1-2.6-.1-2.6 0-4.3 1.6-4.3 4.4V11H7v3h2.8v8h3.7z"/>
    </svg>
  </a><?php */?>

  <a class="ogSnsBtn" href="https://www.youtube.com/greenhouseseeds" target="_blank" rel="noopener" aria-label="YouTube">
    <!-- youtube -->
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M21.6 7.2a3 3 0 0 0-2.1-2.1C17.8 4.7 12 4.7 12 4.7s-5.8 0-7.5.4A3 3 0 0 0 2.4 7.2 31 31 0 0 0 2 12a31 31 0 0 0 .4 4.8 3 3 0 0 0 2.1 2.1c1.7.4 7.5.4 7.5.4s5.8 0 7.5-.4a3 3 0 0 0 2.1-2.1A31 31 0 0 0 22 12a31 31 0 0 0-.4-4.8z"/>
      <path d="M10.2 15.2V8.8L15.8 12l-5.6 3.2z" fill="currentColor"/>
    </svg>
  </a>

<?php /*?>  <a class="ogSnsBtn" href="https://www.tiktok.com/" target="_blank" rel="noopener" aria-label="TikTok">
    <!-- tiktok (simple note) -->
    <svg class="ogSnsIco" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M14 3v10.2a3.6 3.6 0 1 1-3-3.5V7.6a6 6 0 1 0 5.2 5.9V8.2c1.1 1 2.5 1.7 3.8 1.8V7.3c-1.8-.2-3.6-1.7-4.1-4.3H14z"/>
    </svg>
  </a><?php */?>
</nav>
	  
    <p class="clin-p-01">Green House Seed Companyは、ヨーロッパを中心とした大麻育種の歴史の中で、長年名前が語られてきたブランドの一つです。「有名だから知っている」というより、<strong>「大麻の歴史を辿る中で必ず名前が出てくるブランド」</strong>として認識されているブランドです。タイでは合計６店舗大麻薬局があります。</p>

    <div class="custom-card-container">
      <div class="custom-card">
        <div class="custom-card-image-wrapper">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/greenhouse-2.jpg">
          <span class="custom-card-tag">コメント</span>
        </div>
        <div class="custom-card-content">
          <h3>30年以上にわたり世界の育種史に影響を与えてきたブランド</h3>
        </div>
        <div class="custom-card-text">
          1990年代から品種開発と遺伝子保存に取り組み、流行ではなく積み重ねによって世界的評価を築いてきた大麻ブランド。
        </div>
      </div>

      <div class="custom-card">
        <div class="custom-card-image-wrapper">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/greenhouse-6.jpg">
          <span class="custom-card-tag">コメント</span>
        </div>
        <div class="custom-card-content">
          <h3>品種の強さよりもバランスと再現性を重視する育種思想</h3>
        </div>
        <div class="custom-card-text">
          THCの数値や話題性だけを追わず、体感のバランスや遺伝子の安定性を重視した品種開発を続けてきた。
        </div>
      </div>

      <div class="custom-card">
        <div class="custom-card-image-wrapper">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/greenhouse-3.jpg">
          <span class="custom-card-tag">コメント</span>
        </div>
        <div class="custom-card-content">
          <h3>文化・医療・研究を横断して語られる数少ない大麻ブランド</h3>
        </div>
        <div class="custom-card-text">
          嗜好品としてだけでなく、医療や研究、カルチャーの文脈でも語られてきた稀有な存在。
        </div>
      </div>
    </div>

    <!-- ▼ index-left の中身をここへ統合（タブを3つに増やす） -->
    <div class="tabs sppage-tab">
      <input id="programming" type="radio" name="tab_item" checked>
      <label class="tab_item" for="programming" id="back-1-link">記事一覧</label>

      <input id="design" type="radio" name="tab_item">
      <label class="tab_item" for="design" id="back-2-link">取扱医療大麻</label>

      <input id="shopinfo" type="radio" name="tab_item">
      <label class="tab_item" for="shopinfo">大麻薬局情報</label>

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

      <div class="tab_content" id="design_content">
        <div id="back-blog-2">
          <p class="small1">→右にスクロールできます</p>

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
                      <div class="og-sketchtable__name">Super Lemon Haze</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__ratio">
                      <div class="og-sketchtable__pct">18–22％</div>
                      <div class="og-sketchtable__split">(80:20)</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--content">
                    <p class="og-sketchtable__text">
                      鋭いレモンピールの香りが一気に広がり、吸った瞬間に頭が冴えるような感覚が立ち上がる。高揚感は軽快で、思考が前に進みやすく、作業や会話のテンポを自然に引き上げてくれる。重さが残りにくく、日中向きの覚醒系レモンストレイン。
                    </p>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--tags">
                    <div class="og-sketchtable__tagscol" aria-label="タグ一覧">
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-day-high/" class="og-sketchtable__btn1">昼ハイ</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-focus-work/" class="og-sketchtable__btn1">集中ワーク</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-creative-time/" class="og-sketchtable__btn1">創作タイム</a></span>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__cta">
                      <a class="og-sketchtable__btn" href="https://ganjabonsai.com/cannabis-strain/super-lemon-haze/" target="_blank" rel="noopener">詳細を見る</a>
                    </div>
                  </div>
                </div>

                <!-- ROW 2 -->
                <div class="og-sketchtable__row">
                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__who">
                      <div class="og-sketchtable__name">Super Lemon Orange</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__ratio">
                      <div class="og-sketchtable__pct">15–20%</div>
                      <div class="og-sketchtable__split">(60:40)</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--content">
                    <p class="og-sketchtable__text">
                      オレンジの甘さとレモンの明るさが重なる、丸みのある柑橘アロマが特徴。高揚は穏やかで、気分が自然と前向きに整うタイプ。強く尖らず、会話や軽い作業を心地よく続けたい場面で使いやすいバランス型。
                    </p>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--tags">
                    <div class="og-sketchtable__tagscol" aria-label="タグ一覧">
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-day-high/" class="og-sketchtable__btn1">昼ハイ</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-social-mode/" class="og-sketchtable__btn1">社交モード</a></span>
                      <span class="og-sketchtable__tagpill"><a href="https://ganjabonsai.com/tag/scene-focus-work/" class="og-sketchtable__btn1">集中ワーク</a></span>
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
                      <div class="og-sketchtable__name">King’s Juice</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__ratio">
                      <div class="og-sketchtable__pct">20–25％</div>
                      <div class="og-sketchtable__split">(40:60)</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--content">
                    <p class="og-sketchtable__text">
                      フルーツの甘さにガス感が混ざる濃厚な香りと、じわじわ広がるリラックス感が印象的。気分をほぐしつつ会話も続けやすく、深く沈みすぎない。夜のリラックスや映画鑑賞に向いた、余裕のあるチル系。
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

                <!-- ROW 4 -->
                <div class="og-sketchtable__row">
                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__who">
                      <div class="og-sketchtable__name">Lemon Eclipse</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell">
                    <div class="og-sketchtable__ratio">
                      <div class="og-sketchtable__pct">17–22％</div>
                      <div class="og-sketchtable__split">(50:50)</div>
                    </div>
                  </div>

                  <div class="og-sketchtable__cell og-sketchtable__cell--content">
                    <p class="og-sketchtable__text">
                      レモンの爽やかさの奥に、落ち着いた深みが重なる静かな香り。最初は軽く頭が整い、その後ゆっくりと内側へ沈んでいく。刺激よりも余韻を楽しむタイプで、夜に思考を整理したい時間と相性が良い。
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
                      <div class="og-sketchtable__name">Fullgas × Zaza</div>
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
                      ガス感の強い重厚な香りが立ち、吸うごとに体の力が抜けていく。高揚は控えめで、意識が静かに内側へ向かうタイプ。刺激を求めるより、完全にオフへ切り替えたい夜に向いた深めのリラックス系。
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

              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- ▼ 3つ目タブ：中身は sample だけ -->
      <!-- Shop Info -->
      <div class="tab_content" id="shopinfo_content">

<section class="ogtPlaceTable" aria-label="関連店舗">
  <div class="ogtPlaceTable__inner">

    <!-- Header -->
    <div class="ogtPlaceTable__row ogtPlaceTable__row--head">
      <div>店舗名</div>
      <div>エリア</div>
      <div>記事</div>
      <div>Googleマップ</div>
    </div>

    <!-- Row 1 -->
    <div class="ogtPlaceTable__row">
      <div class="ogtPlaceTable__name">Green House Nuanchan</div>
      <div class="ogtPlaceTable__area">バンコク / ヌアンチャン</div>
      <div class="ogtPlaceTable__action">ー</div>
      <div class="ogtPlaceTable__action">
        <a href="https://share.google/EkVLvqjjRKx9BoXag" class="ogtPlaceBtn ogtPlaceBtn--map" target="_blank" rel="noopener">Googleマップ</a>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="ogtPlaceTable__row">
      <div class="ogtPlaceTable__name">Green House Thonglor</div>
      <div class="ogtPlaceTable__area">バンコク / トンロー</div>
      <div class="ogtPlaceTable__action">
        <a href="https://ganjabonsai.com/en/cannabis-clinic/green-house-thong-lo/" class="ogtPlaceBtn" target="_blank" rel="noopener">記事を読む</a>
      </div>
      <div class="ogtPlaceTable__action">
        <a href="https://maps.app.goo.gl/B26V7jWJADMvMZRJA" class="ogtPlaceBtn ogtPlaceBtn--map" target="_blank" rel="noopener">Googleマップ</a>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="ogtPlaceTable__row">
      <div class="ogtPlaceTable__name">Green House Bangkok Sukhumvit</div>
      <div class="ogtPlaceTable__area">バンコク / スクンビット</div>
      <div class="ogtPlaceTable__action">ー</div>
      <div class="ogtPlaceTable__action">
        <a href="https://maps.app.goo.gl/dh9h1pSzNzYJdZL39" class="ogtPlaceBtn ogtPlaceBtn--map" target="_blank" rel="noopener">Googleマップ</a>
      </div>
    </div>

    <!-- Row 4 -->
    <div class="ogtPlaceTable__row">
      <div class="ogtPlaceTable__name">Green House Bangkok Chinatown</div>
      <div class="ogtPlaceTable__area">バンコク / チャイナタウン</div>
      <div class="ogtPlaceTable__action">ー</div>
      <div class="ogtPlaceTable__action">
        <a href="https://maps.app.goo.gl/hdmHXBwQ7R6NpMD1A" class="ogtPlaceBtn ogtPlaceBtn--map" target="_blank" rel="noopener">Googleマップ</a>
      </div>
    </div>

    <!-- Row 5 -->
    <div class="ogtPlaceTable__row">
      <div class="ogtPlaceTable__name">Green House Bangkok Kao san</div>
      <div class="ogtPlaceTable__area">バンコク / カオサン</div>
      <div class="ogtPlaceTable__action">ー</div>
      <div class="ogtPlaceTable__action">
        <a href="https://maps.app.goo.gl/VJU7j8ePEAduUFiM6" class="ogtPlaceBtn ogtPlaceBtn--map" target="_blank" rel="noopener">Googleマップ</a>
      </div>
    </div>

    <!-- Row 6 -->
    <div class="ogtPlaceTable__row">
      <div class="ogtPlaceTable__name">Green House Samui Chaweng</div>
      <div class="ogtPlaceTable__area">サムイ / チャウエン</div>
      <div class="ogtPlaceTable__action">ー</div>
      <div class="ogtPlaceTable__action">
        <a href="https://maps.app.goo.gl/XwwKK5tuDEYGnFJ9A" class="ogtPlaceBtn ogtPlaceBtn--map" target="_blank" rel="noopener">Googleマップ</a>
      </div>
    </div>

  </div>
</section>		  
		  
      </div>

    </div>
    <!-- ▲ 統合ここまで -->

  </div>
</div>

<?php get_footer(3); ?>