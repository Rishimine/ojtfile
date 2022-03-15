<?php get_header();?>
<main>
        <div class="main_visual">
            <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="" class="logo_img">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php echo get_template_directory_uri();?>/img/visual_1_pc.png" alt="スライダー画像1" class="pc">
                            <img src="<?php echo get_template_directory_uri();?>/img/visual_1_sp.png" alt="スライダー画像1" class="sp">
                        </div>
                    </div>
                    </div>
            </div>
            <img src="<?php echo get_template_directory_uri();?>/img/visual_text_pc.png" alt="" class="text_img">
        </div>
        <div class="visual_text">
            <p class="inner_text">
                <span class="wrap_text">進化し続ける「街」</span>
                <span class="wrap_text">アメリカンビレッジマガジン</span>
            </p>
        </div>
     

        <h1 id="title">Latest Articles</h1>
        <section class="text-box">
               <!-- メインループ -->
        <?php
    if(have_posts()):
    while (have_posts()):
      the_post();
    ?>
            <div class="content">
            <?php the_post_thumbnail(); ?>
                <time><?php echo get_the_date();?></time>
                <p><?php the_title();?></p>

                <div class="btn">
                <a href="<?php the_permalink(); ?>">READ MORE</a>
            </div>
            <!-- <div class="content">
                <img src="<?php //echo get_template_directory_uri();?>/img/post_img_2.png" alt="">
                <time>2022 / 03 /14 </time>
                <p>内容</p>
                <div class="btn"><a href="">READ MORE</a></div>

            </div>
            <div class="content">
                <img src="<?php //echo get_template_directory_uri();?>/img/post_img_3.png" alt="">
                <time>2022 / 03 /14 </time>
                <p>内容</p>
                <div class="btn"><a href="">READ MORE</a></div>

            </div>
        </section>
        <section class="text-box">
            <div class="content">
                <img src="<?php //echo get_template_directory_uri();?>/img/post_img_4.png" alt="">
                <time>2022 / 03 /14 </time>
                <p>内容</p>
                <div class="btn"><a href="">READ MORE</a></div>
            </div>
            <div class="content">
                <img src="<?php //echo get_template_directory_uri();?>/img/post_img_5.png" alt="">
                <time>2022 / 03 /14 </time>
                <p>内容</p>
                <div class="btn"><a href="">READ MORE</a></div>

            </div>
            <div class="content">
                <img src="<?php //echo get_template_directory_uri();?>/img/post_img_6.png" alt="">
                <time>2022 / 03 /14 </time>
                <p>内容</p>
                <div class="btn"><a href="">READ MORE</a></div>



            </div> -->
        </section>
        <?php endwhile;
        else:?>
        <section>
            <p>表示する記事がありません。</p>
        </section>
        <?php endif; ?>
    </main>
<?php get_footer();?>