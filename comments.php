<?php

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>

<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
    return;
  }
?>
<!-- You can start editing here. -->
<?php if ( have_comments() ) : ?>
<h3 class="comments">
  <?php comments_number('No Responses', 'One Response', '% Responses' );?>
  to &#8220;
  <?php the_title(); ?>
  &#8221;</h3>
<!--<div class="navigation">
  <div class="alignleft">
    <?php previous_comments_link() ?>
  </div>
  <div class="alignright">
    <?php next_comments_link() ?>
  </div>
</div>-->
<ol class="commentlist">
  <?php wp_list_comments(); ?>
  <?php if  ( class_exists( 'WPEditableComments'  ) ) { WPEditableComments::edit('Edit Comment'); } ?>
  &nbsp;&nbsp;&nbsp;
  <?php if  ( class_exists( 'WPEditableComments'  ) ) { WPEditableComments::delete('Delete Comment'); } ?>
</ol>
<!--<div class="navigation">
  <div class="alignleft">
    <?php previous_comments_link() ?>
  </div>
  <div class="alignright">
    <?php next_comments_link() ?>
  </div>
</div>-->
<?php else : // this is displayed if there are no comments so far ?>
<?php if ( comments_open() ) : ?>
<!-- If comments are open, but there are no comments. -->
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p class="nocomments"><!--Comments are closed.--></p>
<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<div id="respond">
  <h3>

  </h3>
  <div class="cancel-comment-reply">
    <small>
    <?php cancel_comment_reply_link(); ?>
    </small>
  </div>
  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
  <?php else : ?>
 <p><small>By commenting here you acknowledge that you have read and agree to abide by this site's <a href="http://www.thinkingchristian.net/unfiled/2007/12/discussion-policy/">discussion policies</a>.</small></p>
   
    <div class="comInfo" style="display: none;">
      <p class="pComInfo"><small>Articles filed as "For Parents" are intended for the support and encouragement of Christian parents. Questions are always welcome, if offered in the spirit of supportive exploration. Comments not contributing to the stated purpose will be removed. Debate is welcomed on the blog's main pages or in the Atheists/Skeptics section.</small></p>
      <p class="lComInfo"><small>Articles filed as "For Pastors and Teachers" are intended for the support and encouragement of Christian leaders. Questions are always welcome, if offered in the spirit of supportive exploration. Comments not contributing to the stated purpose will be removed. Debate is welcomed on the blog's main pages or in the Atheists/Skeptics section.</small></p>
      <p class="mComInfo"><small>Articles filed as "For Christians in the Marketplace" are intended for the support and encouragement of believers going about their day to day business. Questions are always welcome, if offered in the spirit of supportive exploration. Comments not contributing to the stated purpose will be removed. Debate is welcomed on the blog's main pages or in the Atheists/Skeptics section.</small></p>
      <p>
    </div>
       <?php comment_form();?> 
       
       
         <?php endif; // If registration required and not logged in ?>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>
