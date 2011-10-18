<?php


function is_pre_page_hooks() {
 
  global $thesis_design;

  echo apply_filters('thesis_doctype', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">') . "\n";
?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<?php
  thesis_head::build();
  echo "<body" . thesis_body_classes() . ">\n"; #filter
  thesis_hook_before_html(); 
  // These are ok here for paged layout. For full-width layout, 
  // they need to be removed because each section (header, content
  // footer runs it's own page class, I don't believe there is a 
  // page id associated with full width.
  echo "<div id=\"container\">\n";
  echo "  <div id=\"page\">\n";
   
}  



// TODO: Merge the following 3 functions.
function is_pre_content_hooks($sidebars) {
  
  thesis_hook_before_content_box(); 
  echo "\t<div id=\"content_box\"$sidebars>\n";
  thesis_hook_content_box_top();   
}

function is_content_area_hooks() {
  #thesis_18/lib/html/content_box.php Line 57
  thesis_content_column();
}

function is_post_content_hooks() {
  
  thesis_hook_content_box_bottom(); 
  echo "\t</div>\n";
  thesis_hook_after_content_box();   
}  




function is_post_page_hooks() {
  
  // Closes id=page, not for use with full width.
  echo "  </div>\n";
  echo "</div>\n";
  
  thesis_ie_clear();
  thesis_javascript::output_scripts();
  thesis_hook_after_html();
  echo "</body>\n</html>";    
  
}  



//////////////// Custom page: header, no footer, no sidebars /////
function page_header_nofooter_nosidebar_18() {

  is_pre_page_hooks();
	//thesis_wrap_header(); # full width
	thesis_header_area();
  
  is_pre_content_hooks(" class=\"no_sidebars\"");
  is_content_area_hooks();
  is_post_content_hooks();
  
  is_post_page_hooks();	
}
//////////////// END: Custom page: header, no footer, no sidebars /////



///////  THESIS 1.8 ////////////////////
function page_noheader_nofooter_nosidebar_18() {

  is_pre_page_hooks();

  is_pre_content_hooks(" class=\"no_sidebars\"");
  is_content_area_hooks();
  is_post_content_hooks();

  is_post_page_hooks();
}
//////////////// END: Custom page: no header, no footer, no sidebars /////


//////////////// Custom page: header, footer, no sidebars /////
function page_header_footer_nosidebar_18() {

  is_pre_page_hooks();
	//thesis_wrap_header(); # full width
	thesis_header_area();
  
  is_pre_content_hooks(" class=\"no_sidebars\"");
  is_content_area_hooks();
	is_post_content_hooks();
  
  //thesis_wrap_footer(); # full width
  thesis_footer_area();
  is_post_page_hooks();
}
//////////////// END: Custom page: header, footer, no sidebars /////


//////////////// Custom page: header, footer, 1 sidebar /////
function page_header_footer_sidebar_18() {

  is_pre_page_hooks();

  thesis_header_area();
  
  is_pre_content_hooks('');
  is_sidebar_1_hooks();
  is_post_content_hooks();
  
  thesis_footer_area();
    
  is_post_page_hooks();  
}
////////////////////////////////////////////////////////////


//////////////// Custom page: header, footer, 2 sidebars /////
function page_header_footer_sidebar2_18() {

  is_pre_page_hooks();

  thesis_header_area();
  
  is_pre_content_hooks('');
  is_sidebar_12_hooks();
  is_post_content_hooks();
  
  thesis_footer_area();
    
  is_post_page_hooks();  
}
//////////////////////////////////////////////////////////////



function is_sidebar_1_hooks() {
  
  # content_box.php Line 48
  echo "\t\t<div id=\"column_wrap\">\n";
  thesis_content_column();
  
  # sidebars.php Line 4
  echo "\t\t<div id=\"sidebars\">\n";
  thesis_hook_before_sidebars(); #hook
  sidebar_layout('thesis_sidebar_1', 1);
  thesis_hook_after_sidebars(); #hook
  echo "\t\t</div>\n";  

  # content_box.php Line 51
  echo "\t\t</div>\n";
}


function is_sidebar_12_hooks() {
  
  # content_box.php Line 48
  echo "\t\t<div id=\"column_wrap\">\n";
  thesis_content_column();
  
  # sidebars.php Line 4
  echo "\t\t<div id=\"sidebars\">\n";
  thesis_hook_before_sidebars(); #hook
  sidebar_layout('thesis_sidebar_1',1);
  sidebar_layout('thesis_sidebar_2',2);
  thesis_hook_after_sidebars(); #hook
  echo "\t\t</div>\n";  

  # content_box.php Line 51
  echo "\t\t</div>\n";
}


function sidebar_layout($callback, $id) {

  #sidebars.php Line 28
  echo "\t\t\t<div id=\"sidebar_$id\" class=\"sidebar\">\n";
  echo "\t\t\t\t<ul class=\"sidebar_list\">\n";
  call_user_func($callback);
  echo "\t\t\t\t</ul>\n";
  echo "\t\t\t</div>\n";   
}



?>
