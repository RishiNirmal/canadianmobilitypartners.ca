<?php
/**
 * @package WordPress
 * @subpackage Resideo
 */

$general_settings = get_option('resideo_general_settings');
$copyright        = isset($general_settings['resideo_copyright_field']) ? $general_settings['resideo_copyright_field'] : ''; ?>

    <div class="pxp-footer mt-100">
        <div class="container pt-100 " style="padding-bottom:30px"><?php get_sidebar('footer'); ?><?php if ($copyright != '') { ?>
            <div class="pxp-footer-bottom mt-4 mt-md-5  d-flex justify-content-between">
                <span class="pxp-footer-copyright "><?php echo esc_html($copyright); ?></span>
                <div class="pxp-footer-copyright">Developed
                                by |<a href="https://01synergy.com/" class="ml-1 " target="_blank">01 Synergy</a></div>
        </div>
            </div><?php } ?></div>

    <?php wp_footer(); ?>
</body>
</html>
