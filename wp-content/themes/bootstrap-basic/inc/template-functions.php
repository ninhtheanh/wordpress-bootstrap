<?php
/**
 * Template functions
 * for functions to work with template example: get main column size, calcuate or check things, ...
 *
 */


if (!function_exists('bootstrapBasicGetMainColumnSize')) {
	/**
	 * Determine main column size from actived sidebar
	 * 
	 * For theme designer:
	 * By using this column size, Bootstrap grid size is 12. 
	 * You may change grid size of sidebar column to number you want; example sidebar-left.php grid 2, sidebar-right.php grid 3.
	 * Get Bootstrap grid size minus total sidebar grid size as conditions below this line.
	 * Both sidebar active. (12-2-3) = 7. Main column size is 7.
	 * Only left sidebar active. (12-2) = 10. Main column size is 10.
	 * Only right sidebar active. (12-3) = 9. Main column size is 9.
	 * No sidebar active. Main column is 12.
	 * Now, you write the condition above into the function below and return column size value.
	 * 
	 * @return integer return column size.
	 */
	function bootstrapBasicGetMainColumnSize() 
	{
		if (is_active_sidebar('sidebar-left') && is_active_sidebar('sidebar-right')) {
			// if both sidebar actived.
			$main_column_size = 6;
		} elseif (
				(is_active_sidebar('sidebar-left') && !is_active_sidebar('sidebar-right')) || 
				(is_active_sidebar('sidebar-right') && !is_active_sidebar('sidebar-left'))
		) {
			// if only one sidebar actived.
			$main_column_size = 9;
		} else {
			// if no sidebar actived.
			$main_column_size = 12;
		}

		return $main_column_size;
	}// bootstrapBasicGetMainColumnSize
}

/**
 * Customizing the Login Form
 */
function ta_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/header/logo.png) !important;
    		background-size: auto;			
		    height: 120px;
		    width: 194px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'ta_login_logo' );

function ta_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'ta_login_logo_url' );

function ta_login_logo_url_title() {
    return get_bloginfo();
}
add_filter( 'login_headertitle', 'ta_login_logo_url_title' );

/**
 * Hide Admin Bar in Front End
 */
function hide_admin_bar_from_front_end(){
  if (is_blog_admin()) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );

/**
 * For Security: 
 - Remove wp version in front end <meta name="generator" content="WordPress 4.4.2" />
 */
function remove_version_number() {
     return '';
}
add_filter('the_generator', 'remove_version_number');

/**
 * Catch first image in content if user does not upload in Featured Image.
*/
function catch_first_image_in_content($post_content, $w = 150, $h = 150, $zc = 1, $no_img = "/images/no-image-found.jpg") {	
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post_content, $matches);
	$first_img = $matches[1][0];
	if(empty($first_img)) {
		$first_img = get_template_directory_uri() . $no_img;
	}
	else
	{
		$first_img = get_template_directory_uri() . '/timthumb.php?src=' . urlencode($first_img) . '&h=' . $h . '&w=' . $w . '&zc=' . $zc . ''; //&h=150&w=150&zc=1
	}				
	return $first_img;
}