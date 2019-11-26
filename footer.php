</div><!-- .col-full -->
</div><!-- #content -->

<?php do_action('shopper_before_footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="col-full">

        <?php
        /**
         * Functions hooked in to shopper_footer action
         *
         * @hooked shopper_footer_widgets - 10
         * @hooked shopper_credit         - 20
         * @hooked shopper_footer_menu    - 30			 
         */
        do_action('shopper_footer'); ?>

        <div class="site-info site-info-show">
            <?php echo esc_html(apply_filters('shopper_copyright_text', $content = '' . get_bloginfo('name') . ' &copy;' . date('Y'))); ?>.
            <?php if (apply_filters('shopper_credit_link', true)) { ?>
                <?php printf('Developed with ♥ by <a href="https://1mandev.com" 
				rel="author">1MANDEV</a>'); ?>
            <?php } ?>
        </div>

    </div><!-- .col-full -->

</footer><!-- #colophon -->

<?php do_action('shopper_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>