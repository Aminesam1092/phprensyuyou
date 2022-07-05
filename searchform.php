<form name="searchForm" method="get" action="<?php bloginfo('url');//トップページのURLを指定 ?>">
  <label>
    <input type="search" name="s">
    <input type="image" alt="検索" src="<?php echo get_theme_file_uri();//現在利用しているテーマフォルダーを推奨する絶対パスを返す ?>/images/search.svg">
  </label>
</form>