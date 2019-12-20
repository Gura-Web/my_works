<?php
	// タイトル表示
	add_theme_support( 'title-tag' );
	function title_sep( $sep ){
		$sep = '|';
		return $sep;
	}
	add_filter( 'document_title_separator', 'title_sep' );

	
	// アイキャッチ画像を使用可能に
	add_theme_support('post-thumbnails');
	// カスタムメニューを使用可能に
	add_theme_support('menus');
	
	// css読み込み
	function register_stylesheet() {
		wp_register_style('style', get_template_directory_uri().'/css/style.css');
	}
	function add_stylesheet() {
		register_stylesheet();
		wp_enqueue_style('style', '', array(), '1.0', false);
	}
	add_action('wp_enqueue_scripts', 'add_stylesheet');
	// js読み込み
	function register_script(){
		wp_register_script('slick', get_template_directory_uri().'/js/slick.js');
		wp_register_script('script', get_template_directory_uri().'/js/script.js');
	}
	function add_script(){
		register_script();
		wp_enqueue_script('slick', '', array(), '1.0', false);
		wp_enqueue_script('script', '', array(), '1.0', false);
	}
	add_action('wp_print_scripts','add_script');

	// ショートコード　目次
	function create_table4($atts) {
		$atts = shortcode_atts(array(
			'list_item1' => ' ',
			'list_item2' => ' ',
			'list_item3' => ' ',
			'list_item4' => ' ',
		), $atts);
		extract($atts);
		return '<div class="table-contents">
		<h3 class="table-contents__ttl">目次</h3>
		<ol class="table-contents__lists">
			<li class="table-contents__list"><span class="red">1</span>. '. $list_item1 .'</li>
			<li class="table-contents__list"><span class="red">3</span>. '. $list_item3 .'</li>
			<li class="table-contents__list"><span class="red">2</span>. '. $list_item2 .'</li>
			<li class="table-contents__list"><span class="red">4</span>. '. $list_item4 .'</li>
		</ol>
	</div>';
	}
	add_shortcode('table4', 'create_table4');
	// ショートコード　見出し
	function heading($atts) {
		$atts = shortcode_atts(array(
			'num' => '1',
			'ttl' => ' ',
		), $atts);
		extract($atts);
		return '<h3><span>'.$num.'</span>. '.$ttl.'</h3>';
	}
	add_shortcode('head', 'heading');


	// 画像パスをエディタのほうで簡単に
	function replaceImagePath($arg) {
		$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
		return $content;
	}  
	add_action('the_content', 'replaceImagePath');

		

	//canonical削除
	remove_action('wp_head', 'rel_canonical');
	// 固定ページに抜粋欄を追加
	add_post_type_support( 'page', 'excerpt' );
	// 記事とカテゴリ、タグページの抜粋に<p>タグをつけない
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('term_description','wpautop');
	remove_filter('the_content', 'wpautop'); 
?>