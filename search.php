<?php get_header(); ?>
    <section class="content">
        <h3>
            <picture>
                <source srcset="images/topsp.png" media="(max-width:414px)">
            </picture>
        </h3>
        <ul>
            <?php 
                if( have_posts() ) : while( have_posts() ) : the_post();
            ?>
            <li><!-- 1 -->
                <section class="items">
                    <h4>
                        <figure><!-- 図１とかの時に使う -->
                            <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_post_thumbnail('medium_large');?></a>
                            <figcaption>
                                <?php
                                    $cat = get_the_category();
                                    echo $cat[0]->name;
                                ?>
                            </figcaption>
                        </figure>
                    </h4>
                    <p class="itemtitle">
                        <?php
                            the_title();
                        ?>
                    </p>
                    <p class="itemtags">
                        <?php
                            the_tags('<span>','</span><span>','</span>');
                        ?>
                    </p>
                    <p class="itemdata">
                        <time datetime="<?php echo get_the_date('Y/m/d'); ?>">
                            <?php
                                echo get_the_date('Y/m/d');
                            ?>
                        </time>
                    </p>
                </section>
            </li>
            <?php
                endwhile; else :
            ?>
            <li>記事はありません</li>
            <?php
                endif;
            ?>
        </ul>
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
       
