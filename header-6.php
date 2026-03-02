７<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>

<!-- Styles -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/menu.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
  // タブ切り替え + スクロール
  function switchTabAndScroll(tabId, targetId) {
    $(tabId).prop('checked', true);
    setTimeout(function() {
      $('html, body').animate({ scrollTop: $(targetId).offset().top }, 800);
    }, 100);
  }
  $('#back-1-link').on('click', function(e){ e.preventDefault(); switchTabAndScroll('#programming', '#back-1'); });
  $('#back-2-link').on('click', function(e){ e.preventDefault(); switchTabAndScroll('#design', '#back-2'); });
  $('a[href="#back-1"]').on('click', function(e){ e.preventDefault(); switchTabAndScroll('#programming', '#back-1'); });
  $('a[href="#back-2"]').on('click', function(e){ e.preventDefault(); switchTabAndScroll('#design', '#back-2'); });

  // ページトップ
  var btn = $('.button');
  $(window).on('load scroll', function(){
    if($(this).scrollTop() > 100) btn.addClass('active'); else btn.removeClass('active');
  });
  btn.on('click', function(){ $('body,html').animate({scrollTop: 0}, 800); });

  // ハンバーガー
  $('#header-hamburger').on('click', function(){
    $(this).toggleClass('active');
    $('#hamburger-window').toggleClass('open');
  });

  // ヘッダーの出し入れ
  var lastScrollTop = 0;
  var headerHeight = $('#header').outerHeight();
  $(window).on('scroll', function() {
    var currentScrollTop = $(this).scrollTop();
    if (currentScrollTop > lastScrollTop && currentScrollTop > headerHeight) {
      $('#header').css('top', '-' + headerHeight + 'px');
    } else if (currentScrollTop < lastScrollTop) {
      $('#header').css('top', '0');
    }
    lastScrollTop = currentScrollTop;
  });

  // スクロールヒント
  const scrollContainers = document.querySelectorAll('.table-container, .custom-image-container, .button-image-container, .scroll_list, .review-wrapper');
  scrollContainers.forEach(function(container) {
    const scrollHint = container.querySelector('.scroll-hint, .custom-scroll-hint, .button-scroll-hint');
    if (scrollHint) {
      container.addEventListener('scroll', function() {
        scrollHint.style.opacity = '0';
        setTimeout(function(){ scrollHint.style.display = 'none'; }, 500);
      });
      scrollHint.style.animation = 'shake 1.5s ease-in-out infinite';
    }
  });

  // Swiper（統合された設定）
  var mySwiper = new Swiper('.swiper-container', {
    slidesPerView: 5,
    spaceBetween: 20,
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    pagination: { el: '.swiper-pagination', type: 'bullets', clickable: true },
    scrollbar: { el: '.swiper-scrollbar', draggable: true },
    autoplay: { delay: 3000 },
    loop: true,
    breakpoints: {
      1024: { slidesPerView: 5 },
      768:  { slidesPerView: 3 },
      480:  { slidesPerView: 1 }
    }
  });

  // ランダム表示
  (function($){
    $.fn.extend({
      randomdisplay: function(num) {
        return this.each(function() {
          var chn = $(this).children().hide().length;
          for (var i = 0; i < num && i < chn; i++) {
            var r = parseInt(Math.random() * (chn - i)) + i;
            $(this).children().eq(r).show().prependTo($(this));
          }
        });
      }
    });
    $("[randomdisplay]").each(function(){
      $(this).randomdisplay($(this).attr("randomdisplay"));
    });
  })(jQuery);
});
</script>

<!-- Google tag (gtag.js) – single load, multiple configs -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J4BP7SQGXW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){ dataLayer.push(arguments); }
  gtag('js', new Date());
  // 2つのプロパティに送信
  gtag('config', 'G-J4BP7SQGXW');
  gtag('config', 'G-00FVSDDV1G');
</script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1234567890123456" crossorigin="anonymous"></script>	
	
<?php wp_head(); ?>
</head>

<body>

	<div id="header">
		<div class="header-ledt">
			<p class="header-h1">タイ発！大麻を”医療”として使う人向けのWebメディア</p>
			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png"></a>
		</div>
		
		
<!-- ヘッダー -->
<div id="header-menu" class="header-menu sma">


<?php get_template_part('sma-menu'); ?>

	  
</div>			
				
		
		<div class="header-right pc">
			<ul class="header-right-left">
				<li><a href="/">Home</a></li>
				<li><a href="https://ganjabonsai.com/category/smoking-info/">始めての医療大麻</a></li> 
				<li><a href="https://ganjabonsai.com/category/cannabis-clinic/">大麻薬局特集</a></li> 
				<li><a href="https://ganjabonsai.com/tag/summary-article/">まとめ記事</a></li> 
				<li><a href="https://ganjabonsai.com/ganjabonsai-gallery/">大麻盆栽ギャラリー</a></li>
				<li><a href="https://ganjabonsai.com/category/organicgangsta/">オーガニックギャングスター</a></li>
			</ul>
			<ul class="header-right-right">
				<li class="header-contact"><a href="https://ganjabonsai.com/line/">Line相談</a></li>
			</ul>		
		</div>						
	</div>
	
	
<div class="fixed-wrap">
  <div class="fixed">
    <div class="fixed-cat">
      <p class="category-name">
        <?php
        global $wp_query;

        // 記事数（検索もカテゴリも共通）
        $post_count = isset( $wp_query->found_posts ) ? $wp_query->found_posts : 0;

        // タイトル部分
        if ( is_category() ) {
          $current_cat = get_queried_object();
          $title_text  = ( $current_cat && ! is_wp_error( $current_cat ) )
            ? $current_cat->name
            : '';
        } elseif ( is_search() ) {
          // 検索結果ページ
          $title_text = '「' . get_search_query() . '」の検索結果';
        } else {
          // それ以外のアーカイブなど
          $title_text = wp_get_document_title();
        }
        ?>

        <?php echo esc_html( $title_text ); ?>
        <span class="index-tag">の記事</span>
        <span class="post-count">合計<?php echo esc_html( $post_count ); ?>件</span>
      </p>
    </div>
  </div>
</div>
