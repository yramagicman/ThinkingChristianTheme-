<?php get_header(); ?>

<div class="content">
<div class="body">
  <div class="padding">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="topPost">
        <?php if ( !is_paged()  ) :?>
        <h1> <em>Featured:</em> </h1>
        <?php  endif; ?>
        <h2 class="topTitle"><a href="<?php the_permalink() ?>">
          <?php the_title(); ?>
          </a></h2>
        <p class="topMeta"> Posted on
          <?php the_time(' M d, Y') ?>
        </p>
        <div class="topContent">
          <?php  the_post_thumbnail() ?>
          <?php the_excerpt   ('(continue reading...)'); ?>
         <!--</a> </h2> </blockquote> </p>-->
          <a href="<?php the_permalink()?>" class="readmore">read more</a> 
        </div>
        <div class="linkpages">
          <?php wp_link_pages(); ?>
        </div>
        <?php if ( function_exists('the_tags') ) : ?>
        <div class="catntag">
            <?php if (has_tag() ) :?>
            
        Tags:
        <?php the_tags('<em></em>', ', ', ''); ?>
        <?php endif; ?><br />
        
        <?php 
        $zero ='0 comments';
        $one = '1 comment';
        $more = '% comments';?>
        <a href="<?php comments_link(); ?>">
        <?php comments_number( $zero, $one, $more ); ?>
        </a>
      </div>
      <?php endif; ?>
      </div>
      <!-- Closes topPost -->
      <!--      <br/>-->
      <small>
      <?php //edit_post_link('Edit this entry?','',''); ?>
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
<!-- BEGIN OWA Tracking Code -->
<?php     
require_once('/home/thinkingchristian/thinkingchristian.net/webstats/owa_php.php');
    
$owa = new owa_php();
// Set the site id you want to track
$owa->setSiteId('0b6c7a3b80ce532f970911c4ab6f5c85');
// Uncomment the next line to set your page title
$owa->setPageTitle('Page');
// Set other page properties
//$owa->setProperty('Page');
$owa->trackPageView();
    
  ?>
<!-- END OWA Tracking Code -->
<?php get_sidebar(); ?>
<!-- Closes Main -->
<?php get_footer(); ?>
