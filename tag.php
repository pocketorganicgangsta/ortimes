<?php
/**
 * Template: tag.php
 * シーン用タグはカスタムレイアウト、それ以外は従来テンプレ
 */

$qo = get_queried_object();
$current_slug = isset($qo->slug) ? $qo->slug : '';

// ▼ スラッグが「scene-」で始まるタグだけカスタム表示
if ( strpos( $current_slug, 'scene-' ) === 0 ) :

    get_header(5);
?>
<!-- ここから下は、いま書いているシーン用タグのレイアウトそのまま -->
<div id="content" class="single-contents">
  <div class="strain-layout">
    <div class="strain-main strain-main1">

      <?php if ( function_exists( 'bcn_display' ) ) : ?>
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php bcn_display(); ?>
        </div>
      <?php endif; ?>

      <section class="strain-archive-list">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php
            $name = get_field('strain-name');
            $meta = get_field('strain-meta');
            $desc = get_field('strain-desc');
            $source = $desc ? $desc : wp_strip_all_tags( get_the_content() );

            $scene_tags = array();
            $tags = get_the_tags();
            if ( $tags ) {
              foreach ( $tags as $tag ) {
                if ( strpos( $tag->slug, 'scene-' ) === 0 ) {
                  $scene_tags[] = $tag;
                }
              }
            }
          ?>

          <article class="strain-hero strain-archive-card">
            <div class="strain-hero-inner">

              <figure class="strain-hero-thumb">
                <a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail() ) the_post_thumbnail('large'); ?>
                </a>
              </figure>

              <div class="strain-hero-body">
                <p class="strain-hero-label">STRAIN PROFILE</p>

                <h2 class="strain-hero-name">
                  <?php echo $name ? esc_html($name) : get_the_title(); ?>
                </h2>

                <?php if ( ! empty( $scene_tags ) ) : ?>
                  <ul class="strain-scene-list">
                    <?php foreach ( $scene_tags as $tag ) : ?>
                      <li class="strain-scene-item">
                        <a href="<?php echo esc_url( get_tag_link( $tag ) ); ?>" class="strain-scene-pill">
                          <?php echo esc_html( $tag->name ); ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>

                <?php if ( $meta ) : ?>
                  <p class="strain-hero-meta"><?php echo esc_html($meta); ?></p>
                <?php endif; ?>

                <div class="strain-archive-excerpt-wrapper">
                  <p class="strain-archive-excerpt">
                    <?php echo nl2br( esc_html($source) ); ?>
                  </p>
                </div>

                <a href="<?php the_permalink(); ?>" class="strain-archive-readmore">
                  詳細を読む
                </a>

              </div>
            </div>
          </article>

        <?php endwhile; ?>

          <div class="strain-archive-pagination">
            <?php the_posts_pagination(); ?>
          </div>

        <?php else : ?>
          <p class="related-one-none">このタグにはまだ記事がありません。</p>
        <?php endif; ?>

      </section>

    </div>

    <aside class="strain-sidebar">
      <h2 class="strain-side-title">シチュエーションで探す</h2>

      <div class="strain-tags-list">

        <a href="https://ganjabonsai.com/tag/scene-creative-time" class="tag-card">
          <div class="tag-card-title">創作タイム</div>
          <div class="tag-card-desc">クリエイティブ脳が冴える</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-social-mode" class="tag-card">
          <div class="tag-card-title">社交モード</div>
          <div class="tag-card-desc">人と話すのが楽しくなる</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-day-high" class="tag-card">
          <div class="tag-card-title">昼ハイ</div>
          <div class="tag-card-desc">外出やアクティブなシーン向け</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-night-chill" class="tag-card">
          <div class="tag-card-title">夜チル</div>
          <div class="tag-card-desc">落ち着いた静かな夜に最適</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-midnight-inner-trip" class="tag-card">
          <div class="tag-card-title">深夜のインナートリップ</div>
          <div class="tag-card-desc">感覚が鋭くなる系</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-movie-time" class="tag-card">
          <div class="tag-card-title">映画タイム</div>
          <div class="tag-card-desc">感情移入が高まる</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-deep-sleep-mode" class="tag-card">
          <div class="tag-card-title">熟睡モード</div>
          <div class="tag-card-desc">睡眠の質を上げたい時</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-mental-detox" class="tag-card">
          <div class="tag-card-title">心のデトックス</div>
          <div class="tag-card-desc">情緒を整えたい時</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-focus-work" class="tag-card">
          <div class="tag-card-title">集中ワーク</div>
          <div class="tag-card-desc">タスクをこなしたい時</div>
        </a>


      </div>
    </aside><!-- /.strain-sidebar -->

  </div>
</div>

<?php get_footer(3); ?>

<?php
// ▼▼ ここまでシーン用タグ ▼▼
else :

  // それ以外のタグは従来テンプレートへ
  get_template_part('tag', 'default');

endif;
