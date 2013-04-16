<!--open sidebar-->
<div id="sidebar" class="sidebar">
  <?php if (!is_home()) {?>
  <ul class="relatedPosts">
    <?php 
$theID = get_the_ID();
$month = get_the_time('m', $theID);
$day = get_the_time('d',$theID);
$year = get_the_time('Y',$theID);
$hour = $year = get_the_time('H',$theID);
// marketplace id = 1163
  // parents id =  1149
  // leaders id = 1148
//  unbelievers id = 1162
//echo wp_get_referer();
  $my_title_query = new WP_Query('cat=409,1149,1148,1161&'."monthnum=$month&year=$year&day=$day&hour=$hour" );
     if ( $my_title_query->
    have_posts() ) { ?>
    <li>
      <h2 class="widgettitle"> More on this topic: </h2>
    </li>
    <?php }
     wp_reset_query();
     wp_reset_postdata(); 
     //for leaders
   $my_leaders_query = new WP_Query('cat=1148&'."monthnum=$month&year=$year&day=$day&hour=$hour" );
      if ( $my_leaders_query->
    have_posts() ) { while ( $my_leaders_query->have_posts() ) { $my_leaders_query->the_post();?>
    <li class="recentcomments"><strong>For Pastors and Teachers:</strong><br /><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
    <?php }
      }
      wp_reset_query();
      wp_reset_postdata();
       //for parents
$my_parent_query = new WP_Query('cat=1149&'."monthnum=$month&year=$year&day=$day&hour=$hour" );
   if ( $my_parent_query->
    have_posts() ) { while ( $my_parent_query->have_posts() ) { $my_parent_query->the_post();?>
    <li class="recentcomments"><strong>For Parents:</strong><br /> <a href="<?php the_permalink() ?>"><?php the_title(); ?> </a></li>
    <?php }
   }
   wp_reset_query();
   wp_reset_postdata();
  // marketplace stuff
$my_market_query = new WP_Query('cat=409&'."monthnum=$month&year=$year&day=$day&hour=$hour" );
   if ( $my_market_query->
    have_posts() ) { while ( $my_market_query->have_posts() ) { $my_market_query->the_post();?>
     <li class="recentcomments"><strong>For Students:</strong><br /> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
    <?php }
   }
   wp_reset_query();
   wp_reset_postdata(); 
      //for unbelievers
      $my_unbeliever_query = new WP_Query('cat=1162&'."monthnum=$month&year=$year&day=$day&hour=$hour" );
         if ( $my_unbeliever_query->have_posts() ) {
          while ( $my_unbeliever_query->have_posts() ) { 
            $my_unbeliever_query->the_post();?>
     <li class="recentcomments"><strong>For Skeptics and Seekers:</strong></strong><br /> <a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></li>
    <?php }
         }
         wp_reset_query();
         wp_reset_postdata();     
   ?>
  </ul>
  <?php } ?>
  <?php if (!is_home()) {?>
  <p>&nbsp;</p>
  <ul class="blurbs">
    <li class="parentsBlurb"><strong>The Parents Pages</strong><br />
      "Mom or Dad, why do we believe ...  when my friends or my teachers say it's wrong?" Here's help for you with your children's tough questions.</li>
    <li class="marketBlurb"><strong>Marketplace Christianity Pages</strong><br />
      Have you ever wondered whether there's more to being a Christian on the job than what you've heard about in church?</li>
    <li class="leadersBlurb"><strong>Pastors' and Teachers' Pages</strong><br />
      You feel the pressure to keep up with everything, but you know you can't&#8211;no one could, given the job you have! Here's practical, usable worldview and apologetics help for you as a pastor or teacher.</li>
    <li class="unbelieversBlurb"><strong>The Skeptics' and Seekers' Pages</strong><br />
      I want this blog to be a welcome home for atheists, skeptics, seekers, and others who wonder about Christianity. At the same time I want to challenge you with questions that are directly related to you in your position of questioning or unbelief. That's what these articles are for. Feel free to interact with them here or to participate in the main blog discussions.</li>
  </ul>
  <?php } ?>

    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar") ) : ?>
 
Widgets!!
    <?php  endif; ?>

</div>
<!-- Closes Sidebars -->
