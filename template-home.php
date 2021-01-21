
<?php /* Template Name: Home */ ?>
<?php get_header() ?>


<section class="main-section" style="background-image: url('<?php echo get_field("background_image")?>') ">
    <div class="blur-overlay"></div>
    <div class="container">
        <div class="info-wrap">
            <?php
            $h1_title = get_field('h1_title');
            if(!empty($h1_title)) {?>
                <h1><?php echo $h1_title ?></h1>
            <?php } ?>
            <?php
            $h3_title = get_field('h3_title');
            if(!empty($h3_title)) {?>
                <h3><?php echo $h3_title ?></h3>
            <?php } ?>
            <?php
            $button = get_field('button');
            $link_to_original_picture = $button['link_to_original_picture'];
            $button_label = $button['button_label'];
            if(!empty($link_to_original_picture)) {?>
                <div class="btn">
                    <a href="<?php echo $link_to_original_picture?>">
                        <?php echo $button_label?>
                    </a>
                </div>
            <?php } ?>
            <?php if( have_rows('slider_info') ): ?>
                <div class="slider-controls">
                    <i class="am-prev fas fa-long-arrow-alt-left"></i>
                    <i class="am-next fas fa-long-arrow-alt-right"></i>
                </div>
                <div class="slider-info">
                    <?php while( have_rows('slider_info') ): the_row();
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
                    <?php
                        }
                     endwhile; ?>
                </div>

            <?php endif; ?>
        </div>
    </div>
</section>


<?php get_footer() ?>
