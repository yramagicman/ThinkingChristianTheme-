<div id="sidebar" class="sidebar">
  <?php if (!is_home()) {?>
  <ul class="blurbs">
    <p>&nbsp;</p>
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
  <ul>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar") ) : ?>
    <li>
      <h2>Search</h2>
    </li>
    <?php get_search_form() ?>
    <!--end search-->
    <li>
      <h2>Recent Posts</h2>
    </li>
    <?php wp_get_archives('type=postbypost&limit=10'); ?>
    <!--<h2>Browse by tags</h2>
  <ul>
      <?php // wp_tag_cloud('smallest=8&largest=17&number=30'); ?>
    </ul>-->
    <li>
      <h2>Topics</h2>
    </li>
    <?php wp_list_categories('title_li='); ?>
    <li>
      <h2>Archives</h2>
    </li>
    <?php wp_get_archives('type=monthly&limit=12'); ?>
    <li>
      <h2>Meta</h2>
    </li>
    <li>
      <?php wp_register(); ?>
    </li>
    <li>
      <?php wp_loginout(); ?>
    </li>
    <li>
      <?php wp_meta(); ?>
    </li>
    <li>
      <h2>Links</h2>
    </li>
    <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
    <?php  endif; ?>
  </ul>
</div>
<!-- Closes Sidebars -->
