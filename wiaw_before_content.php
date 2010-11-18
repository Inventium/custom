<?php
/*-----------------------------------------*/
/* Featured Content and Are you new? box   */
/*-----------------------------------------*/

function my_before_content() {

?>
	<div style="font-size:12px;padding:10px 0px 0px 0px">
	<?php if(function_exists('bcn_display')) { bcn_display(); } ?>
	</div>
<?php
}

remove_action('thesis_hook_before_content','before_content');
add_action('thesis_hook_before_content','my_before_content');

?>