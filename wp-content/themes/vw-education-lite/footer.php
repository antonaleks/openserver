<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VW Education Lite
 */
?>
        <div class="copyright-wrapper">
        	<div class="inner">
                <div class="footer-menu">
                    <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                </div><div class="clear"></div> 
                <div class="copyright">
                    <p><a href="<?php echo esc_url('http://www.vwthemes.com'); ?>" target="_blank"><?php echo esc_html(get_theme_mod('vw_education_lite_footer_copy',__('Professional Wordpress Themes',"vw-education-lite"))); ?></a> by <a href="https://www.vwthemes.com" target="_blank"><?php _e('VW Themes','vw-education-lite'); ?></a></p>              
                </div><!-- copyright --><div class="clear"></div>  
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>