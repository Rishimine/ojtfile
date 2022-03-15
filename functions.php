<?php
// 投稿ページにサムネイルを投稿する方法
add_theme_support("post-thumbnails");

function wphead_cb() {
    echo '<style type="text/css">';
    echo '.topimg-pc h1, .topimg-pc h6 { color: #'.get_header_textcolor().' }';
    echo '</style>';
  }
  
  // カスタムヘッダー
  $custom_header = array(
  'random-default' => false,
  'width' => 1000,
  'height' => 300,
  'flex-height' => true,
  'flex-width' => true,
  'default-text-color' => '',
  'header-text' => true,
  'uploads' => true,
  // ヘッダーテキストのデフォルトの色
    'default-text-color' => '000',
    'wp-head-callback' => 'wphead_cb',
                           // デフォルト画像へのパス
  'default-image' => get_bloginfo('template_url').'/src/img/top_img.jpg',
  'admin-head-callback'    => '',      // 管理画面で、[外観 - カスタマイズ]をプレビューするためのコールバック
      'admin-preview-callback' => '',
  );
  add_theme_support( 'custom-header', $custom_header );
?>