<?php get_header(); ?>
<!-- To remove the Featured, Focused, Further headers rename this file and change index2.php to index.php. It should work without any problem. -->
<div class="content">
  <div class="body">
    <div class="padding">
      <?php
      if (!is_paged()) {
            $args = array ('ignore_sticky_posts'=>'1', 'posts_per_page'=>'1');
              $my_query = new WP_Query($args);
            }else {
              $my_query = new WP_Query($query_string.'&posts_per_page=10');
            }

//Loop 1
 if ($my_query->have_posts()) : ?>
      <?php while ($my_query->have_posts() ) : $my_query->the_post(); ?>
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
     <?php endwhile; ?>
          <?php if(is_paged()): ?>
          <div class="navigation">
            <div class="alignleft">
              <?php next_posts_link('&laquo; Older Entries') ?>
            </div>
            <div class="alignright">
              <?php previous_posts_link('Newer Entries &raquo;') ?>
            </div>
          </div><?php endif; ?>
     
      <!--loop 2 -->
      <?php if ( !is_paged()  ) :?>
      <h1><em>Focused:</em></h1>
      <div class="row">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("col1") ) : ?>
          one
        <?php  endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("col2") ) : ?>
          two
        <?php  endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("col3") ) : ?>
          thre
        <?php  endif; ?>
      </div>
      <?php  endif; ?>
      <?php if ( !is_paged()  ) :?>
      <h1><em>Further:</em></h1>
      <?php  endif; ?>
      <?php
//wp_reset_query();

      if (!is_paged()) {
      $args = array ('offset'=> '1','ignore_sticky_posts'=>'1', 'post__not_in' => get_option( 'sticky_posts' ) );
        $my_query = new WP_Query($args);
      }else {
      //  $my_query = new WP_Query($query_string.'&posts_per_page=9&offset=1');
      }
      ?>

<?php if ($my_query->have_posts() and !is_paged()) : ?>
      <?php while ($my_query->have_posts() ) : $my_query->the_post(); ?>
      <div class="topPost">
        <h2 class="topTitle"><a href="<?php the_permalink() ?>">
          <?php the_title(); ?>
          </a></h2>
        <p class="topMeta"> Posted on
          <?php the_time(' M d, Y') ?>
        </p>
        <div class="topContent">
        <?php  the_post_thumbnail() ?>
          <?php the_excerpt('(continue reading...)'); ?>
                    <a href="<?php the_permalink()?>" class="readmore">read more</a>
       <!-- </a> </h2> </blockquote> </p>--> 
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
      <?php endwhile; ?>
      <!--loop 2 -->
      <div class="navigation">
        <div class="alignleft">
          <?php next_posts_link('&laquo; Older Entries') ?>
        </div>
        <div class="alignright">
          <?php previous_posts_link('Newer Entries &raquo;') ?>
        </div>
      </div>
     <?php endif; ?>
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
// require_once('/home/thinkingchristian/thinkingchristian.net/webstats/owa_php.php');
    
// $owa = new owa_php();
// Set the site id you want to track
// $owa->setSiteId('0b6c7a3b80ce532f970911c4ab6f5c85');
// Uncomment the next line to set your page title
// $owa->setPageTitle('Home Page');
// Set other page properties
//$owa->setProperty('Index');
// $owa->trackPageView();
    
  ?>
<!-- END OWA Tracking Code -->
<?php get_sidebar(); ?>
</div>
<!-- Closes Main -->
<?php get_footer(); ?>
