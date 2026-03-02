<?php
/*
Template Name: サービス
*/
?>

<?php get_header(4); ?>


<main>
	<br clear="all">
	        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display')) {
                bcn_display();
            }?>
        </div> 
	<br clear="all">
<label class="selectbox-3">	
<select id="selectBox" onchange="showContent()">
  <option value="content1" selected>パタヤ観光サポート一覧</option> <!-- コンテンツ1を初期選択状態に -->
  <option value="content2">パタヤ移住サポート一覧</option>
  <option value="content3">その他</option>
</select>
</label>
<div id="content1" class="content" style="display:block;">
<ul class="list-9">
    <li>パタヤ観光サポートの項目1</li>
    <li>パタヤ観光サポートの項目2</li>
    <li>パタヤ観光サポートの項目3</li>
</ul>		
</div> <!-- 初期表示 -->
<div id="content2" class="content" style="display:none;">
<ul class="list-9">
    <li>パタヤ移住サポートの項目1</li>
    <li>パタヤ移住サポートの項目2</li>
    <li>パタヤ移住サポートの項目3</li>
</ul>	
</div>
<div id="content3" class="content" style="display:none;">
<ul class="list-9">
    <li>その他の項目1</li>
    <li>その他の項目2</li>
    <li>その他の項目3</li>
</ul>	
</div>

	
</main>

<br clear="all">


<?php get_footer(); ?>