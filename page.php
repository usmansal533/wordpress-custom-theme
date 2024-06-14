<?php
get_header();
the_post();
the_title();
the_post_thumbnail(array(500,500));
?>
<?php
the_content();
 ?>
<?php $imagepath=
wp_get_attachment_image_src(
    get_post_thumbnail_id(),'large'
);
print_r($imagepath);
get_footer();
 ?>