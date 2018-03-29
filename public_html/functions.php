<?php
//現在のページ数の取得
function show_page_number() {
    global $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $max_page = $wp_query->max_num_pages;
    return $paged;  
}

//総ページ数の取得
function max_show_page_number() {
    global $wp_query;
    $max_page = $wp_query->max_num_pages;
    return $max_page;  
}

// ページャーにクラス付与
add_filter( 'previous_posts_link_attributes', 'add_prev_posts_link_class' );
function add_prev_posts_link_class() {
  return 'class="page-numbers prev"';
}
add_filter( 'next_posts_link_attributes', 'add_next_posts_link_class' );
function add_next_posts_link_class() {
  return 'class="page-numbers next"';
}

// ページャーの設定
function pager() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer

    if(show_page_number() == '1'): echo '<div class="page-numbers prev nolink"></div>';
    else: previous_posts_link('&nbsp;', 0);
    endif;
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false
    ));
    if(show_page_number() == max_show_page_number()): echo '<div class="page-numbers next nolink"></div>';
    else: next_posts_link('&nbsp;', 0);
    endif;
}

// 抜粋のカスタマイズ
function new_excerpt_more($more) {return '...';} // 省略
function new_excerpt_mblength($length) {return 120;} // 表示文字数
add_filter('excerpt_more', 'new_excerpt_more');
add_filter('excerpt_mblength', 'new_excerpt_mblength');
remove_filter('the_excerpt', 'wpautop');

// カテゴリーのurl取得
function category_url($category_name){
    $category_id = get_cat_ID($category_name);
    $category_link = get_category_link($category_id);
    return esc_url($category_link);
}