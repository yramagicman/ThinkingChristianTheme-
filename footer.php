</div>
<footer id="footer">
  <!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
  <div class="presenting">
    <?php bloginfo('name'); ?>
    is proudly powered by <a href="http://wordpress.org/">WordPress</a><br />
      Web design by <a href="http://www.perpetuallycreative.com/web">Perpetually Creative</a>.
      All written content not attributed to other sources is copyright<br />&copy; Thomas A. Gilson as of the date of posting.<br /> <a href="http://www.thinkingchristian.net/copyright-information/">Permissions information and image credits here</a>.
    </div>
  </div>
   <div class="footwidget"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer") ) : ?>
   
   <?php  endif; ?></div>
<!--  <div id="footRss">
    <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
  </div> -->
  <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
  <?php wp_footer(); ?>
</footer>
<!-- Start of St@tCounter Code -->
<script type="text/javascript">
var sc_project=761087; 
var sc_invisible=1; 
var sc_partition=6; 
var sc_security="9179a73e"; 
</script>
<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script>
<noscript>
<div class="statcounter" style="display:none;">
  <a class="statcounter" href="http://www.statcounter.com/"><img class="statcounter" src="http://c7.statcounter.com/761087/0/9179a73e/0/" alt="blog stats" /></a>
</div>
</noscript>
<script>
var x = document.getElementById('sidebar').getElementsByTagName('h2');
var count = x.length;
for (var i = 2; i < count; i+= 1) {
    x[i].className = x[i].className += ' fold closed';
}
var jq = jQuery.noConflict();
jq('.fold').next().hide();
jq('.fold').click(function() {
  jq(this).next().slideToggle();
  jq(this).toggleClass(function name() {
   if (jq(this).parent().find('h2').is('.closed')) {
         return 'open';
       } else {
         return 'closed';
       }  
  });
});
</script>
<!-- End of St@tCounter Code -->



</body></html>
