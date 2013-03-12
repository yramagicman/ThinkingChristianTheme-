<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<?php $args = array ('ignore_sticky_posts'=>'1', 'posts_per_page'=>'5');
$featuredPost = new WP_Query($args); ?>
<div class="content">
  <div class="body">
    <div class="padding">
      <div class="row top">
        <hgroup class="pagehead">
          <h1 class="pagetitle">Weekly Featured Content For</h1>
          <p>Blah blah blah</p>
        </hgroup>
        <?php wp_nav_menu( array( 'container_class' => 'menu', 'theme_location' => 'HomePage' ) ); ?>
      </div>
      <div class="row">
        <aside class="featured-topic col span3">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("email") ) : ?>
            email
          <?php  endif; ?>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("extra1") ) : ?>
          <?php  endif; ?>
          <div class="featured-post">
            <h2 class="main">The Blog</h2>
            <?php if ($featuredPost->have_posts()) : ?>
            <?php while ($featuredPost->have_posts() ) : $featuredPost->the_post(); ?>
            <h3 class="topTitle"><a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
            </a></h3>
              
            <?php 
            $zero ='0 comments';
            $one = '1 comment';
            $more = '% comments';?>
            <a href="<?php comments_link(); ?>">
            <?php comments_number( $zero, $one, $more ); ?>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="the-core">
            <h2 class="main">The Core</h2>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("The_Core") ) : ?>
 
       The Core
            <?php  endif; ?>
            
          </div>
          <div class="lli">
            <h2 class="main">LLI</h2>
            
              LLI
            
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("extra2") ) : ?>

            <?php  endif; ?>
          </div>
          </aside>
        <section class="central-column add-border col span6">
          <!--[if lte IE 7]> <h2>Your browser is outdated. For the best experience, please <a href="http://www.mozillia.com">get Firefox</a> or <a href="https://www.google.com/chrome/">Google Chrome</a><h2><![endif]-->
          <div class="central-question">
            <h2>The Central Issues in Christianity and Culture</h2>
            <h3>Who holds the moral High ground?</h3>
            <p>Who holds the high ground? Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur.</p>
            <a href="http://www.flickr.com/photos/mythoto/6317316681/" title="chess is larger than reality by Leonard John Matthews, on Flickr"><img src="http://farm7.staticflickr.com/6048/6317316681_86c6460248.jpg" width="500" height="283" alt="chess is larger than reality"></a>
            <h3>Gay "Marriage"</h3>
            <p>More about the Central Question... Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur.</p>
            <a href="http://www.flickr.com/photos/amslerpix/6798744191/" title="Derick &amp; Jessica by amslerPIX, on Flickr"><img src="http://farm8.staticflickr.com/7172/6798744191_aa482e87d7_n.jpg" width="320" height="214" alt="Derick &amp; Jessica"></a>
          </div>
        </section>
        <aside class="book-review col span3">
          <?php get_search_form() ?>
          <!-- <div class="true-reason"> -->
            <h2 class="main">True Reason</h2>
            <img src="http://www.thinkingchristian.net/wp-content/images/TrueReason.jpg" class="alignright">
            <small>"The New Atheists claim to be the party of reason.... The problem is, they're not very good at it." — Discover the provocative ebook <a href="http://book.truereason.org/"><em>True Reason: Christian Responses to the Challenge of Atheism.</em></a></small>
          <!-- </div> -->
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("extra3") ) : ?>
          <?php  endif; ?>
          <h2 class="main">Book Review</h2>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("bookReview") ) : ?>
            Book Review
          <?php  endif; ?>
          
          <div class="llm">
            <h2 class="main">LLM</h2>
            
              LLM
            
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("extra4") ) : ?>
            <?php  endif; ?>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>
<!-- Closes Main -->
<?php get_footer(); ?>