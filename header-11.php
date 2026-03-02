<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

<title><?php wp_title('|', true, 'right'); ?></title>

<!-- Styles -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/menu.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<!-- Google Material Icons -->
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
$(document).ready(function() {

  /* =============================
     タブ切り替えとスクロール
  ============================= */
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


  /* =============================
      トップへ戻るボタン
  ============================= */
  var btn = $('.button, .button1');
  $(window).on('load scroll', function(){
    if ($(this).scrollTop() > 100) btn.addClass('active');
    else btn.removeClass('active');
  });
  btn.on('click', function () {
    $('html, body').animate({ scrollTop: 0 }, 800);
  });


  /* =============================
      ハンバーガーメニュー
  ============================= */
  $('#header-hamburger').on('click', function(){
    $(this).toggleClass('active');
    $('#hamburger-window').toggleClass('open');
    $('body').toggleClass('fixed-header', $('#hamburger-window').hasClass('open'));
  });


  /* =============================
      ヘッダーのスクロール制御
  ============================= */
  var lastScrollTop = 0;
  var headerHeight = $('#header').outerHeight();
  $(window).on('scroll', function(){
    if (!$('body').hasClass('fixed-header')) {
      var current = $(this).scrollTop();
      if (current > lastScrollTop && current > headerHeight) {
        $('#header').css('top', '-' + headerHeight + 'px');
      } else if (current < lastScrollTop) {
        $('#header').css('top', '0');
      }
      lastScrollTop = current;
    }
  });


  /* =============================
      スクロールヒント
  ============================= */
  const scrollContainers = document.querySelectorAll(
    '.table-container, .custom-image-container, .button-image-container, .scroll_list, .review-wrapper, .custom-scroll-area'
  );
  scrollContainers.forEach(function(container) {
    const scrollHint = container.querySelector(
      '.scroll-hint, .custom-scroll-hint, .custom-scroll-hint1, .button-scroll-hint'
    );
    if (scrollHint) {
      container.addEventListener('scroll', function() {
        scrollHint.style.opacity = '0';
        setTimeout(function() { scrollHint.style.display = 'none'; }, 500);
      });
      scrollHint.style.animation = 'shake 1.5s ease-in-out infinite';
    }
  });


  /* =============================
      Swiper（既存を維持）
  ============================= */
  var mySwiper = new Swiper('.swiper-container', {
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    pagination: { el: '.swiper-pagination', type: 'bullets', clickable: true },
    scrollbar: { el: '.swiper-scrollbar', draggable: true }
  });
  var mySwiper = new Swiper('.swiper-container', {
    autoplay: { delay: 3000 }
  });


  /* =============================
      ★ ランダム表示（Aから1つ + Bから3つ）
      ※ 既存ロジック保持
  ============================= */
  const groupA = Array.from(document.querySelectorAll("#groupA li"));
  const groupB = Array.from(document.querySelectorAll("#groupB li"));

  if (groupA.length && groupB.length) {

    function shuffle(arr) {
      for (let i = arr.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
      }
      return arr;
    }

    const pickA = shuffle(groupA).slice(0, 1);
    const pickB = shuffle(groupB).slice(0, 3);
    const finalCards = [...pickB, ...pickA];

    const output = document.getElementById("dispensary-random");
    if (output) {
      finalCards.forEach(item => {
        output.appendChild(item.cloneNode(true));
      });
    }
  }



  /* ========================================================
        ★ 共通シャッフル関数（セクションごとに使う）
  ======================================================== */
  function shuffleDispensaryByTitle(titleText) {

    var $section = $('.custom-category-section').filter(function() {
      var title = $(this).find('h2').first().text().trim();
      return title === titleText;
    });

    if (!$section.length) return;

    var $container = $section.find('.custom-scroll-area').first();
    if (!$container.length) return;

    var cards = $container.find('.custom-tour-card').toArray();
    if (cards.length <= 1) return;

    // シャッフル
    for (var i = cards.length - 1; i > 0; i--) {
      var j = Math.floor(Math.random() * (i + 1));
      var tmp = cards[i];
      cards[i] = cards[j];
      cards[j] = tmp;
    }

    // 並べ替え
    $(cards).each(function(_, el) {
      $container.append(el);
    });
  }




(() => {
  const rails = document.querySelectorAll(".ogx-latestRail[data-ogx-latest-rail]");
  if (!rails.length) return;

  rails.forEach((rail) => {
    const track = rail.querySelector(".ogx-latestRail__track");
    if (!track) return;

    const btnR = rail.querySelector(".ogx-latestRail__arrow--right");
    const btnL = rail.querySelector(".ogx-latestRail__arrow--left");

    const getStep = () => {
      const card = track.querySelector(".ogx-latestCard");
      if (!card) return 360;
      const styles = getComputedStyle(track);
      const gap = parseFloat(styles.gap || styles.columnGap || "0") || 0;
      return card.getBoundingClientRect().width + gap;
    };

    const updateArrowState = () => {
      const max = track.scrollWidth - track.clientWidth;
      const x = track.scrollLeft;
      if (btnL) btnL.style.opacity = (x <= 2) ? "0" : "1";
      if (btnR) btnR.style.opacity = (x >= max - 2) ? "0" : "1";
    };

    if (btnR) btnR.addEventListener("click", (e) => {
      e.preventDefault();
      track.scrollBy({ left: getStep(), behavior: "smooth" });
    });

    if (btnL) btnL.addEventListener("click", (e) => {
      e.preventDefault();
      track.scrollBy({ left: -getStep(), behavior: "smooth" });
    });

    track.addEventListener("scroll", updateArrowState, { passive: true });
    window.addEventListener("resize", updateArrowState);
    updateArrowState();
  });
})();



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
	
