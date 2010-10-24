<?php

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

?>
