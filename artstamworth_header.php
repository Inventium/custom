<?php



///////////////////////  Whitepaper stuff below
//*
function is_artstamworth() {

    if (is_page_template('artstamworth_template.php')) {
        return true;
    } else {
        return false;
    }
}
//*/


function thesis_artstamworth_title() {?>
  
  <p id="logo"><a href="<?php bloginfo('url'); ?>">Arts Tamworth</a></p>
    
<?php
}



function thesis_artstamworth_tagline() {?>
  
  <h1 id="tagline"><?php bloginfo('description'); ?></h1>

<?php
}


function thesis_artstamworth_header() {
    thesis_hook_before_title();
    thesis_artstamworth_title();
    thesis_artstamworth_tagline();
    thesis_hook_after_title();
}


//////////////////////  Whitepaper template /////////////////
/// This needs work to get updated to 1.8
function artstamworth_template() {

    remove_action('thesis_hook_header', 'thesis_default_header');
    add_action('thesis_hook_header','thesis_artstamworth_header');

  //page code here.

}

?>
