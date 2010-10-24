<?php

//////////////// Custom page: header, no footer, no sidebars /////
function is_page_header_nofooter_nosidebar_18() {
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
	
	echo "</div>\n";
	echo "</div>\n";
	
	thesis_ie_clear();
	thesis_javascript::output_scripts();
	thesis_hook_after_html(); #hook
	echo "</body>\n</html>";    
}
//////////////// END: Custom page: header, no footer, no sidebars /////
?>