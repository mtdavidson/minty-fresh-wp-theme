<div class="sidebar fivecol first clearfix" role="complementary">
 <div class="sidebar-top">
  <?php if ( is_active_sidebar( 'sidebar-top' ) ) : ?>

   <?php dynamic_sidebar( 'sidebar-top' ); ?>

   <?php endif; ?>
 </div>

 <div class="sidebar-left">
   <?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>

   <?php dynamic_sidebar( 'sidebar-left' ); ?>

   <?php endif; ?>
 </div>

 <div class="sidebar-right">
  <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>

  <?php dynamic_sidebar( 'sidebar-right' ); ?>

  <?php endif; ?>
 </div>

</div>