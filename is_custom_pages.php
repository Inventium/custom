<?php


function is_pre_page_hooks() {
 
  global $thesis_design;

  echo apply_filters('thesis_doctype', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">') . "\n";
?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<?php
  thesis_head::build();
  echo "<body" . thesis_body_classes() . ">\n"; #filter
  thesis_hook_before_html(); #hook
  echo "<div id=\"container\">\n";
  echo "<div id=\"page\">\n";
   
}  


function is_pre_content_hooks() {
  
  thesis_hook_before_content_box(); #hook
  echo "\t<div id=\"content_box\" class=\"no_sidebars\">\n";
  thesis_hook_content_box_top(); #hook  
}


function is_post_content_hooks() {
  
  thesis_hook_content_box_bottom(); #hook
  echo "\t</div>\n";
  thesis_hook_after_content_box(); #hook  
}  



function is_post_page_hooks() {
  
  echo "</div>\n";
  echo "</div>\n";
  
  thesis_ie_clear();
  thesis_javascript::output_scripts();
  thesis_hook_after_html(); #hook
  echo "</body>\n</html>";    
  
}  



//////////////// Custom page: header, no footer, no sidebars /////

function page_header_nofooter_nosidebar_18() {

  is_pre_page_hooks();

	thesis_wrap_header();
	
  is_pre_content_hooks();
  
	#thesis_18/lib/html/frameworks.php Line 56
	thesis_hook_before_content_area(); #hook
	//echo "<div id=\"content_area\" class=\"full_width\">\n";
  echo "<div id=\"content_area\"\n";
	echo "<div class=\"page\">\n";
	#thesis_18/lib/html/content_box.php Line 57
	thesis_content_column();
	echo "</div>\n";
	echo "</div>\n";
	#thesis_18/lib/html/frameworks.php Line 66
	thesis_hook_after_content_area(); #hook
	
  is_post_content_hooks();

  is_post_page_hooks();	
}

//////////////// END: Custom page: header, no footer, no sidebars /////


///////  THESIS 1.8 ////////////////////
function page_noheader_nofooter_nosidebar_18() {

  is_pre_page_hooks();

  is_pre_content_hooks();


	#thesis_18/lib/html/frameworks.php Line 56
	thesis_hook_before_content_area(); #hook
	//echo "<div id=\"content_area\" class=\"full_width\">\n";
  echo "<div id=\"content_area\" \n";
	echo "<div class=\"page\">\n";
	#thesis_18/lib/html/content_box.php Line 57
	thesis_content_column();
	echo "</div>\n";
	echo "</div>\n";
	#thesis_18/lib/html/frameworks.php Line 66
	thesis_hook_after_content_area(); #hook

  is_post_content_hooks();
  	
	
  is_post_page_hooks();

}
//////////////// END: Custom page: no header, no footer, no sidebars /////


//////////////// Custom page: header, footer, no sidebars /////

function page_header_footer_nosidebar_18() {

  is_pre_page_hooks();

	thesis_wrap_header();
	
	thesis_hook_before_content_box(); #hook
	echo "\t<div id=\"content_box\" class=\"no_sidebars\">\n";
	thesis_hook_content_box_top(); #hook



	#thesis_18/lib/html/frameworks.php Line 56
	thesis_hook_before_content_area(); #hook
	echo "<div id=\"content_area\" class=\"full_width\">\n";
	echo "<div class=\"page\">\n";
	#thesis_18/lib/html/content_box.php Line 57
	thesis_content_column();
	echo "</div>\n";
	echo "</div>\n";
	#thesis_18/lib/html/frameworks.php Line 66
	thesis_hook_after_content_area(); #hook


	
	thesis_hook_content_box_bottom(); #hook
	echo "\t</div>\n";
	thesis_hook_after_content_box(); #hook


  thesis_wrap_footer();
	
  is_post_page_hooks();
  
}

//////////////// END: Custom page: header, footer, no sidebars /////




//////////////// Custom page: header, footer, custom sidebars /////
function page_header_footer_sidebar_18() {

  is_pre_page_hooks();

	thesis_wrap_header();
	
  // content column here
  //sidebars here
  
	thesis_wrap_footer();
		
  is_post_page_hooks();
  
}




/// Helper functions
function is_thesis_two_columns() {
    
}

function is_thesis_three_columns() {
    
}









//////////////////////////////  Remove from this file.


function page_hrecipe_18() {
    get_header(apply_filters('thesis_get_header', $name));
    echo '<div id="container">'."\n";
    echo '<div id="page">'."\n";
    thesis_header_area();
    echo '	<div id="content_box">'."\n";
    thesis_content_column();

    echo '		<div id="sidebars">' . "\n";
    echo '			<div id="sidebar_3" class="sidebar">'."\n";
    echo '				<ul class="sidebar_list">'."\n";
    dynamic_sidebar('hRecipe Sidebar');
    echo '				</ul>'."\n";
    echo '			</div>'."\n";
    echo '		</div>' . "\n";

    echo '	</div><!--content_box-->'."\n";
    thesis_footer_area();
    echo '</div><!--page-->'."\n";
    echo '</div><!--container-->'."\n";
    get_footer(apply_filters('thesis_get_footer', $name));
}


?>
