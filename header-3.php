<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

<title><?php wp_title('|', true, 'right'); ?></title>

<!-- Styles -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/menu.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">   <!-- Reset -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<!-- Icon Fonts -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Google tag (gtag.js) – single load, multi-config -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J4BP7SQGXW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){ dataLayer.push(arguments); }
  gtag('js', new Date());
  // Send to both properties
  gtag('config', 'G-J4BP7SQGXW');
  gtag('config', 'G-00FVSDDV1G');
</script>

<!-- Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

<script>
jQuery(function($){
  // タブ切り替え + スクロール
  function switchTabAndScroll(tabId, targetId) {
    $(tabId).prop('checked', true);
    setTimeout(function(){
      $('html, body').animate({ scrollTop: $(targetId).offset().top }, 800);
    }, 100);
  }
  $('#back-1-link').on('click', function(e){ e.preventDefault(); switchTabAndScroll('#programming', '#back-1'); });
  $('#back-2-link').on('click', function(e){ e.preventDefault(); switchTabAndScroll('#design', '#back-2'); });
  $('a[href="#back-1"]').on('click', function(e){ e.preventDefault(); switchTabAndScroll('#programming', '#back-1'); });
  $('a[href="#back-2"]').on('click', function(e){ e.preventDefault(); switchTabAndScroll('#design', '#back-2'); });

  // ページトップボタン
  var btn = $('.button');
  $(window).on('load scroll', function(){
    if ($(this).scrollTop() > 100) btn.addClass('active'); else btn.removeClass('active');
  });
  btn.on('click', function () { $('html, body').animate({ scrollTop: 0 }, 800); });

  // ハンバーガー
  $('#header-hamburger').on('click', function(){
    $(this).toggleClass('active');
    $('#hamburger-window').toggleClass('open');
    $('body').toggleClass('fixed-header', $('#hamburger-window').hasClass('open'));
  });

  // スクロール時のヘッダー出し入れ
  var lastScrollTop = 0;
  var headerHeight = $('#header').outerHeight();
  $(window).on('scroll', function(){
    if (!$('body').hasClass('fixed-header')) {
      var s = $(this).scrollTop();
      if (s > lastScrollTop && s > headerHeight) $('#header').css('top', '-' + headerHeight + 'px');
      else if (s < lastScrollTop) $('#header').css('top', '0');
      lastScrollTop = s;
    }
  });

  // スクロールヒント
  document.querySelectorAll('.table-container, .custom-image-container, .button-image-container, .scroll_list, .review-wrapper')
    .forEach(function(container){
      var hint = container.querySelector('.scroll-hint, .custom-scroll-hint, .button-scroll-hint');
      if (!hint) return;
      container.addEventListener('scroll', function(){
        hint.style.opacity = '0';
        setTimeout(function(){ hint.style.display = 'none'; }, 500);
      });
      hint.style.animation = 'shake 1.5s ease-in-out infinite';
    });

  // Swiper 初期化（現状維持：2回）
  var mySwiper = new Swiper('.swiper-container', {
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    pagination: { el: '.swiper-pagination', type: 'bullets', clickable: true },
    scrollbar: { el: '.swiper-scrollbar', draggable: true }
  });
  var mySwiper = new Swiper('.swiper-container', {
    autoplay: { delay: 3000 }
  });

  // ランダム表示
  (function($){
    $.fn.extend({
      randomdisplay: function(num){
        return this.each(function(){
          var chn = $(this).children().hide().length;
          for (var i=0; i<num && i<chn; i++) {
            var r = parseInt(Math.random() * (chn - i)) + i;
            $(this).children().eq(r).show().prependTo($(this));
          }
        });
      }
    });
    $('[randomdisplay]').each(function(){
      $(this).randomdisplay($(this).attr('randomdisplay'));
    });
  })(jQuery);
});
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
	

</div>
