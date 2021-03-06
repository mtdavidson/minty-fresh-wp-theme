<?php get_header(); ?>

<div id="content">

  <div id="inner-content" class="wrap clearfix">

    <div id="main" class="sevencol first clearfix" role="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

        <header class="article-header first eightOfTen">

          <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
          <p class="byline vcard"><?php
                                  printf(__('By <span class="author">%3$s</span> on <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link());
                                  ?></p>

        </header> <!-- end article header -->
        <div class="twoOfTen last">
          <span class="meta comments">
            <?php if ( post_password_required() ) : ?>
            <span class="c"><em>X</em></span>
                            <?php else:
comments_popup_link('<span class="n"><em>' . __('0', 'lb-lang') . '</em></span>', '<span class="y"><em>' . __('1', 'lb-lang') . '</em></span>', '<span class="y"><em>' . __('%', 'lb-lang') . '</em></span>', '', '<span class="c"><em>' .  __('No', 'lb-lang') . '</em></span>' );
                            endif;?>
          </span>
        </div>

        <section class="entry-content clearfix clear">
          <?php the_content(__('Read &amp; Comment &rsaquo;&rsaquo;&rsaquo;', 'bonestheme')); ?>
        </section> <!-- end article section -->

        <footer class="article-footer clearfix">
          <?php printf (__('<div class="posted_in fiveOfTen first"><h6>Posted in</h6> %s</div>', 'bonestheme'), get_the_category_list()); ?>
          <?php the_tags(__('<div class="tags fiveOfTen last"><h6>Tags</h6>', 'bonestheme') . '<ul><li>','</li><li>','</li></ul></div>'); ?>
        </footer> <!-- end article footer -->
        <div class="footer-bttn"></div>

        <?php // comments_template(); // uncomment if you want to use them ?>

      </article> <!-- end article -->

                            <?php endwhile; ?>

      <?php else : ?>

      <article id="post-not-found" class="hentry clearfix">
        <header class="article-header">
          <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
        </header>
        <section class="entry-content">
          <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        </section>
        <footer class="article-footer">
          <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
        </footer>
      </article>

            <?php endif; ?>

    </div> <!-- end #main -->

    <?php get_sidebar(); ?>

  </div> <!-- end #inner-content -->

  <?php if (function_exists('bones_page_navi')) { ?>
  <?php bones_page_navi('<div class="wrap">', '</div>'); ?>
  <?php } else { ?>
  <div class="wrap">
    <nav class="wp-prev-next">
      <ul class="clearfix">
        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
      </ul>
    </nav>
  </div>
  <?php } ?>

</div> <!-- end #content -->

<?php get_sidebar ('colophon') ?>
<?php get_footer(); ?>
