<?php get_header(); ?>
    <div class="contentsWrap">
        <div class="contents">
            <?php
                if(have_posts()) :
                while(have_posts()) :
                the_post();
            ?>
            <div class="articleMain">
                <header class="articleMain_header">
                    <h2 class="articleTtl"><?php the_title(); ?></h2>
                    <ul class="articleInfo">
                        <li class="articleInfo_item"><?php the_category(', '); ?></li>
                        <li class="articleInfo_item"><?php echo get_the_date(); ?></li>
                    </ul>
                </header>
                <article class="">
                    <?php the_content(); ?>
                </article>
            </div>
            <?php
                endwhile;
                else:
            ?>
            <p>ページはありません</p>
            <?php
                endif;
            ?>
        </div>
        <div class="pager">
            <a href="javascript:history.back();" class="linkBtn">もどる</a>
        </div>
    </div>
<?php get_footer(); ?>