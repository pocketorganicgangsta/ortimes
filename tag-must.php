<?php get_header(2); ?>
<div class="page-template">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display')) {
            bcn_display();
        }?>
    </div>  

    <div class="category-main">
		
<div class="custom-card-container">
  <!-- Card 1 -->
  <div class="custom-card">
    <div class="custom-card-image-wrapper">
      <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/10/ganja.jpg">
      <span class="custom-card-tag">コメント</span>
    </div>
    <div class="custom-card-content">
      <h3>初めてタイで大麻を吸う人へ｜合法化の現状と安全に楽しむための完全ガイド</h3>
      <button class="custom-card-button"><a href="https://ganjabonsai.com/smoking-info/smoker-beginner/">記事を読む</a></button>
    </div>
    <div class="custom-card-text">
      大麻初心者向けに、吸い方・注意点・体への影響をわかりやすく解説。初めて吸う人が安心して楽しむための基本ガイドです。
    </div>
  </div>

  <!-- Card 2 -->
  <div class="custom-card">
    <div class="custom-card-image-wrapper">
      <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/10/cannabis.jpg">
      <span class="custom-card-tag">コメント</span>
    </div>
    <div class="custom-card-content">
      <h3>大麻に含まれるテルペンとは？効果・種類・アロマとの違いを徹底解説</h3>
      <button class="custom-card-button"><a href="https://ganjabonsai.com/smoking-info/terpenes/">記事を読む</a></button>
    </div>
    <div class="custom-card-text">
      テルペンの香りや効果を詳しく解説。品種ごとの特徴やリラックス・集中などの違いを知り、大麻をより深く楽しむためのガイドです。
    </div>
  </div>

  <!-- Card 3 -->
  <div class="custom-card">
    <div class="custom-card-image-wrapper">
      <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/10/cannabis-3.jpg">
      <span class="custom-card-tag">コメント</span>
    </div>
    <div class="custom-card-content">
      <h3>タイでは健康に害がある体に悪い大麻がたくさん売られてる事実</h3>
      <button class="custom-card-button"><a href="https://ganjabonsai.com/smoking-info/chemical-weed-thailand-gacp-safety/">記事を読む</a></button>
    </div>
    <div class="custom-card-text">
      タイで広がる“ケミカルまみれ大麻”の実態を解説。法改正やGACP基準、安全な大麻の見極め方を現場視点でまとめた記事です。
    </div>
  </div>


	
</div>


		
		
		
        <div class="index-left">

            <ul>
                <!-- 記事が存在する場合 -->
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <li><a href="<?php the_permalink() ?>" class="post_links">
                            <span class="index-left-left"><?php the_post_thumbnail($post->ID); ?></span>
                            <h2 class="index-left-right"><?php the_title(); ?></h2>
                        </a></li>
                    <?php endwhile; ?>
                <!-- 記事が存在しない場合の表示 -->
                <?php else: ?>
                    <p class="noblog">該当する記事がありません。</p>
                <?php endif; ?>
            </ul>

            <!-- ページネーション -->
            <?php the_posts_pagination(array('prev_next' => false)); ?>
        </div>

        <div class="index-right">
            <?php get_template_part('side-1'); ?>
        </div>
    </div>
</div>

<?php get_template_part('must'); ?>
<?php get_footer(); ?>
