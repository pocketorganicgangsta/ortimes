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

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Google tag (gtag.js) – single load with multi-config -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J4BP7SQGXW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){ dataLayer.push(arguments); }
  gtag('js', new Date());
  gtag('config', 'G-J4BP7SQGXW');  // 1つ目のプロパティ
  gtag('config', 'G-00FVSDDV1G');  // 2つ目のプロパティ
</script>

<!-- Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
  function switchTabAndScroll(tabId, targetId) {
    $(tabId).prop('checked', true);
    setTimeout(function() {
      $('html, body').animate({ scrollTop: $(targetId).offset().top }, 800);
    }, 100);
  }

  // タブリンク
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
  });

  // ヘッダーのスクロール制御
  var lastScrollTop = 0;
  var headerHeight = $('#header').outerHeight();
  $(window).on('scroll', function(){
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
    $("[randomdisplay]").each(function() {
      $(this).randomdisplay($(this).attr("randomdisplay"));
    });
  })(jQuery);
});
	
jQuery(function($){

  // ------- 行テンプレ -------
  function newItemGroupHtml(){
    return (
      '<div class="item-group">' +
        '<label>Item:</label>' +
        '<select name="item[]">' +
          '<option value="">Select Item</option>' +
          '<option value="Aroi Mak Water Pipe">Aroi Mak Water Pipe</option>' +
          '<option value="Aroi Mak Filter Set">Aroi Mak Filter Box Set</option>' +
          '<option value="Aroi Mak Filter Joint Set">Aroi Mak Filter Joint Set</option>' +
        '</select>' +
        '<label>Quantity:</label>' +
        '<input type="number" name="qty[]" min="1" max="100" value="1">' +
      '</div>'
    );
  }

  // ------- サマリー作成 -------
  function buildAndSetSummary(){
    var lines = [];
    $('#item-wrapper .item-group').each(function(){
      var item = $(this).find('select[name="item[]"]').val();
      var qty  = $(this).find('input[name="qty[]"]').val();
      if (item && qty && Number(qty) > 0) lines.push(item + ' × ' + qty);
    });
    var summary = lines.join('\n');
    $('#dynamic_item_list_field').val(summary);
    $('#dynamic_item_list_preview').text(summary);
  }

  // ------- remove管理 -------
  function ensureRemoveButtons(){
    var $groups = $('#item-wrapper .item-group');
    if ($groups.length <= 1){
      $groups.removeClass('has-remove').find('.remove-item-btn').remove();
    } else {
      $groups.each(function(){
        var $g = $(this);
        if (!$g.find('.remove-item-btn').length){
          $g.append('<button type="button" class="remove-item-btn">remove</button>');
        }
        $g.addClass('has-remove');
      });
    }
  }

  // ------- 追加（委譲）-------
  $('body').on('click', '#add-item-btn, .js-add-item', function(e){
    e.preventDefault(); e.stopPropagation();
    // クリック確認（コンソールで確認できる）:
    // console.log('add clicked');
    $('#item-wrapper').append( newItemGroupHtml() );
    ensureRemoveButtons();
    buildAndSetSummary();
    return false;
  });

  // ------- 削除（委譲）-------
  $('body').on('click', '.remove-item-btn', function(e){
    e.preventDefault(); e.stopPropagation();
    $(this).closest('.item-group').remove();
    ensureRemoveButtons();
    buildAndSetSummary();
    return false;
  });

  // ------- 値変更でサマリー更新 -------
  $('body').on('input change',
    '#item-wrapper select[name="item[]"], #item-wrapper input[name="qty[]"]',
    buildAndSetSummary
  );

  // ------- 初期化 -------
  ensureRemoveButtons();
  buildAndSetSummary();

  // ------- 送信直前（CF7 Ajax送信前）-------
  document.addEventListener('submit', function(e){
    var form = e.target;
    if (form && form.matches('.wpcf7 form')) buildAndSetSummary();
  }, true);	
	
	}); // ★これが抜けていました！

jQuery(function($){
  // CF7 が差し込んだ <p> と <br> を #item-wrapper 内だけ除去して構造を揃える
  function normalizeCF7Autop(){
    $('#item-wrapper .item-group p').contents().unwrap(); // <p> を剥がす
    $('#item-wrapper .item-group br').remove();           // <br> を削除
  }

  // 初期化と、行追加の直後に必ず呼ぶ
  normalizeCF7Autop();
  $(document).on('click', '#add-item-btn, .js-add-item', function(){
    // ... 既存の行追加処理の直後に:
    normalizeCF7Autop();
  });
});

// ------- remove管理（常に末尾へ移動してグリッド rm に載せる）-------
function ensureRemoveButtons(){
  $('#item-wrapper .item-group').each(function(){
    var $g = $(this);
    var $btn = $g.find('.remove-item-btn');

    if ($g.siblings('.item-group').length === 0) {
      // 1行しかない → remove は出さない
      $btn.remove();
      return;
    }

    if ($btn.length === 0){
      $btn = $('<button type="button" class="remove-item-btn">remove</button>');
      $g.append($btn);
    } else {
      // 途中に入っていたら必ず末尾へ移動（セル被り防止）
      $g.append($btn);
    }
  });
}

	
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
