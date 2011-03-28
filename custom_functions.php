<?php

// move nav bar below header
remove_action('thesis_hook_before_header', 'thesis_nav_menu');
add_action('thesis_hook_after_header','thesis_nav_menu');

// Emergency use only, when an upgrade fails.
//delete_option('thesis_design_options');
//delete_option('thesis_options');

// This needs to have some performance evaluation.
// Seems like I would want a flag or singleton here
// to control this between invocations.
function remove_multimedia_box() {
   $design_options = new thesis_design_options;
   $design_options->get_options();
   $design_options->multimedia_box['status'] = 0;         
   update_option('thesis_design_options', $design_options);         
}         
remove_multimedia_box();


/// Cool stuff!
if (file_exists(THESIS_CUSTOM . '/wiaw_fat_footer.php')){
	include(THESIS_CUSTOM . '/wiaw_fat_footer.php');
}

/*
if (file_exists(THESIS_CUSTOM . '/wiaw_featured_new.php')){
	include(THESIS_CUSTOM . '/wiaw_featured_new.php');
}
*/

if (file_exists(THESIS_CUSTOM . '/wiaw_before_content.php')){ /* before content breadcrumbs*/
	include(THESIS_CUSTOM . '/wiaw_before_content.php');
}

if (file_exists(THESIS_CUSTOM . '/wiaw_custom_sidebars.php')){
	include(THESIS_CUSTOM . '/wiaw_custom_sidebars.php');
}

// This will be a file with helper functions.
if (file_exists(THESIS_CUSTOM . '/is_custom_pages.php')){
	include(THESIS_CUSTOM . '/is_custom_pages.php');
}

/*
if (file_exists(THESIS_CUSTOM . '/header_footer_nosidebar_18.php')){
  include(THESIS_CUSTOM . '/header_footer_nosidebar_18.php');
}

if (file_exists(THESIS_CUSTOM . '/header_nofooter_nosidebar_18.php')){
  include(THESIS_CUSTOM . '/header_nofooter_nosidebar_18.php');
}

if (file_exists(THESIS_CUSTOM . '/noheader_nofooter_nosidebar_18.php')){
  include(THESIS_CUSTOM . '/noheader_nofooter_nosidebar_18.php');
}
*/

if (file_exists(THESIS_CUSTOM . '/wiaw_custom_404.php')){
	include(THESIS_CUSTOM . '/wiaw_custom_404.php');
}





function larrybio() {
    $bio = '<div class="bio" style="height: 150px;">';
    $bio .= "<img src='http://website-in-a-weekend.net/wp-content/uploads/2009/10/Larry-04-150x150.jpg' align='right'/>";
    $bio .= "<em>Larry Herrin is a consultant, author and web entrepreneur. ";
    $bio .= "One of his eCommerce websites sells ";
    $bio .= '<a href="http://newpalmpre.com/" onclick="javascript:pageTracker._trackPageview(\'/outbound/article/newpalmpre.com\');" target="_blank"> Palm Pre accessories</a>';
    $bio .= " He has owned and used three different Palm/Handspring smartphones since 2001. He is hopelessly addicted.</em>";
    $bio .= "</div>";
    return $bio;
}
add_shortcode('larrybio', 'larrybio');




function ecourse_blurb() {
    $blurb = <<<EOF
<div class="websiteweekendecourse" style="background-color:#eeeeee; 
font-style: slant; border-width: 1px; border-style: solid; 
padding: 8px 8px 8px 8px; margin: 8px 15px 8px 15px; font-size: 85%; ">

Hey! You're in the middle of the <strong>Website In A Weekend eCourse</strong>.  
Learn how to create and operate a complete WordPress-based website in a single weekend.  
Start here: <a href="http://website-in-a-weekend.net/getting-started/website-weekend-friday-evening-races/">Website 
In A Weekend: Friday Evening - Off to the Races</a>.  (If you already have a blog... 
"audit" the eCourse... you'll find plenty to do.)
</div>
    
EOF;
 return $blurb;
}
add_shortcode('ecblurb', 'ecourse_blurb');



