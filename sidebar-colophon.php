<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

?>
<div id="colophon-widgets">

  <div class="wrap clearfix">

    <div class="fourcol first">
      <?php if (is_active_sidebar('footer1')) : ?>

      <?php dynamic_sidebar('footer1'); ?>

      <?php endif; //end of colophon-widget ?>
    </div>

    <div class="fourcol">
      <?php if (is_active_sidebar('footer2')) : ?>

      <?php dynamic_sidebar('footer2'); ?>

      <?php endif; //end of colophon-widget ?>
    </div>

    <div class="fourcol last">
      <?php if (is_active_sidebar('footer3')) : ?>

      <?php dynamic_sidebar('footer3'); ?>

      <?php endif; //end of colophon-widget ?>
    </div>
  </div>

</div><!-- end of #colophon-widget -->