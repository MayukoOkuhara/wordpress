<?php
/*
 * メニュー機能
 */
register_nav_menu('main', 'メインナビ');
/*
 * カスタム投稿タイプ：新着情報
 */
register_post_type(
    'news',
    array(
        'labels' => array(
            'name' => '新着情報',
            'add_new_item' => '追加：新着情報',
            'edit_item' => '編集：新着情報'
        ),
        'public' => true,
        'supports' => array('title', 'editor')
    )
    );
/*
 * アイキャッチ画像の有効化
 */
add_theme_support('post-thumbnails');
/*
 * カスタム投稿タイプ：東京の魅力
 */
register_post_type(
    'appealings',
    array(
        'labels' => array(
            'name' => '東京の魅力',
            'add_new_item' => '追加：東京の魅力',
            'edit_item' => '編集：東京の魅力'
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    )
    );