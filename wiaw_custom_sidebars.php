<?php

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


?>
