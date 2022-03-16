<?php get_header();?>
    <main>
        <div class="main_visual">
            <div class="logo_img">
                <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
            </div>
            <div class="slide-img">
                <div class="img_php">
                    <?php echo do_shortcode('[smartslider3 slider="2"]');?>
                </div>
                <div class="spimg_php">
                    <?php echo do_shortcode('[smartslider3 slider="3"]');?>
                </div>
            </div>
            <div class="text_img">
                <img src="<?php echo get_template_directory_uri();?>/img/visual_text_pc.png" alt="" class="pc">
                <img src="<?php echo get_template_directory_uri();?>/img/visual_text_sp.png" alt="" class="sp">
            </div>
        </div>
        <div class="visual_text">
            <p class="inner_text">
                <span class="wrap_text">進化し続ける「街」</span>
                <span class="wrap_text">アメリカンビレッジマガジン</span>
            </p>
        </div>
        <h1 id="title">Latest Articles</h1>
        <section class="text-box">
              <?php
                if(have_posts()):
                while (have_posts()):
                the_post();
              ?>
            <div class="content">
                <?php the_post_thumbnail(); ?>
                <div class="content_text">
                    <time><?php echo get_the_date();?></time>
                    <p><?php the_title();?></p>
                    <div class="btn">
                        <a href="<?php the_permalink(); ?>">READ MORE</a>
                    </div>
                </div>
            </div>
        <?php endwhile;
        else:?>
        <section>
            <p>表示する記事がありません。</p>
        </section>
        <?php endif; ?>
        </section>     
    </main>
<?php get_footer();?>