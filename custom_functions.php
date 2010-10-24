<?php

// Using hooks is absolutely the smartest, most bulletproof way to implement things like plugins,
// custom design elements, and ads. You can add your hook calls below, and they should take the
// following form:
// add_action('thesis_hook_name', 'function_name');
// The function you name above will run at the location of the specified hook. The example
// hook below demonstrates how you can insert Thesis' default recent posts widget above
// the content in Sidebar 1:
// add_action('thesis_hook_before_sidebar_1', 'thesis_widget_recent_posts');

// move nv bar below header
remove_action('thesis_hook_before_header', 'thesis_nav_menu');
add_action('thesis_hook_after_header','thesis_nav_menu');

/**
 * function custom_bookmark_links() - outputs an HTML list of bookmarking links
 * NOTE: This only works when called from inside the WordPress loop!
 * SECOND NOTE: This is really just a sample function to show you how to use custom functions!
 *
 * @since 1.0
 * @global object $post
 */

function custom_bookmark_links() {
    global $post;
    ?>
<ul class="bookmark_links">
	<li><a rel="nofollow"
		href="http://delicious.com/save?url=<?php urlencode(the_permalink()); ?>&amp;title=<?php urlencode(the_title()); ?>"
		onclick="window.open('http://delicious.com/save?v=5&amp;noui&amp;jump=close&amp;url=<?php urlencode(the_permalink()); ?>&amp;title=<?php urlencode(the_title()); ?>', 'delicious', 'toolbar=no,width=550,height=550'); return false;"
		title="Bookmark this post on del.icio.us">Bookmark this article on
	Delicious</a></li>
</ul>
    <?php
}


//delete_option('thesis_design_options');
//delete_option('thesis_options');




//*
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Custom Sidebar 1',
			 'before_widget' => '<li class="widget %2$s" id="%1$s">',
			 'after_widget' => '</li>',
			 'before_title' => '<h3>',
			 'after_title' => '</h3>',
));



if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Whitepaper Left Sidebar',
			 'before_widget' => '<li class="widget %2$s" id="%1$s">',
			 'after_widget' => '</li>',
			 'before_title' => '<h3>',
			 'after_title' => '</h3>',
));


if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Whitepaper Right Sidebar',
			 'before_widget' => '<li class="widget %2$s" id="%1$s">',
			 'after_widget' => '</li>',
			 'before_title' => '<h3>',
			 'after_title' => '</h3>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'hRecipe Sidebar',
			 'before_widget' => '<li class="widget %2$s" id="%1$s">',
			 'after_widget' => '</li>',
			 'before_title' => '<h3>',
			 'after_title' => '</h3>',
));



//*/

//*
remove_action('thesis_hook_404_title', 'thesis_404_title');
add_action('thesis_hook_404_title', 'custom_thesis_404_title');
//*/

function custom_thesis_404_content() {
    ?>
<p>Can't find what you want?</p>

    <?php if (smart404_loop()) : ?>
<p>Try one of these posts instead:</p>
    <?php while (have_posts()) : the_post(); ?>
<h4><a href="<?php the_permalink() ?>" rel="bookmark"
	title="<?php the_title_attribute(); ?>"> <?php the_title(); ?></a></h4>
<small><?php the_excerpt(); ?></small>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php
}

remove_action('thesis_hook_404_content', 'thesis_404_content');
add_action('thesis_hook_404_content', 'custom_thesis_404_content');





/* Now we tell Thesis to use the home page custom template */
//remove_action('thesis_hook_custom_template', 'thesis_custom_template_sample');
//add_action('thesis_hook_custom_template', 'home_pagecustom');



//////////////////////  Product Sales boxes  /////////////////////////

function ww_thesis_custom_page() {
    $offer  = '<div class="whitepaperoffer">';
    $offer .= 'Get this article beautifully formatted in PDF.';
    $offer .= '</div>';

    return $offer;
}
add_shortcode('ww_thesis_custom_page','ww_thesis_custom_page');

// Include the user's custom_functions file, but only if it exists
/*
 if (file_exists(THESIS_CUSTOM . '/custom_pluginpage.php'))
 include(THESIS_CUSTOM . '/custom_pluginpage.php');
 */

//include(THESIS_CUSTOM . 'custom_pluginpage.php');

//////////////////////  Service Sales boxes  /////////////////////////

//*
function custompagesale() {
    $bio = '<div class="sale" style="height: 100px;">';
    $bio .= '<em>';
    $bio .= 'Get your custom Thesis template page now.' .
     'First 5 people get this offer at $27.';
    $bio .= '</em>';
    // Learn more...
    // Do it yourself! // Direct link to e-junkie.
    $bio .= "</div>";
    return $bio;
}
add_shortcode('custompagesale','custompagesale');
//*/


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


//////////////////////  Custom Sidebar widgets  ///////////////////////



//////////////////////  Whitepaper template /////////////////
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


//From Flavius, check comments on article.
//remove_action('thesis_hook_custom_template', 'thesis_custom_template_sample');
// add our template so we can choose it from your page’s template menu
//add_action('thesis_hook_custom_template','whitepaper_template');
//add_action('thesis_hook_custom_template','page_hrecipe');

////////////////////////  Boxes shortcodes  //////////////////////


function wprecipes() {
    return 'Have you checked out <a href="http://www.wprecipes.com">WpRecipes</a> today?';
}
add_shortcode('wpr', 'wprecipes');


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



/*
 function improved_trim_excerpt($text) {
 global $post;
 if ( '' == $text ) {
 $text = get_the_content('');
 $text = apply_filters('the_content', $text);
 $text = str_replace(']]>', ']]&gt;', $text);
 $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
 $text = strip_tags($text, '<p>');
 $excerpt_length = 80;
 $words = explode(' ', $text, $excerpt_length + 1);
 if (count($words)> $excerpt_length) {
 array_pop($words);
 array_push($words, '[...]');
 $text = implode(' ', $words);
 }
 }
 return $text;
 }
 */
//remove_filter('get_the_excerpt', 'wp_trim_excerpt');
//add_filter('get_the_excerpt', 'improved_trim_excerpt');


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







function bpe_feature() {
?>
<div class="featuredpost">
<h2>Featured Post</h2>

<a href="http://website-in-a-weekend.net/building-traffic/publish-blog-post/#comments/">
<?php echo get_comments_number(16545);?> comments, add yours!
</a>
</div>

<div class="featuredheadline">
<h2><a href="http://website-in-a-weekend.net/building-traffic/publish-blog-post/">
How to publish the **** out of your blog post</a></h2>

<p>You know, writing a blog post is about half the work... 
or did you know that?</p>

<p>Getting it <em>published</em> is a whole 'nother ball game.</p>

<p>Fortunately, you now have a resource that lays it all out, 
step-by-step guidelines for helping you get your blog post 
out there in front of everyone... including Google.</p>

<p><a href="http://website-in-a-weekend.net/building-traffic/publish-blog-post/">Read How to publish the **** out of your blog post...</a></p>
</div>
<?php     
}
add_action('thesis_hook_feature_box','bpe_feature');


function preheader_bar() {
?>
<div style="background-color: #000044; color: #ffffff; height:15px;">

</div>
<?php 
}
//add_action('thesis_hook_before_header','preheader_bar');


if (file_exists(THESIS_CUSTOM . '/wiaw_fat_footer.php')){
	include(THESIS_CUSTOM . '/wiaw_fat_footer.php');
}


if (file_exists(THESIS_CUSTOM . '/is_custom_pages.php')){
	include(THESIS_CUSTOM . '/is_custom_pages.php');
}
