</div>
<footer id="footer">
  <!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. --

  <div class="presenting">
    <?php bloginfo('name'); ?>
    is proudly powered by <a href="http://wordpress.org/">WordPress</a><br />
      Web design by <a href="http://www.perpetuallycreative.com/web">Perpetually Creative</a>.
      All written content not attributed to other sources is copyright<br />&copy; Thomas A. Gilson as of the date of posting.<br /> <a href="http://www.thinkingchristian.net/copyright-information/">Permissions information and image credits here</a>.<br /
      <a href="http://www.dreamhost.com/donate.cgi?id=16600"><img border="0" alt="Donate towards my web hosting bill!" src="https://secure.newdream.net/donate1.gif" /></a>
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
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript"
var sc_project=761087;
var sc_invisible=1;
var sc_security="9179a73e";
var sc_https=1;
var scJsHost = (("https:" == document.location.protocol)
"https://secure." : "http://www.")
document.write("<sc"+"ript type='text/javascript' src='"
scJsHost
"statcounter.com/counter/counter.js'></"+"script>")
</script
<noscript>
<div class="statcounter"><a title="websitstatistics" href="http://statcounter.com/
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/761087/0/9179a73e/1/
alt="website statistics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

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

<!-- BEGIN OWA Tracking Code -->
<?php
// require_once('/home/thinkingchristian/thinkingchristian.net/webstats/owa_php.php')

// $owa = new owa_php();
// Set the site id you want to trac
// $owa->setSiteId('0b6c7a3b80ce532f970911c4ab6f5c85');
// Uncomment the next line to set your page title
//$owa->setPageTitle('')
// Set other page propertie
//$owa->setProperty('Post')
// $owa->trackPageView()

  ?>
<!-- END OWA Tracking Code -->

</body></html>
