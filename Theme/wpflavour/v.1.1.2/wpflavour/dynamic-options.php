<?php
class TemplateToaster_Theme_Options_Dynamic
{
public $sections;
public $checkboxes;
public $contactvar;
public $settings;

 /*** Construct ***/
public function __construct()
{
// This will keep track of the checkbox options for the validate_settings function.
$this->checkboxes = array();
$this->settings = array();
$this->get_dynamic_options();
$this->sections['header'] = __('Header', 'wpflavour');
$this->sections['slideshow'] = __('Slideshow', 'wpflavour');
$this->sections['postcontent'] = __('Post/Content', 'wpflavour');
$this->sections['footer'] = __('Footer', 'wpflavour');
$this->sections['colors'] = __('Colors', 'wpflavour');
$this->sections['generaloptions'] = __('General', 'wpflavour');
$contactvar=get_option('contact_form',"ttr_test");
if( $contactvar == "ttr_test") {
$adminmail=get_option('admin_email');
$default=array(0=>array('ttr_email'=>''),1=>array('ttr_captcha_public_key'=>''),2=>array('ttr_captcha_private_key'=>''),3=>array('ttr_contact_us_error_message'=>'Message was not sent. Try Again.'),4=>array('ttr_contact_us_success_message'=>'Thanks! Your message has been sent.'));
update_option( 'contact_form', $default );
}
}
public function get_dynamic_options()
{
$menulogo = get_template_directory_uri() . '/menulogo.png';
$headerlogo = get_template_directory_uri() . '/logo.png';
$headerrss = get_template_directory_uri().'/images/headerrss.png';
$headerfacebook = get_template_directory_uri().'/images/headerfacebook.png';
$headerlinkedin = get_template_directory_uri().'/images/headerlinkedin.png';
$headertwitter = get_template_directory_uri().'/images/headertwitter.png';
$headerinstagram = get_template_directory_uri() . '/images/headerinstagram.png';
$footerrss = get_template_directory_uri().'/images/footerrss.png';
$footertwitter = get_template_directory_uri().'/images/footertwitter.png';
$footerinstagram = get_template_directory_uri() . '/images/footerinstagram.png';
$footerfacebook = get_template_directory_uri().'/images/footerfacebook.png';
$footerlinkedin = get_template_directory_uri().'/images/footerlinkedin.png';
$favicon = get_template_directory_uri().'/favicon.ico';
$copyright_url = home_url();
$headeryoutube = get_template_directory_uri().'/images/headeryoutube.png';
$footeryoutube = get_template_directory_uri().'/images/footeryoutube.png';
$facebook_url = 'http://www.facebook.com/TemplateToaster';
$linkedin_url = 'http://www.templatetoaster.com';
$twitter_url = 'http://twitter.com/templatetoaster';
$instagram_url = 'http://www.templatetoaster.com';
$youtube_url = 'https://www.youtube.com/templatetoaster';
$footer_facebook_url = 'http://www.facebook.com/TemplateToaster';
$footer_linkedin_url = 'http://www.templatetoaster.com';
$footer_twitter_url = 'http://twitter.com/templatetoaster';
$footer_instagram_url = 'http://www.templatetoaster.com';
$footer_youtube_url = 'https://www.youtube.com/templatetoaster';
/* Color Settings */

$this->settings['ttr_designedby'] = array(
'title' => __('Footer Designed By Color', 'wpflavour'),
'desc' => __('Choose footer Designed By color', 'wpflavour'),
'std' => '',
/*'class' => 'colorwell',*/
'type' => 'colorpicker',
'section' => 'colors');
$this->settings['ttr_designedbylink'] = array(
'title' => __('Footer Designed By Link Color', 'wpflavour'),
'desc' => __('Choose footer Designed By link color', 'wpflavour'),
'std' => '',
/*'class' => 'colorwell',*/
'type' => 'colorpicker',
'section' => 'colors');
$this->settings['ttr_blockheading'] = array(
'title' => __('Block Heading Color', 'wpflavour'),
'desc' => __('Choose block heading color', 'wpflavour'),
'std' => '',
/*'class' => 'colorwell',*/
'type' => 'colorpicker',
'section' => 'colors');
$this->settings['ttr_post_title_color'] = array(
'title' => __('Page/Post Title Normal Color', 'wpflavour'),
'desc' => __('Choose Page/Post title normal color', 'wpflavour'),
'std' => '',
/*'class' => 'colorwell',*/
'type' => 'colorpicker',
'section' => 'colors');
$this->settings['ttr_post_title_hover_color'] = array(
'title' => __('Post Title Hover Color', 'wpflavour'),
'desc' => __('Choose post title hover color', 'wpflavour'),
'std' => '',
/*'class' => 'colorwell',*/
'type' => 'colorpicker',
'section' => 'colors');
/* Post/Content Settings */
$this->settings['ttr_featured_post'] = array(
'title' => __('Number of Featured Posts', 'wpflavour'),
'desc' => __('How many posts would you like to be displayed as featured on the front page?', 'wpflavour'),
'std' => '1',
'pattern' => '\d+',
'type' => 'text',
'section' => 'postcontent');
$this->settings['ttr_post_layout'] = array(
'title' => __('Number of Columns', 'wpflavour'),
'desc' => __('How many columns would you like to display the posts after featured posts', 'wpflavour'),
'std' => '4',
'pattern' => '\d+',
'type' => 'text',
'section' => 'postcontent');
$this->settings['ttr_page_breadcrumb'] = array(
'title' => __('Show Breadcrumbs On Page', 'wpflavour'),
'desc' => __('Check this box if you would like to ENABLE the Breadcrumbs On Page', 'wpflavour'),
'std' => 0,
'type' => 'checkbox',
'section' => 'postcontent');
$this->settings['ttr_post_breadcrumb'] = array(
'title' => __('Show Breadcrumbs On Post', 'wpflavour'),
'desc' => __('Check this box if you would like to ENABLE the Breadcrumbs On Post', 'wpflavour'),
'std' => 0,
'type' => 'checkbox',
'section' => 'postcontent');
$this->settings['ttr_breadcrumb_text'] = array(
'title' => __('Breadcrumbs Prefix', 'wpflavour'),
'desc' => __('Choose breadcrumbs text', 'wpflavour'),
'std' => '',
'type' => 'text',
'section' => 'postcontent');
$this->settings['ttr_breadcrumb_text_separator'] = array(
'title' => __('Breadcrumbs Separator', 'wpflavour'),
'desc' => __('Set your Breadcrumbs separator', 'wpflavour'),
'std' => '',
'type' => 'text',
'section' => 'postcontent');
 /*** Header ***/
$this->settings['ttr_header_logo_enable'] = array(
'title' => __('Display Website Logo', 'wpflavour'),
'desc' => __('ENABLE/DISABLE the header logo', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'header');
$this->settings['ttr_logo'] = array(
'title' => __('Upload your website logo', 'wpflavour'),
'desc' => __('Upload your website logo', 'wpflavour'),
'std' => $headerlogo,
'type' => 'media',
'section' => 'header');
$this->settings['ttr_logo_image_width'] = array(
'title' => __('Logo Image Width(in px.)', 'wpflavour'),
'desc' => __('Enter width for logo', 'wpflavour'),
'std' => '100',
'pattern' => '\d+',
'type' => 'text',
'section' => 'header');
$this->settings['ttr_logo_image_height'] = array(
'title' => __('Logo Image Height(in px.)', 'wpflavour'),
'desc' => __('Enter width for logo', 'wpflavour'),
'std' => '100',
'pattern' => '\d+',
'type' => 'text',
'section' => 'header');
/* Slideshow Settings */
$this->settings['ttr_slide_show_image0'] = array(
'title' => __('Slideshow Image 1', 'wpflavour'),
'desc' => __('Choose Image for Slide Show 1', 'wpflavour'),
'std' => '',
'type' => 'media',
'section' => 'slideshow');
$this->settings['ttr_horizontal_align0'] = array(
'title' => __('Horizontal Alignment', 'wpflavour'),
'desc' => __('Set Horizontal Alignment', 'wpflavour'),
'type' => 'select',
'std' => '',
'choices' => array(
'choice1' => __('', 'wpflavour'),
'choice2' => __('Left', 'wpflavour'),
'choice3' => __('Center', 'wpflavour'),
'choice4' => __('Right', 'wpflavour')),
'section' => 'slideshow');
$this->settings['ttr_vertical_align0'] = array(
'title' => __('Vertical Alignment', 'wpflavour'),
'desc' => __('Set Vertical Alignment', 'wpflavour'),
'type' => 'select',
'std' => '',
'choices' => array(
'choice1' => __('', 'wpflavour'),
'choice2' => __('Top', 'wpflavour'),
'choice3' => __('Center', 'wpflavour'),
'choice4' => __('Bottom', 'wpflavour')),
'section' => 'slideshow');
$this->settings['ttr_stretch0'] = array(
'title' => __('Stretch', 'wpflavour'),
'desc' => __('Set Stretch value', 'wpflavour'),
'type' => 'select',
'std' => '',
'choices' => array(
'choice1' => __('None', 'wpflavour'),
'choice2' => __('fill', 'wpflavour'),
'choice3' => __('Uniform To Fill', 'wpflavour'),
'choice4' => __('Uniform', 'wpflavour')),
'section' => 'slideshow');
/* Slideshow Settings */
$this->settings['ttr_slide_show_image1'] = array(
'title' => __('Slideshow Image 2', 'wpflavour'),
'desc' => __('Choose Image for Slide Show 2', 'wpflavour'),
'std' => '',
'type' => 'media',
'section' => 'slideshow');
$this->settings['ttr_horizontal_align1'] = array(
'title' => __('Horizontal Alignment', 'wpflavour'),
'desc' => __('Set Horizontal Alignment', 'wpflavour'),
'type' => 'select',
'std' => '',
'choices' => array(
'choice1' => __('', 'wpflavour'),
'choice2' => __('Left', 'wpflavour'),
'choice3' => __('Center', 'wpflavour'),
'choice4' => __('Right', 'wpflavour')),
'section' => 'slideshow');
$this->settings['ttr_vertical_align1'] = array(
'title' => __('Vertical Alignment', 'wpflavour'),
'desc' => __('Set Vertical Alignment', 'wpflavour'),
'type' => 'select',
'std' => '',
'choices' => array(
'choice1' => __('', 'wpflavour'),
'choice2' => __('Top', 'wpflavour'),
'choice3' => __('Center', 'wpflavour'),
'choice4' => __('Bottom', 'wpflavour')),
'section' => 'slideshow');
$this->settings['ttr_stretch1'] = array(
'title' => __('Stretch', 'wpflavour'),
'desc' => __('Set Stretch value', 'wpflavour'),
'type' => 'select',
'std' => '',
'choices' => array(
'choice1' => __('None', 'wpflavour'),
'choice2' => __('fill', 'wpflavour'),
'choice3' => __('Uniform To Fill', 'wpflavour'),
'choice4' => __('Uniform', 'wpflavour')),
'section' => 'slideshow');
/* Slideshow Settings */
$this->settings['ttr_slide_show_image2'] = array(
'title' => __('Slideshow Image 3', 'wpflavour'),
'desc' => __('Choose Image for Slide Show 3', 'wpflavour'),
'std' => '',
'type' => 'media',
'section' => 'slideshow');
$this->settings['ttr_horizontal_align2'] = array(
'title' => __('Horizontal Alignment', 'wpflavour'),
'desc' => __('Set Horizontal Alignment', 'wpflavour'),
'type' => 'select',
'std' => '',
'choices' => array(
'choice1' => __('', 'wpflavour'),
'choice2' => __('Left', 'wpflavour'),
'choice3' => __('Center', 'wpflavour'),
'choice4' => __('Right', 'wpflavour')),
'section' => 'slideshow');
$this->settings['ttr_vertical_align2'] = array(
'title' => __('Vertical Alignment', 'wpflavour'),
'desc' => __('Set Vertical Alignment', 'wpflavour'),
'type' => 'select',
'std' => '',
'choices' => array(
'choice1' => __('', 'wpflavour'),
'choice2' => __('Top', 'wpflavour'),
'choice3' => __('Center', 'wpflavour'),
'choice4' => __('Bottom', 'wpflavour')),
'section' => 'slideshow');
$this->settings['ttr_stretch2'] = array(
'title' => __('Stretch', 'wpflavour'),
'desc' => __('Set Stretch value', 'wpflavour'),
'type' => 'select',
'std' => '',
'choices' => array(
'choice1' => __('None', 'wpflavour'),
'choice2' => __('fill', 'wpflavour'),
'choice3' => __('Uniform To Fill', 'wpflavour'),
'choice4' => __('Uniform', 'wpflavour')),
'section' => 'slideshow');
/* Footer Settings */

$this->settings['ttr_font_size_designedby'] = array(
'title' => __('Footer Designed By Font Size', 'wpflavour'),
'desc' => __('Enter the font size of Footer Designed By', 'wpflavour'),
'std' => '',
'type' => 'text',
'section' => 'footer');
$this->settings['ttr_deisgnedby_text'] = array(
'title' => __('Footer Designed By text', 'wpflavour'),
'desc' => __('Enter Footer Designed By text', 'wpflavour'),
'std' => 'Powered by: ronyman.com',
'type' => 'text',
'section' => 'footer');
$this->settings['ttr_font_size_designedbylink'] = array(
'title' => __('Footer Designed By Link Font Size', 'wpflavour'),
'desc' => __('Enter the font size of Footer Designed By Link', 'wpflavour'),
'std' => '',
'type' => 'text',
'section' => 'footer');
$this->settings['ttr_designedby_link'] = array(
'title' => __('Footer Designed By Link ', 'wpflavour'),
'desc' => __('Enter the text of Footer Designed By Link', 'wpflavour'),
'std' => 'WpFlavour Theme',
'type' => 'text',
'section' => 'footer');
$this->settings['ttr_designedby_link_url'] = array(
'title' => __('Footer Designed By Link URL', 'wpflavour'),
'desc' => __('Enter footer designed by link URL, must be a valid URL(containing http://)', 'wpflavour'),
'std' =>'https://www.ronyman.com',
'type' => 'text',
'section' => 'footer');
/** General Options **/

$this->settings['ttr_theme_bootstrap_enable'] = array(
'title' => __('Enable Theme Bootstrap Javascipt', 'wpflavour'),
'desc' => __('ENABLE/DISABLE Theme Bootstrap Javascipt', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_google_analytics'] = array(
'title' => __('Google Analytics', 'wpflavour'),
'desc' => __('Text Box for google analytics', 'wpflavour'),
'std' => '',
'type' => 'textarea',
'section' => 'generaloptions');
$this->settings['ttr_google_analytics_enable'] = array(
'title' => __('Enable Google Analytics', 'wpflavour'),
'desc' => __('ENABLE/DISABLE Google Analytics', 'wpflavour'),
'std' => 0,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_custom_style'] = array(
'title' => __('Custom CSS', 'wpflavour'),
'desc' => __('Text Box for custom css', 'wpflavour'),
'std' => '',
'type' => 'textarea',
'section' => 'generaloptions');
$this->settings['ttr_all_page_title'] = array(
'title' => __('Display All Page Titles', 'wpflavour'),
'desc' => __('On/Off the page title', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_all_post_title'] = array(
'title' => __('Display All Post Titles', 'wpflavour'),
'desc' => __('On/Off the post title', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_post_navigation_above'] = array(
'title' => __('Display Navigation above the posts', 'wpflavour'),
'desc' => __('Show/Hide navigation above the posts', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_post_navigation_below'] = array(
'title' => __('Display Navigation below the posts', 'wpflavour'),
'desc' => __('Show/Hide navigation below the posts', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_older_newer_posts_above'] = array(
'title' => __('Display Older/Newer Posts Link  above the posts', 'wpflavour'),
'desc' => __('Show/Hide Older/Newer Posts Link above the posts', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_older_newer_posts_below'] = array(
'title' => __('Display Older/Newer Posts Link below the posts', 'wpflavour'),
'desc' => __('Show/Hide Older/Newer Posts Link below the posts', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_post_navigation_post'] = array(
'title' => __('Display Post Navigation', 'wpflavour'),
'desc' => __('Show/Hide post navigation', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_post_category_post'] = array(
'title' => __('Display Post Category', 'wpflavour'),
'desc' => __('Show/Hide post Category', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_previous_next_links'] = array(
'title' => __('Display Previous/next Posts Link', 'wpflavour'),
'desc' => __('Show/Hide Previous/next  Posts Link', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_pagination_link_posts_above'] = array(
'title' => __('Display Pagination Link Of Post Pages above the posts', 'wpflavour'),
'desc' => __('Show/Hide Pagination Link Of Post Pages above the posts', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_pagination_link_posts_below'] = array(
'title' => __('Display Pagination Link Of Post Pages below the posts', 'wpflavour'),
'desc' => __('Show/Hide Pagination Link Of Post Pages  below the posts', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_comments_closed_text'] = array(
'title' => __('Display Comments are closed ', 'wpflavour'),
'desc' => __('Show/Hide Comments are closed', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_comments_list'] = array(
'title' => __('Display Comments List', 'wpflavour'),
'desc' => __('Show/Hide Comments ', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_comments_form'] = array(
'title' => __('Display Comments Form', 'wpflavour'),
'desc' => __('Show/Hide Comment form ', 'wpflavour'),
'std' => 0,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_comment_list_form'] = array(
'title' => __('Show Comments list', 'wpflavour'),
'desc' => __('Check this box to show comment form below comments list.', 'wpflavour'),
'type' => 'radio',
'std' => 'choice1',
'choices' => array(
'choice1' => __('Above Comment Form', 'wpflavour'),
'choice2' => __('Below Comment Form', 'wpflavour')
),
'section' => 'generaloptions');
$this->settings['ttr_avatar_size'] = array(
'title' => __('Avatar Size', 'wpflavour'),
'desc' => __('Set Avatar size ', 'wpflavour'),
'std' => '',
'pattern' => '\d+',
'type' => 'text',
'section' => 'generaloptions');
$this->settings['ttr_back_to_top'] = array(
'title' => __('Display Back To Top Button', 'wpflavour'),
'desc' => __('on/off the back to top button', 'wpflavour'),
'std' => 1,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_icon_back_to_top'] = array(
'title' => __('Choose icon for Back To Top Button', 'wpflavour'),
'desc' => __('Choose icon for back to top button', 'wpflavour'),
'std' => '',
'type' => 'media',
'section' => 'generaloptions');
$this->settings['ttr_read_more'] = array(
'title' => __('Read More Text', 'wpflavour'),
'desc' => __('Change Text For Read More Link', 'wpflavour'),
'std' => __('Continue Reading', 'wpflavour'),
'type' => 'text',
'section' => 'generaloptions');
$this->settings['ttr_read_more_button'] = array(
'title' => __('Display Button For Read More', 'wpflavour'),
'desc' => __('Enable/Disable the Read More button', 'wpflavour'),
'std' => 0,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_post1_enable'] = array(
'title' => __('Read more on all posts', 'wpflavour'),
'desc' => __('on/off the Read More on all posts', 'wpflavour'),
'std' => 0,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_read_length'] = array(
'title' => __('Word Count', 'wpflavour'),
'desc' => __('After how many words you need read more', 'wpflavour'),
'std' => '',
'pattern' => '\d+',
'type' => 'text',
'section' => 'generaloptions');
$this->settings['ttr_search_icon_enable'] = array(
'title' => __('Display Search Icon In Search Widget', 'wpflavour'),
'desc' => __('Display/Hide Search Icon', 'wpflavour'),
'std' => 0,
'type' => 'checkbox',
'section' => 'generaloptions');
$this->settings['ttr_favicon_image'] = array(
'title' => __('Favicon Image', 'wpflavour'),
'desc' => __('Set Favicon image', 'wpflavour'),
'std' => $favicon,
'type' => 'media',
'section' => 'generaloptions');
}
}
?>
