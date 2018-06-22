# Faculty Theme 2018

This is a Wordpress child theme of Newslite https://evisionthemes.com/product/newslite
Theme customized for the library news home page https://news.library.depaul.press/faculty/

## Wordpress Plugins used

1. amr shortcode any widget
2. Weblizar Twitter Widget
3. Jetpack by WordPress.com

## Child theme set up

1. A child theme was created
2. The following files were copied from the parent theme
	- functions.php
	- header.php
	- inc/hooks/footer.php
	- inc/hooks/header.php
3. Necessary images were added to the Media folder (logo, footer icons, etc.)
4. Add these lines to functions.php to overwrite files in hooks of parent theme. Add custom code as needed.
	require get_stylesheet_directory() . '/inc/hooks/header.php';
	require get_stylesheet_directory() . '/inc/hooks/footer.php';
5. Line 10 to 42 in /inc/template-tags.php file was copied to functions.php
6. To force "Display name publicly as" of the author, change 'nickname' to "display_name" in functions.php

## Adding DPU Library Twitter account to sidebar

1. Go to Appearance > Widgets
2. Drag 'Weblizar Twitter Widget' to Sidebar
3. Add the Twitter account username, then Save

## Setting up the SUBSCRIBE TO BLOG VIA EMAIL section

1. Go to Appearance > Widgets
2. Drag 'Blog Subscriptions (Jetpack)' to Footer Column One
3. Customized as needed, then Save

## Adding the top header menus

1. Go to Dashboard > Customize > Menus
2. Under Menus, go to Top Menu and click Add Items 
3. Under the Pages accordion menu, click "+ Home" to add Home link into the site menu
4. Click Custom Links to add the Faculty link to the site menu. Add the URL and Link Text (Navigation Label)
5. Under Menu Locations, "Primary (Current: Top Menu)" should be checked
6. Click "Publish" to update the live site

## Posting Featured Image
Add a featured image using the Featured Image block found at the lower right corner when the post is in Edit Mode. When posting Featured Image in a post, "No Image" should be selected under Layout Options > Featured Image Alignment. This will avoid posting the same image twice in the same post.