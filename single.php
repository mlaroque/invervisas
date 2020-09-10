<?php global $post; ?>
<?php $purified_content = apply_filters("the_content",$post->post_content); ?>
<?php $GLOBALS["purified_content"] = $purified_content; ?>
<?php get_header(); ?>
<?php get_template_part("post_templates/" . $post->post_type);?>
<?php get_footer(); ?>