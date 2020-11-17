<?php global $post, $id, $btn_color, $texto; ?>
<div class="row">
	<div class="col-12 btn-customD text-center">
		<a href="<?php echo get_permalink(66) . '?id=' . $id . '&pi=' . $post->post_title . '&min=y';?>" class="btn btn-<?php echo $btn_color;?>"><?php echo $texto;?></a>
	</div>
</div>
