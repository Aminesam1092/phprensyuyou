<?php get_header(); ?>
    <section class="content">
        <?php
            if( have_posts() ) : while( have_posts() ) : the_post();
        ?>
        <h3>
            <?php the_post_thumbnail('large');/* アイキャッチ画像を表示 */ ?>
        </h3>
        <section class="maintext">
            <h4>
                <?php 
                    the_title();//記事のタイトルを表示
                ?>
            </h4>
            <p>
                <?php 
                    the_tags('<span>','</span><span>','</span>');//記事のタグを表示
                ?>
            </p>
            <?php the_content(); ?><!-- 記事の本文を表示 -->
            <ul class="pager">
                <?php previous_post_link('%link','<li><img src="'.get_theme_file_uri().'/images/prev.png"></li>'); ?>
                <?php next_post_link('%link','<li><img src="'.get_theme_file_uri().'/images/next.png"></li>'); ?>
            </ul>
        </section>
            <?php
                endwhile; else :
            ?>
            <li>記事はありません</li>
            <?php
                endif;
            ?>
    </section>
    <section class="update">
        <h3>Update</h3>
        <dl>
            <dt>2022/6/25</dt>
            <dd>アヤメについて</dd>
            <dt>2022/6/25</dt>
            <dd>アリウム・ギガンテウム</dd>
            <dt>2022/6/20</dt>
            <dd>シバザクラについてアップ</dd>
        </dl>
    </section>
<?php get_footer(); ?>
