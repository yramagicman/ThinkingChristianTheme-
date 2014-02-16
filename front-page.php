<?php get_header(); ?>
<?php $args = array ('ignore_sticky_posts'=>'1', 'posts_per_page'=>'5');
$featuredPost = new WP_Query($args); ?>
<div class="content">
  <div class="body">
    <div class="padding">
      <div class="row top">
        <hgroup class="pagehead">
          <h1 class="pagetitle">Introducing New Weekly Featured Content!</h1>
          <!-- <p>Blah blah blah</p> -->
        </hgroup>
        <?php wp_nav_menu( array( 'container_class' => 'menu', 'theme_location' => 'HomePage' ) ); ?>
      </div>
      <div class="row">
        <aside class="featured-topic col span3">
          <?php get_search_form() ?>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("extra1") ) : ?>
          <?php  endif; ?>
          <div class="featured-post">
            <h2 class="main">Current Commentary</h2>
        <!--    <p style="text-align: center ;">(<a href="http://www.thinkingchristian.net/blog">Current Commentary</a>)</p>-->
            <?php if ($featuredPost->have_posts()) : ?>
            <?php while ($featuredPost->have_posts() ) : $featuredPost->the_post(); ?>
            <h3 class="topTitle"><a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
            </a></h3>
            <?php the_time('l, M j, Y') ?>&nbsp;&nbsp;&nbsp;
            <?php
            $zero ='';
            $one = '<br />(1 comment)';
            $more = '<br />(% comments)';?>
            <a href="<?php comments_link(); ?>">
            <?php comments_number( $zero, $one, $more ); ?>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
            <h3 class="topTitle"><a href="http://www.thinkingchristian.net/blog/">More from the blog . . .</a></h3>
            <p>&nbsp;</p>
          </div>
          <!-- <div class="the-core">
            <h2 class="main">The Core: Best of the Blog</h2>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("The_Core") ) : ?>
               The Core
            <?php  endif; ?>
          </div>-->
          <div class="lli">
           <!-- <h2 class="main">Cru</h2> -->
            <p><a href="http://www.cru.org"><img src="http://www.thinkingchristian.net/images/cru_logo_screen_150x100.png" alt="Cru" width="150" height="100" style="margin:auto; display:block;"></a></p>
           <!-- <h2 class="main">King's Domain</h2> -->
           <p>&nbsp;</p>
            <p><a href="http://www.kingsdomain.org/"><img src="http://www.thinkingchristian.net/wp-content/themes/ThinkingChristianTheme-new/images/kingsdomain.jpg" alt="King's Domain" width="200" height="78"></a>
            <!-- <p style="text-align:center;"><em> Based in southwest Ohio, reclaiming culture for the Kingdom of God</em></p> -->
             <p>&nbsp;</p>
            <!-- <h2 class="main">Christian Apologetics Alliance</h2> -->
            <p><a href="http://www.apologeticalliance.com/blog/"><img src="http://www.thinkingchristian.net/wp-content/images/CAA_logo_trans_medium.png" alt="Christian Apologetics Alliance" width="140" height="126" style="margin:auto; display:block;"></a></p>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("extra2") ) : ?>
            <?php  endif; ?>
          </div>
          </aside>
        <section class="central-column add-border col span6">
          <!--[if lte IE 7]> <h2>Your browser is outdated. For the best experience, please <a href="http://www.mozillia.com">get Firefox</a> or <a href="https://www.google.com/chrome/">Google Chrome</a><h2><![endif]-->
          <div class="central-question">
            <h2 style="text-align: center;">Central Issues In Christianity and Culture</h2>
            <h3>Who Holds the High Ground?</h3>
            <p>Christianity was once recognized for its intellectual and moral leadership. Now that reputation is in doubt. Some would even say Christianity is evil and stupid. <a href="http://www.thinkingchristian.net/who-holds-high-ground/">Who really holds the high ground?</a></p>
             <a href="http://www.thinkingchristian.net/the-high-ground/"><img src="http://www.thinkingchristian.net/wp-content/themes/ThinkingChristianTheme-new/images/Ouray-Colorado-Tom-Gilson-Photo.jpg" width="500" height="283" alt="Ouray, Colorado, Photo by Tom Gilson"></a>
            <h3>The Marriage Debate</h3>
            <p>Even though it's not a specifically religious issue, still nothing else so clearly defines the line between secular and Christian culture today as <a href="http://www.thinkingchristian.net/the-marriage-debate">the debate over marriage</a>. What can we say truly about marriage, and how can navigate today's climate of confrontation?</p>
            <a href="http://www.thinkingchristian.net/the-marriage-debate" title="Derick &amp; Jessica by amslerPIX, on Flickr"><img src="http://farm8.staticflickr.com/7172/6798744191_aa482e87d7_n.jpg" width="500" height="283" alt="Derick &amp; Jessica"></a>
          </div>
        </section>
        <aside class="book-review col span3">
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("email") ) : ?>
                  <?php  endif; ?>
          <!-- <div class="true-reason"> -->
            <h2 class="main">True Reason</h2>
            <img src="http://www.thinkingchristian.net/wp-content/images/TrueReason.jpg" class="alignright">
            <small>"The New Atheists claim to be the party of reason.... The problem is, they're not very good at it." — Discover the provocative ebook <a href="http://book.truereason.org/"><em>True Reason: Christian Responses to the Challenge of Atheism.</em></a></small>
          <!-- </div> -->
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("extra3") ) : ?>
          <?php  endif; ?>
          <h2 class="main">Book Reviews</h2>
          <h4>Most Recent Review:</h4>
          <p><a href="http://www.thinkingchristian.net/posts/2013/04/raw-revelation-your-preacher-isnt-telling-you-the-truth/"><img src="http://www.thinkingchristian.net/wp-content/uploads/201304092038.jpg" width="190" height="275" alt="Current Book Review" style="text-align:center;"></a></p>
          <p><a href="http://www.thinkingchristian.net/tag/book-reviews/">More book reviews >>></a>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("bookReview") ) : ?>
          <?php  endif; ?>
          <!-- <div class="llm">
            <h2 class="main"> &nbsp; </h2>
            <p><a href="http://www.josh.org/">Josh McDowell</a> says, <em>"Thinking Christian is one of the better places I know of on the web to learn solid Biblical thinking, to practice and develop such thinking through the give-and-take of friendly debate, and to understand what it means that Christianity is really true."</em></p></div> -->
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