<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dex
 */

?>
    <footer>
        <div class="container">
            <div class="footer-head">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
                <?php wp_nav_menu() ?>
            </div>
            <div class="footer-body">
                <?php
                    $contacts_group = get_field('contacts_group','option');
                    $social_links = $contacts_group['social_links'];
                ?>
                <ul class="address-site">
                    <?php if(!empty($contacts_group['link'])) { ?>
                        <li><a href="<?php echo $contacts_group['link'] ?>"><?php echo $contacts_group['link'] ?></a></li>
                    <?php } ?>
                    <?php if(!empty($contacts_group['address'])) { ?>
                        <li><?php echo $contacts_group['address'] ?></li>
                    <?php } ?>
                </ul>
                <ul class="social">
                    <?php if(!empty($social_links['twitter'])) { ?>
                        <li>
                            <a href="<?php echo $social_links['twitter']?>"><i class="fab fa-twitter"></i></a>
                        </li>
                    <?php }
                        if(!empty($social_links['instagram'])) { ?>
                        <li>
                            <a href="<?php echo $social_links['instagram']?>"><i class="fab fa-instagram"></i></a>
                        </li>
                    <?php }
                        if(!empty($social_links['facebook'])) { ?>
                        <li>
                            <a href="<?php echo $social_links['facebook']?>"><i class="fab fa-facebook"></i></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="copyright">
                <span>
                    Copyright © 2020 EssaysRescue
                </span>
            </div>
        </div>
    </footer>





<?php wp_footer(); ?>
<script>

</script>
    </body>
</html>
