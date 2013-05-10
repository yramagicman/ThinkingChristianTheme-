<?php
get_header();
?>
<div class="content archive">
<div class="body">
  <div class="padding">
    <?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
    <h1 class="pagetitle"> <?php single_cat_title(); ?>
    </h1>
    <em><?php echo category_description( $category_id ); ?></em>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    <h1 class="pagetitle" style="margin-top: 35px;">
      <?php single_tag_title(); ?>
     </h1>
<h3><em><?php echo tag_description( $tag_id); ?></em></h3>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h2 class="pagetitle">Archive for
      <?php the_time('F jS, Y'); ?>
    </h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h2 class="pagetitle">Archive for
      <?php the_time('F, Y'); ?>
    </h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2 class="pagetitle">Archive for
      <?php the_time('Y'); ?>
    </h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2 class="pagetitle">Author Archive</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h2 class="pagetitle">Blog Archives</h2>
      <?php } ?>
    <?php if (is_paged()) : ?>
    <div class="navigation">
      <div class="alignleft">
        <?php next_posts_link('&laquo; Older Entries') ?>
      </div>
      <div class="alignright">
        <?php previous_posts_link('Newer Entries &raquo;') ?>
      </div>
    </div>
    <?php endif; ?>
    <?php while (have_posts()) : the_post(); ?>
    <div <?php post_class() ?>>
      <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        <?php the_title(); ?>
        </a></h2>
      <small>
      <?php the_time('l, F jS, Y') ?>
      </small>
      <div class="entry">
        <?php the_excerpt() ?>
      </div>
      <div class="catntag">
       <!-- <?php if (!in_category('uncategorized') ) :?>
        Categories:
        <?php the_category(', '); ?>
        <?php endif; ?>-->
        <?php if (has_tag() ) :?>
        <br/>
        Tagged As:
        <?php the_tags('<em></em>', ', ', ''); ?>
        <?php endif; ?>
      </div>
      <p>&nbsp;</p>
    </div>
    <?php endwhile; ?>
    <?php if (is_paged()) : ?>
    <!-- <div class="navigation">
      <div class="alignleft">
        <?php next_posts_link('&laquo; Older Entries') ?>
      </div>
      <div class="alignright">
        <?php previous_posts_link('Newer Entries &raquo;') ?>
      </div>
    </div> -->
    <?php endif; ?>
    <?php else :

    if ( is_category() ) { // If this is a category archive
      printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
    } else if ( is_date() ) { // If this is a date archive
      echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
    } else if ( is_author() ) { // If this is a category archive
      $userdata = get_userdatabylogin(get_query_var('author_name'));
      printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
    } else {
      echo("<h2 class='center'>No posts found.</h2>");
    }
    get_search_form();

  endif;

?>
</div>
<div class="navigation">
  <div class="alignleft">
    <?php next_posts_link('&laquo; Older Entries') ?>
  </div>
  <div class="alignright">
    <?php previous_posts_link('Newer Entries &raquo;') ?>
  </div>
</div>
  </div>

<?php get_template_part( 'sidebar2' ); ?>
<?php get_footer(); ?>
