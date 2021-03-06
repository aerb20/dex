
<?php /* Template Name: Home */ ?>
<?php get_header() ?>

<?php if( have_rows('slider_main') ): ?>
    <section class="main-slider">
            <?php while( have_rows('slider_main') ): the_row();
                $image = get_sub_field('image');
                ?>
                <div class="main-section" style="background-image: url('<?php echo get_sub_field("background_image")?>') ">
                    <div class="blur-overlay"></div>
                    <div class="container">
                        <div class="info-wrap">
                            <div class="slider-controls">
                                <i class="am-prev fas fa-long-arrow-alt-left"></i>
                                <i class="am-next fas fa-long-arrow-alt-right"></i>
                            </div>
                            <?php
                            $h1_title = get_sub_field('h1_title');
                            if(!empty($h1_title)) {?>
                                <h1><?php echo $h1_title ?></h1>
                            <?php } ?>
                            <?php
                            $h3_title = get_sub_field('h3_title');
                            if(!empty($h3_title)) {?>
                                <h3><?php echo $h3_title ?></h3>
                            <?php } ?>
                            <?php
                            $button = get_sub_field('button');
                            $link_to_original_picture = $button['link_to_original_picture'];
                            $button_label = $button['button_label'];
                            if(!empty($link_to_original_picture)) {?>
                                <div class="btn">
                                    <a href="<?php echo $link_to_original_picture?>">
                                        <?php echo $button_label?>
                                    </a>
                                </div>
                            <?php } ?>


                            <div class="content-info">
                                <?php
                                $content = get_sub_field('content');
                                $link = get_sub_field('link');
                                if(!empty($content)) {
                                    ?>
                                    <div class="slide">
                                        <div class="content">
                                            <?php echo $content?>
                                        </div>
                                        <a href="<?php echo $link?>" class="more">
                                            <?php echo get_field('more_label','option')?>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
    </section>
<?php endif; ?>


<?php get_footer() ?>
