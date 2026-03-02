<?php
/**
 * 共通検索フォーム
 */
?>
<form role="search" method="get" class="gb-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input
    type="search"
    class="gb-search__field"
    name="s"
    value="<?php echo esc_attr( get_search_query() ); ?>"
    placeholder="キーワードで検索"
  />
  <button type="submit" class="gb-search__button">
    検索
  </button>
</form>
