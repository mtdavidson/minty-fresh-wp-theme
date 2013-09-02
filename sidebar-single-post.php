<div class="fivecol last post-nav">
  <?php previous_post_link('<span>' . __('<em>Previous post</em>%link', 'bonestheme') . '</span>') ?>
  <?php next_post_link('<span>' . __('<em>Next post</em>%link', 'bonestheme') . '</span>') ?>
</div>
<div class="sidebar sidebar-single-post fivecol last clearfix" role="complementary">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-single-post') ) : ?>
  <div class="widget widget_recent_entries">
    <h3 class="widget-title"><?php _e('Recent Posts', 'bonestheme'); ?></h3>
    <ul>
      <?php
      global $post;
      $myposts = get_posts('numberposts=10');
      foreach($myposts as $post) :?>
      <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
</div>
