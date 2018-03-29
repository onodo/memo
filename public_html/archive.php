<?php get_header(); ?>
    <div class="contentsWrap">
        <div class="contents">
            <?php
                if(have_posts()) :
                    while(have_posts()) :
                        the_post();
            ?>
            <article class="articleList">
                <h3 class="articleList_ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <ul class="articleInfo">
                    <li class="articleInfo_item"><?php the_category(', '); ?></li>
                    <li class="articleInfo_item"><?php echo get_the_date(); ?></li>
                </ul>
                <p class="articleList_txt"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read more</a>
            </article>
            <?php
                    endwhile;
                else:
            ?>
            <div class="articleList"><p>記事はありません</p></div>
            <?php
                endif;
            ?>
        </div>
        <div class="pager">
            <?php pager(); ?>
        </div>
        <!-- <ul class="pager">
            <li><div class="pager_item prev nolink"></div></li>
            <li><a href="" class="pager_item current">1</a></li>
            <li><a href="" class="pager_item">2</a></li>
            <li><div class="pager_item nolink">...</div></li>
            <li><a href="" class="pager_item">999</a></li>
            <li><a href="" class="pager_item next"></a></li>
        </ul> -->
    </div>
<?php get_footer(); ?>