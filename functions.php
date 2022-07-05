<?php
function add_files(){
  //CSSファイルおよびJSファイルの展開
  wp_enqueue_style('google-font','https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap');//Google-font用のCSSを読み込む
  wp_enqueue_style('main',get_stylesheet_uri());//style.cssを読み込む
  wp_enqueue_script('main-script',get_theme_file_uri().'/js/main.js',array(),'',true);//main.jsファイルを読み込む
}
add_action('wp_enqueue_scripts','add_files');

function theme_setup(){
  //自分で関数名は付与してOK
  add_theme_support('title-tag');//タイトルタグを有効にする
  add_theme_support('post-thumbnails');//アイキャッチ画像を有効にする
}
add_action('after_setup_theme','theme_setup');//フックポイントを指定して実行したい関数を指定する

function change_posts_per_page($query) {
  //ページ毎に表示投稿数などを変更する
  if( is_admin() || ! $query->is_main_query()){
    return;
  }
    //トップページの投稿表示件数を9件にする
    if( $query->is_home()){
      $query->set('posts_per_page','9');
      //$query->set()は複数利用可能
    }
    
}
add_action('pre_get_posts','change_posts_per_page');