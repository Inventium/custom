<?php
//////////////////////  Product Sales boxes  /////////////////////////

function ww_thesis_custom_page() {
    $offer  = '<div class="whitepaperoffer">';
    $offer .= 'Get this article beautifully formatted in PDF.';
    $offer .= '</div>';

    return $offer;
}
add_shortcode('ww_thesis_custom_page','ww_thesis_custom_page');


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



////////////////////////  Boxes shortcodes  //////////////////////

function wprecipes() {
    return 'Have you checked out <a href="http://www.wprecipes.com">WpRecipes</a> today?';
}
add_shortcode('wpr', 'wprecipes');


function preheader_bar() {
?>
<div style="background-color: #000044; color: #ffffff; height:15px;">

</div>
<?php 
}
//add_action('thesis_hook_before_header','preheader_bar');

?>
