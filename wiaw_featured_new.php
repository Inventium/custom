<?php
/*-----------------------------------------*/
/* Featured Content and Are you new? box   */
/*-----------------------------------------*/

function my_before_content_box () {

?>
<table width="970" height="161" border="0" cellpadding="0" cellspacing="0" style="margin: 0px 0px 0px 0px;font-size: 14px; background:url('wp-content/themes/thesis_18/custom/images/wiaw-featured-new-box.png')">

  <tr>

    <td width="492px" valign="top" style="padding: 5px 0px 0px 10px;"><h2 style="font-size: 22px; color:#fff; text-shadow: #333 1px 1px 2px;">Featured Posts</h2>

	<?php if ( function_exists( 'get_smooth_slider_cat' ) ) {

		 get_smooth_slider(); } ?>	
		 </td>

    <td width="403px" valign="top" style="padding: 5px 10px 0px 10px; 
    background:url('wp-content/themes/thesis_18/custom/images/wiaw-banner-you-are-new.gif')">
	</td>
  </tr>
</table>
<?php
}
remove_action('thesis_hook_before_content_box','before_content_box');
add_action('thesis_hook_before_content_box','my_before_content_box');

?>