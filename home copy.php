<?php get_header(); ?>
<?php if ( !is_paged()  ) :?>
<div id="content" class="home">
<?php else : ?>
<div id="content">
<?php endif; ?>
  <div class="body">
    <div class="padding">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="topPost">
        <h2 class="topTitle"><a href="<?php the_permalink() ?>">
          <?php the_title(); ?>
          </a></h2>
          
        <p class="topMeta">   
          Posted on <?php the_time(' M d, Y') ?>
        </p>
        <div class="topContent">
          <?php the_excerpt('(continue reading...)'); ?>
          by
            <?php the_author_posts_link(); ?>
        </div>
        <div class="linkpages">
        <?php wp_link_pages(); ?>
        </div>
        <?php if ( function_exists('the_tags') ) : ?>
        <div class="catntag">
     <?php if (!in_category('uncategorized') ) :?>
     Categories: <?php the_category(', '); ?>
     <?php endif; ?>
     <?php if (has_tag() ) :?>
        <br/>Tags: <?php the_tags('<em></em>', ', ', ''); ?>
        <?php endif; ?>
        </div>
               <?php endif; ?>
      </div>
      <!-- Closes topPost -->
<!--      <br/>-->
      <small>
      <?php edit_post_link('Edit this entry?','',''); ?>
      </small>
      <div class="comments">
        <?php if (function_exists('wp_list_comments')): ?>
        <!-- WP 2.7 and above -->
        <?php comments_template('', true); ?>
        <?php else : ?>
        <!-- WP 2.6 and below -->
        <?php comments_template(); ?>
        <?php endif; ?>
      </div>
      <!-- Closes Comment -->
    
      <?php endwhile; ?>
      <div class="navigation">
        <div class="alignleft">
          <?php next_posts_link('&laquo; Older Entries') ?>
        </div>
        <div class="alignright">
          <?php previous_posts_link('Newer Entries &raquo;') ?>
        </div>
        </div>
      <?php else : ?>
      <div class="topPost">
        <h2 class="topTitle"><a href="<?php the_permalink() ?>">Not Found</a></h2>
        <div class="topContent">
          <p> Sorry, but you are looking for something that isn't here. You can search again by using <a href="#searchform">this form</a>... </p>
        </div>
      </div>
      <!-- Closes topPost -->
      <?php endif; ?>
    </div>
  </div>
  <!-- Closes body-->
  <?php 
  // get_sidebar(); 
  ?>

<!-- Closes Main -->
<?php get_footer(); ?>
