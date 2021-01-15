
<?php /* Template Name: Home */ ?>
<?php get_header() ?>
<?php
    $section_1_group = get_field('section_1_group');
    $form_group = $section_1_group['form_group'];
    $section_2_group = get_field('section_2_group');
    $section_3_group = get_field('section_3_group');
    $section_4_group = get_field('section_4_group');
?>
<section class="sec-1">
    <div class="container">
        <?php if(!empty($section_1_group['info'])) { ?>
            <div class="info-wrap">
                <?php echo $section_1_group['info'];
                if(!empty($section_1_group['info'])) { ?>
                    <div class="btn btn-main">
                        <a href="#"><?php echo $section_1_group['button_label']?></a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="form-wrap">
            <div class="form-info">
                <?php if(!empty($form_group['title'])) { ?>
                    <h2><?php echo $form_group['title']?></h2>
                <?php } ?>
                <?php if(!empty($form_group['subtitle'])) {
                     echo $form_group['subtitle'];
                } ?>

                <?php
				if( have_rows('selectors') ): ?>
					<form action="">
                        <div class="selectors">
                            <?php
                            $i=1;
                            while( have_rows('selectors') ): the_row(); ?>
                                <div class="select">
                                    <select name="val-<?php echo get_row_index(); ?>" id="val-<?php echo get_row_index(); ?>">
                                        <?php
                                        if( have_rows('select') ): ?>
                                            <?php
                                            while( have_rows('select') ): the_row();
                                                ?>
                                                    <option value="<?php the_sub_field('option'); ?>"><?php the_sub_field('option'); ?></option>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            <?php endwhile;?>
					    </div>
                        <?php if(!empty($form_group['price'])) {
                            $number = $form_group['price'];
                            ?>
                            <div class="price">
                                <i class="fas fa-dollar-sign"></i>
                                <?php echo number_format($number, 2, '.', ' ') ?>
                            </div>
                        <?php
                        } ?>
                        <?php if(!empty($form_group['form_button_label'])) {
                            ?>
                            <div class="btn btn-main">
                                <a href="#">
                                    <?php echo $form_group['form_button_label'] ?>
                                </a>
                            </div>
                            <?php
                        } ?>
					</form>
				<?php endif;  ?>

            </div>
        </div>
    </div>
</section>
<section class="sec-2">
    <div class="container">
        <div class="preloader">
            <img src="https://media2.giphy.com/media/3oEjI6SIIHBdRxXI40/200.gif" alt="">
        </div>
    </div>
</section>
<?php if(!empty( $section_3_group['content'])) { ?>
<section class="sec-3">
    <div class="container">
        <div class="content">
            <?php echo $section_3_group['content'] ?>
        </div>
    </div>
</section>
<?php } ?>
<?php if(!empty( $section_4_group['shortcode'])) { ?>
    <section class="sec-4">
        <div class="container">
            <?php echo $section_4_group['shortcode'] ?>
        </div>
    </section>
<?php } ?>

<?php get_footer() ?>
