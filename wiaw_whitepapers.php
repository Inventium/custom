<?php



///////////////////////  Whitepaper stuff below
//*
function is_whitepaper() {

    if (is_page_template('whitepaper_template.php')) {
        return true;
    } else {
        return false;
    }
}
//*/


function thesis_whitepaper_title() {

    ?>
<p id="logo"><a href="<?php bloginfo('url'); ?>">WordPress Whitepapers</a></p>
    <?php

}



function thesis_whitepaper_tagline() {

    ?>
<h1 id="tagline"><?php bloginfo('description'); ?></h1>
    <?php
}


function thesis_whitepaper_header() {
    thesis_hook_before_title();
    thesis_whitepaper_title();
    thesis_whitepaper_tagline();
    thesis_hook_after_title();
}


//////////////////////  Whitepaper template /////////////////
/// This needs work to get updated to 1.8
function whitepaper_template() {

    remove_action('thesis_hook_header', 'thesis_default_header');
    add_action('thesis_hook_header','thesis_whitepaper_header');


    get_header(apply_filters('thesis_get_header', $name));

    echo '<div id="container">' . "\n";
    echo '<div id="page">' . "\n";

    thesis_header_area();

    echo '	<div id="content_box">' . "\n";
    thesis_content_column();

    echo '		<div id="sidebars">' . "\n";
    echo '			<div id="sidebar_5 class="sidebar">' . "\n";
    echo '				<ul class="sidebar_list">' . "\n";
    dynamic_sidebar(5);
    echo '				</ul>' . "\n";
    echo '			</div>' . "\n"; // sidebar_5
    echo '		</div>' . "\n"; // //sidebars

    echo '	</div>' . "\n"; // content_box

    thesis_footer_area();

    echo '</div>' . "\n"; //page
    echo '</div>' . "\n"; //container
    get_footer(apply_filters('thesis_get_footer', $name));

}

?>
