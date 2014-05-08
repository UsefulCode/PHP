
<!-- Add between the <head> and </head> -->

<!-- This will tell facebook the root url that is being shared.  it will make the link without any # or ? -->
<meta property="og:url" content="<?php echo "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" /> 
<!-- This will tell facebook the title of the page, so it does not grab the wrong piece of text. -->
<meta property="og:title" content=" <?php echo get_the_title(); ?>" /> 
<!-- This will tell facebook the image to use when people share the page.  This tells it to use the featured image. -->
<meta property="og:image" content="<?php $ar = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); echo $ar[0]; ?>" /> 
