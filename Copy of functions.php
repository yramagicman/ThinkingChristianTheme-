<?php
add_theme_support( 'automatic-feed-links' );
/*if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
  'name'=>'green',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ));
}
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
  'name'=>'red',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ));
}
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
  'name'=>'orange',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ));
}*/
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
  'name'=>'sidebar',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ));
}


    class jgOptions {
            function getOptions() {
                    $options = get_option('jg_options');
                    if (!is_array($options)) {
                        $options['jg_colorscheme'] = 'blue';
                        $options['jg_sidebar_layout'] = 'r';
                        $options['jg_menu'] = 'pages';
                        update_option('jg_options', $options);
                    }
                    return $options;
            }
            function add() {
                if(isset($_POST['jg_save'])) {
                    $options = jgOptions::getOptions();

                    if($_POST['jg_colorscheme'] == 'brown') {
                        $options['jg_colorscheme'] = 'brown';
                    }
                    else if($_POST['jg_colorscheme'] == 'gray') {
                        $options['jg_colorscheme'] = 'gray';
                    }
                    else {
                        $options['jg_colorscheme'] = 'blue';
                    }

                    if($_POST['jg_sidebar_layout'] == 'n') {
                        $options['jg_sidebar_layout'] = 'n';
                    }
                    else if($_POST['jg_sidebar_layout'] == 'l') {
                        $options['jg_sidebar_layout'] = 'l';
                    }
                    else if($_POST['jg_sidebar_layout'] == 'll') {
                        $options['jg_sidebar_layout'] = 'll';
                    }
                    else if($_POST['jg_sidebar_layout'] == 'rr') {
                        $options['jg_sidebar_layout'] = 'rr';
                    }
                    else if($_POST['jg_sidebar_layout'] == 'lr') {
                        $options['jg_sidebar_layout'] = 'lr';
                    }
                    else {
                        $options['jg_sidebar_layout'] = 'r';
                    }
                    update_option('jg_options', $options);
                } else {
                    jgOptions::getOptions();
                }
                add_theme_page(__('my_Theme Theme Options', 'my_Theme'), __('my_Theme Theme Options', 'my_Theme'), 'edit_themes', basename(__FILE__), array('jgOptions', 'display'));
            }

            function display() {
                $options = jgOptions::getOptions();
    ?>
            <form action="#" method="post" enctype="multipart/form-data" name="jg_form" id="jg_form">
            <div class="wrap">
                <h2><?php _e('my_Theme Theme Options', 'my_Theme'); ?></h2>
                <?php if(isset($_POST['jg_save'])) { ?>
                    <div style="background: #FFF299; padding: 5px; border: 1px #FFDE99 solid;"><?php _e('Settings Saved'); ?></div>
                <?php } ?>
                <hr>
                <p class="submit">
                    <input class="button-primary" type="submit" name="jg_save" value="<?php _e('Save Changes', 'my_Theme'); ?>" />
                </p>
                <hr>
                <h3><?php _e('Color schemes', 'my_Theme'); ?></h3>
                <table cellspacing="10">
                    <tr>
                        <td><?php _e('Choose your color scheme: ', 'my_Theme'); ?></td>
                        <td><select name="jg_colorscheme">
                                <option value="blue" <?php if($options['jg_colorscheme'] == "blue") { ?> selected="selected" <?php } ?> ><?php _e('Blue'); ?></option>
                                <option value="brown"<?php if($options['jg_colorscheme'] == "brown") { ?> selected="selected" <?php } ?> ><?php _e('Brown'); ?></option>
                                <option value="gray"<?php if($options['jg_colorscheme'] == "gray") { ?> selected="selected" <?php } ?> ><?php _e('Gray'); ?></option>
                            </select>
                        </td>
                    </tr>
                </table>
                <hr>
    <h3><?php _e('Sidebar Options', 'my_Theme'); ?></h3>
    <table cellspacing="10">
                    <tr><td><?php _e('Choose your sidebar layout:', 'my_Theme'); ?></td><td></td><td></td></tr>
                    <tr>
                        <td><input name="jg_sidebar_layout" type="radio" value="n" <?php if($options['jg_sidebar_layout'] == "n") echo 'checked'; ?> />&nbsp;&nbsp;<label><img src="<?php bloginfo('template_url');?>/images/optionpage/nosb.png" />&nbsp;&nbsp;<?php _e('No Sidebar', 'my_Theme'); ?></label></td>
                        <td><input name="jg_sidebar_layout" type="radio" value="l" <?php if($options['jg_sidebar_layout'] == "l") echo 'checked'; ?> />&nbsp;&nbsp;<label><img src="<?php bloginfo('template_url');?>/images/optionpage/lsb.png" />&nbsp;&nbsp;<?php _e('One Left Sidebar', 'my_Theme'); ?></label></td>
                    </tr>
                    <tr>
                        <td><input name="jg_sidebar_layout" type="radio" value="r" <?php if($options['jg_sidebar_layout'] == "r") echo 'checked'; ?> />&nbsp;&nbsp;<label><img src="<?php bloginfo('template_url');?>/images/optionpage/rsb.png" />&nbsp;&nbsp;<?php _e('One Right Sidebar', 'my_Theme'); ?></label></td>
                        <td><input name="jg_sidebar_layout" type="radio" value="ll" <?php if($options['jg_sidebar_layout'] == "ll") echo 'checked'; ?> />&nbsp;&nbsp;<label><img src="<?php bloginfo('template_url');?>/images/optionpage/2lsb.png" />&nbsp;&nbsp;<?php _e('Two Left Sidebars', 'my_Theme'); ?></label></td>
                    </tr>
                    <tr>
                        <td><input name="jg_sidebar_layout" type="radio" value="rr" <?php if($options['jg_sidebar_layout'] == "rr") echo 'checked'; ?> />&nbsp;&nbsp;<label><img src="<?php bloginfo('template_url');?>/images/optionpage/2rsb.png" />&nbsp;&nbsp;<?php _e('Two Right Sidebars', 'my_Theme'); ?></label></td>
                        <td><input name="jg_sidebar_layout" type="radio" value="lr" <?php if($options['jg_sidebar_layout'] == "lr") echo 'checked'; ?> />&nbsp;&nbsp;<label><img src="<?php bloginfo('template_url');?>/images/optionpage/lrsb.png" />&nbsp;&nbsp;<?php _e('Two Sidebars with Content in center', 'my_Theme'); ?></label></td>
                    </tr>
                </table>
                <hr>
                <h3><?php _e('Page Menu or Category Menu', 'my_Theme'); ?></h3>
                <table cellspacing="10">
                    <tr>
                        <td><?php _e('Display pages or categories as dropdown menu: ', 'my_Theme'); ?></td>
                        <td><select name="jg_menu">
                                <option value="pages" <?php if($options['jg_menu'] == "pages") { ?> selected="selected" <?php } ?> ><?php _e('Pages'); ?></option>
                                <option value="categories"<?php if($options['jg_menu'] == "categories") { ?> selected="selected" <?php } ?> ><?php _e('Categories'); ?></option>
                            </select>
                        </td>
                    </tr>
                </table>               
                <hr>
                <h3><?php _e('Information Box in sidebar', 'my_Theme'); ?></h3>
                <table cellspacing="10">
                    <tr>
                        <td><?php _e('Show Information box in sidebar: ', 'my_Theme'); ?></td>
                        <td><input name="jg_infobox" type="checkbox" value="checkbox" <?php if($options['jg_infobox']) echo "checked='checked'"; ?> /></td>
                    </tr>
                    <tr>
                        <td><?php _e('Write your information here: ','my_Theme'); ?></td>
                        <td><textarea name="jg_infotxt" rows="5" cols="40"><?php echo $options['jg_infotxt']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td><?php _e('Show Gravatar in information box: ','my_Theme'); ?></td>
                        <td><input name="jg_infogravtar" type="checkbox" value="checkbox" <?php if($options['jg_infogravtar']) echo "checked='checked'"; ?> /></td>
                    </tr>
                </table>
                <p class="submit">
                    <input class="button-primary" type="submit" name="jg_save" value="<?php _e('Save Changes', 'my_Theme'); ?>" />
                </p>
            </div>
    <?php
            }
    }

    add_action('admin_menu', array('jgOptions', 'add'));

?>