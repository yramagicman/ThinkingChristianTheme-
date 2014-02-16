<?php
get_header();
?>

<div class="content">
<div class="body">
  <div class="padding">
    <?php get_search_form(); ?>
    <h2>Archives by Month:</h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
    <h2>Archives by Subject:</h2>
    <ul>
      <?php wp_list_categories(); ?>
    </ul>
  </div>
</div>
<!--sidebar-->
<?php get_sidebar(); ?>
<!--footer closes all divs and gets other info-->
<?php get_footer(); ?>
