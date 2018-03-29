<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php if (is_single()): ?><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/styles/monokai.min.css"><?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <div class="headLogoWrap">
                <h1 class="headLogo"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name') ?></a></h1>
                <?php if(is_category()): ?><h2 class="categoryTtl"><?php echo get_cat_name(get_the_category()[0]->term_id); ?></h2><?php endif; ?>
            </div>
            <nav class="headNav">
                <!-- <input type="button" class="headNav_item selectBtn" value="カテゴリー"> -->
                <button class="headNav_item selectBtn" onclick="selectShow(this, event); return false;">カテゴリー</button>
                <ul class="headNav_item selectList">
                    <li><a href="<?php echo category_url('html') ?>" class="selectList_item">html</a></li>
                    <li><a href="<?php echo category_url('css') ?>" class="selectList_item">css</a></li>
                    <li><a href="<?php echo category_url('jQuery/JavaScript') ?>" class="selectList_item">jQuery/JavaScript</a></li>
                    <li><a href="<?php echo category_url('その他') ?>" class="selectList_item">その他</a></li>
                </ul>
                <!-- <i class="selectBtn_arrow"></i> -->
            </nav>
        </div>
    </header>