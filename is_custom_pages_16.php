<?php
function plugin_template() {
    get_header(apply_filters('thesis_get_header', $name));
    echo '<div id="container">' . "\n";
    echo '<div id="page">' . "\n";
    thesis_header_area();
    //thesis_content();
    echo '	<div id="content_box" class="no_sidebars">' . "\n";
    //echo '	<div id="content_box">' . "\n";
    thesis_content_column();
    //echo '	</div>' . "\n";
    echo '	</div>' . "\n";
    //thesis_get_sidebar(3);
    /*
     echo '			<div id="sidebar_3 class="sidebar">' . "\n";
     echo '				<ul class="sidebar_list">' . "\n";
     dynamic_sidebar(3);
     echo '				</ul>' . "\n";
     echo '			</div>' . "\n";
     */
    thesis_footer_area();
    echo '</div>' . "\n";
    echo '</div>' . "\n";
    get_footer(apply_filters('thesis_get_footer', $name));
}



///////  THESIS 1.6 ////////////////////
//////////////// Custom page: no header, no footer, no sidebars /////
function page_noheader_nofooter_nosidebar_16() {
    get_header(apply_filters('thesis_get_header', $name));
    echo '<div id="container">' . "\n";
    echo '<div id="page">' . "\n";
    echo '	<div id="content_box" class="no_sidebars">' . "\n";
    thesis_content_column();
    echo '	</div>' . "\n";
    echo '</div>' . "\n";
    echo '</div>' . "\n";
    get_footer(apply_filters('thesis_get_footer', $name));
}
//////////////// END: Custom page: no header, no footer, no sidebars /////


//////////////// Custom page: header, no footer, no sidebars /////
function page_header_nofooter_nosidebar_16() {
    get_header(apply_filters('thesis_get_header', $name));
    echo '<div id="container">' . "\n";
    echo '<div id="page">' . "\n";
    thesis_header_area();
    echo '	<div id="content_box" class="no_sidebars">' . "\n";
    thesis_content_column();
    echo '	</div>' . "\n";
    echo '</div>' . "\n";
    echo '</div>' . "\n";
    get_footer(apply_filters('thesis_get_footer', $name));
}
//////////////// END: Custom page: header, no footer, no sidebars /////


//////////////// Custom page: header, footer, no sidebars /////
function page_header_footer_nosidebar_16() {
    get_header(apply_filters('thesis_get_header', $name));
    echo '<div id="container">' . "\n";
    echo '<div id="page">' . "\n";
    thesis_header_area();
    echo '	<div id="content_box" class="no_sidebars">' . "\n";
    thesis_content_column();
    echo '	</div>' . "\n";
    thesis_footer_area();
    echo '</div>' . "\n";
    echo '</div>' . "\n";
    get_footer(apply_filters('thesis_get_footer', $name));
}
//////////////// END: Custom page: header, footer, no sidebars /////


//////////////// Custom page: header, footer, custom sidebars /////
function page_header_footer_sidebar_16() {
    get_header(apply_filters('thesis_get_header', $name));
    echo '<div id="container">'."\n";
    echo '<div id="page">'."\n";
    thesis_header_area();
    echo '	<div id="content_box">'."\n";
    thesis_content_column();

    echo '		<div id="sidebars">' . "\n";
    echo '			<div id="sidebar_3" class="sidebar">'."\n";
    echo '				<ul class="sidebar_list">'."\n";
    dynamic_sidebar('Custom Sidebar 1');
    echo '				</ul>'."\n";
    echo '			</div>'."\n";
    echo '		</div>' . "\n";

    echo '	</div><!--content_box-->'."\n";
    thesis_footer_area();
    echo '</div><!--page-->'."\n";
    echo '</div><!--container-->'."\n";
    get_footer(apply_filters('thesis_get_footer', $name));
}

function page_hrecipe_16() {
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


//////////////// END: Custom page: header, footer, custom sidebars /////

?>
