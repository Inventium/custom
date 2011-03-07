<?php 
// http://buildinternet.com/2009/02/how-to-change-the-default-gravatar-in-wordpress/

  
function newgravatar ($avatar_defaults) {
  // Change this to Thesis directory  
    $myavatar = get_bloginfo('template_directory') . '/images/wiaw-gravatar.jpg';  
    $avatar_defaults[$myavatar] = "Build Internet";  
    return $avatar_defaults;  
}  
add_filter('avatar_defaults','newgravatar');  

?>


