<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>

<!-- Styles -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/menu.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

<!-- Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J4BP7SQGXW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-J4BP7SQGXW');
</script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

<script>
jQuery(function($){

  /* ------------------------------
     メディアタブ切り替え
  ------------------------------ */
  $('.media-tabs input[type="radio"], .media-tabs-2 input[type="radio"]').on('change', function() {
    var tabId = $(this).attr('id');
    var contentId = '#' + tabId
      .replace('photos-', 'photos_content_')
      .replace('videos-', 'videos_content_')
      .replace('maps-', 'maps_content_');
    $(this).closest('.media-tabs, .media-tabs-2')
      .find('.media-tab_content, .media-tab_content2').hide();
    $(contentId).show();
  });

  $('.media-tabs input[type="radio"]:checked, .media-tabs-2 input[type="radio"]:checked').each(function() {
    var tabId = $(this).attr('id');
    var contentId = '#' + tabId
      .replace('photos-', 'photos_content_')
      .replace('videos-', 'videos_content_')
      .replace('maps-', 'maps_content_');
    $(contentId).show();
  });

  /* ------------------------------
     トップへ戻るボタン表示制御
  ------------------------------ */
  var btn = $('.button1');
  $(window).on('scroll', function(){
    $(this).scrollTop() > 100 ? btn.addClass('active') : btn.removeClass('active');
  });

  /* ------------------------------
     フッター固定エリアの出し入れ
  ------------------------------ */
  var footer = $('.kotei-container'), isScrolling;
  $(window).on('scroll', function() {
    var mustListOffset = $('#cf7-area').offset() ? $('#cf7-area').offset().top : Infinity;
    var scrollPos = $(this).scrollTop() + $(window).height();
    footer.removeClass('visible').addClass('hidden');
    clearTimeout(isScrolling);
    isScrolling = setTimeout(function() {
      if (scrollPos < mustListOffset) footer.removeClass('hidden').addClass('visible');
    }, 300);
  });

  /* ------------------------------
     ヘッダー出し入れ＋ハンバーガー開閉
  ------------------------------ */
  var lastScrollTop = 0;
  var header = $('#header');
  var headerHeight = header.outerHeight();
  var isMenuOpen = false;

  $(window).on('scroll', function() {
    if (!isMenuOpen) {
      var s = $(this).scrollTop();
      if (s > lastScrollTop && s > headerHeight)
        header.css('top', '-' + headerHeight + 'px');
      else if (s < lastScrollTop)
        header.css('top', '0');
      lastScrollTop = s;
    }
  });

  $('#header-hamburger').on('click', function() {
    $(this).toggleClass('active');
    $('#hamburger-window').toggleClass('open');
    isMenuOpen = $('#hamburger-window').hasClass('open');
    $('body').toggleClass('fixed-header', isMenuOpen);
  });

  /* ------------------------------
     Swiper設定
  ------------------------------ */
  var mySwiper = new Swiper('.swiper-container', {
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    pagination: { el: '.swiper-pagination', type: 'bullets', clickable: true },
    scrollbar: { el: '.swiper-scrollbar', draggable: true },
    autoplay: { delay: 3000 },
    loop: true
  });

  /* =============================
      ★ ランダム表示（Aから1つ + Bから3つ）
  ============================= */

  // Aグループ / Bグループの li を取得
  const groupA = Array.from(document.querySelectorAll("#groupA li"));
  const groupB = Array.from(document.querySelectorAll("#groupB li"));

  // グループが存在しない場合は終了
  if (!groupA.length || !groupB.length) {
    console.warn("groupA または groupB の要素が存在しません");
  } else {

    // シャッフル関数（Fisher–Yates）
    function shuffle(arr) {
      for (let i = arr.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
      }
      return arr;
    }

    // ▼ Aから1つ、Bから3つをピック
    const pickA = shuffle(groupA).slice(0, 1);
    const pickB = shuffle(groupB).slice(0, 3);

    // ▼ 表示順を「B → A」にする（B3つ → A1つ）
    const finalCards = [...pickB, ...pickA];

    // ▼ 出力先 UL
    const output = document.getElementById("dispensary-random");

    // ▼ 各カードを複製して追加
    if (output) {
      finalCards.forEach(item => {
        output.appendChild(item.cloneNode(true));
      });
    }
  }

  /* ========================================================
        ★ 共通シャッフル関数（ディスペンサリーセクション用）
        h2 のタイトルテキストでセクションを特定
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

    // シャッフル（Fisher–Yates）
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

  /* ========================================================
        ★ 3つのディスペンサリーセクションを独立シャッフル
  ======================================================== */

  // ① 個人的にオススメのディスペンサリー
  shuffleDispensaryByTitle('個人的にオススメのディスペンサリー');

  // ② バンコクにあるオススメのディスペンサリー
  shuffleDispensaryByTitle('バンコクにあるオススメのディスペンサリー');

  // ③ パタヤにあるオススメのディスペンサリー
  shuffleDispensaryByTitle('パタヤにあるオススメのディスペンサリー');

  /* ------------------------------
     目次開閉
  ------------------------------ */
  function updateTocState() {
    var el = $('.toc-001')[0];
    if (!el) return;
    var tocHeight = el.scrollHeight;
    if (tocHeight > 350) {
      $('.toggle-button').show();
      $('.toc-001').addClass('gradient-visible').css('padding-bottom','3em');
    } else {
      $('.toggle-button').hide();
      $('.toc-001').removeClass('gradient-visible').css('padding-bottom','0');
    }
  }
  updateTocState();
  $(".toggle-button").click(function(){
    $(".toc-001").toggleClass("toc-expanded");
    $(this).text($(this).text() === '閉じる' ? '全ての目次を表示' : '閉じる');
    updateTocState();
  });
  $(window).resize(updateTocState);

  /* ------------------------------
     同一ページ内アンカー補正
  ------------------------------ */
  function headerH(){ return $('#header').outerHeight() || 0; }

  $(document).on('click', 'a[href^="#"]:not([href="#"])', function(e){
    var id = this.hash;
    if (!id) return;
    var $t = $(id);
    if (!$t.length) return; // ターゲット無ければ何もしない
    e.preventDefault();
    var y = $t.offset().top - headerH() - 8;
    $('html, body').stop(true).animate({scrollTop: y}, 600);
  });

  function scrollToHashIfAny(){
    if (location.hash) {
      var $t = $(location.hash);
      if ($t.length) {
        setTimeout(function(){
          var y = $t.offset().top - headerH() - 8;
          window.scrollTo({ top: y, behavior: 'instant' });
        }, 0);
      }
    }
  }
  scrollToHashIfAny();
  window.addEventListener('hashchange', scrollToHashIfAny);

  /* ------------------------------
     スクロールヒント消去
  ------------------------------ */
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
        setTimeout(function(){ scrollHint.style.display = 'none'; }, 500);
      });
      scrollHint.style.animation = 'shake 1.5s ease-in-out infinite';
    }
  });

  /* ------------------------------
     LINEリンクで一瞬スクロールしてしまう問題の修正版
  ------------------------------ */

  // aタグクリック時はトップ処理を完全停止
  $(document).on('click', '.button1 a', function(e){
    e.stopPropagation();
    e.stopImmediatePropagation(); // 他のclickイベントも即停止
  });

  // コンテナ自体（空白部クリック）のみトップへ戻る
  $(document).on('click', '.button1', function(e){
    if ($(e.target).closest('a').length) return; // 子リンク押下時は無視
    $('html, body').animate({ scrollTop: 0 }, 800);
  });

});
</script>



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
