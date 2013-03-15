<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<title>
<?php if (is_home () ) { bloginfo('name'); echo " - "; bloginfo('description');
} elseif (is_category() ) {single_cat_title(); echo " - "; bloginfo('name');
} elseif (is_single() || is_page() ) {single_post_title(); echo " - "; bloginfo('name');
} elseif (is_search() ) {bloginfo('name'); echo " search results: "; echo esc_html($s);
} else { wp_title('',true); }?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"  />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
*********************************************************************
************ STYLES ENQUED IN FUNCTIONS.PHP *************************
*********************************************************************
-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- ******************  WP HEAD  *************************-->
<?php wp_head(); ?>
<script type="text/javascript">
fbg.hideFOUT('asap');
</script>
<?php
// marketplace id = 1163
// leaders id = 1148
// nonbelievers id = 1162
// parents id =  1149
// pastors-teachers id =1166
$category = get_the_category(); //get the category of the post
// $catID = $category[0]->slug; //find the id
$catID= 123;
//marketplace
if ($catID == 'marketplace') : ?>
<style type="text/css">
/* <?php echo $category[0]->slug ?>*/
header {
 background: url(<?php echo get_template_directory_uri() ;
?>/images/businessHeader.jpg) no-repeat center top;
}
.marketBlurb, .mComInfo {
  display: block;
}
</style>
<?php
// leaders
elseif ($catID == 'leaders') :?>
<style type="text/css">
/* <?php echo $category[0]->slug ?>*/
header {
 background: url(<?php echo get_template_directory_uri() ;
?>/images/pastorHeader.jpg) no-repeat center top;
}
.leadersBlurb, .lComInfo {
  display: block;
}
</style>
<?php
// pastors-teachers
elseif ($catID == 'pastors-teachers') :?>
<style type="text/css">
/* <?php echo $category[0]->slug ?>*/
header {
 background: url(<?php echo get_template_directory_uri() ;
?>/images/pastorHeader.jpg) no-repeat center top;
}
.leadersBlurb, .lComInfo {
  display: block;
}
</style>
<?php
//nonbelievers
elseif ($catID == 'nonbelievers') :?>
<style type="text/css">
/* <?php echo $category[0]->slug ?>*/
header {
 background: url(<?php echo get_template_directory_uri() ;
?>/images/thinkerHeader.jpg) no-repeat center top;
}
.unbelieversBlurb, .uComInfo {
  display: block;
}
</style>
<?php
//parents
elseif ($catID == 'parents') :?>
<style type="text/css">
/* <?php echo $category[0]->slug ?>*/
header {
 background: url(<?php echo get_template_directory_uri() ;
?>/images/familyHeader.jpg) no-repeat center top;
}
.parentsBlurb, .pComInfo {
  display: block;
}
</style>
<?php
else :?>
<style type="text/css">
 <?php 
 // echo $category[0]->slug 
?>
header {
 background: url(<?php echo get_template_directory_uri() ;
?>/images/homeHeader.jpg) no-repeat center top;
}
.blurbs {
  display: none;
}
</style>
<?php endif; ?>
<?php if (is_home()) :?>
<style type="text/css">
header {
 background: url(<?php echo get_template_directory_uri() ;
?>/images/homeHeader.jpg) no-repeat center top;
}
.blurbs, .comInfo {
  display: none;
}
</style>
<?php endif; ?>

</head>
<body <?php body_class(); ?> >
  <nav class="navGeneral">
    <?php wp_nav_menu( array( 'container_class' => 'menu', 'theme_location' => 'generalNav' ) ); ?>
  </nav>
<div class="container">  
<header>
  <hgroup class="headText">
    <h1 class="blogTitle"><a href="<?php echo home_url(); ?>">
      <?php bloginfo('name'); ?>
      </a></h1>
    <!--blog name and link to home page-->
    <h1 id="tagLine" class="normal">
      <?php bloginfo('description'); ?>
    </h1>
    <!--tagline-->
  </hgroup>
  <nav class="nav">
    <?php wp_nav_menu( array( 'container_class' => 'menu', 'theme_location' => 'primary' ) ); ?>
  </nav>
</header>
