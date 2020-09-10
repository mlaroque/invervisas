<?php
/***AÑADIMOS LOS BOXES A LOS POST TYPES***/

add_action( 'add_meta_boxes', 'add_custom_box' );
function add_custom_box() {
	global $post;


}


/***********************************/
/****************END*************/
/***********************************/

function save_postdata( $post_id ) {
	global $post;

}
add_action( 'save_post', 'save_postdata' );

function basic_input_text_meta_save($input_name, $post_id, $is_array = false){

	global $_POST;
	if($is_array && !array_key_exists($input_name, $_POST )){
		$_POST[$input_name] = "";
	}

    if ( array_key_exists($input_name, $_POST ) ) {
    	$save_val = $_POST[$input_name];
    	if($is_array){
    		$save_val = implode(";",$save_val);
    	}
    	$meta_exists = update_post_meta( $post_id,
    	       $input_name,
    	        $save_val
    	 );		
    }		

}

function image_meta_save($input_name, $input_file_name, $post_id){

	if ( isset( $_POST[$input_file_name.'_nonce'] ) && wp_verify_nonce( $_POST[$input_file_name.'_nonce'], $input_file_name ) && $_FILES[$input_file_name]['error'] != 4 && $_FILES[$input_file_name]['size'] != 0) {
            // These files need to be included as dependencies when on the front end.
            require_once( ABSPATH . 'wp-admin/includes/image.php' );
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
            require_once( ABSPATH . 'wp-admin/includes/media.php' );
    
            $attachment_id = media_handle_upload( $input_file_name,0);
            update_post_meta( $post_id,$input_name, $attachment_id);
    
    }else if( array_key_exists($input_name, $_POST ) ) {
            update_post_meta( $post_id,$input_name, $_POST[$input_name]);
    }

}

function build_input_text($name,$title,$placeholder,$help = "",$textarea=false){
    global $post;
    $GLOBALS["name"] = $name;
    $GLOBALS["title"] = $title;
    $GLOBALS["placeholder"] = $placeholder; 
    $GLOBALS["help"] = $help;
    ob_start();
    if($textarea){
        get_template_part("functions/metas-bloques/inputs/textarea");
    }else{
        get_template_part("functions/metas-bloques/inputs/input-text"); 
    }
    return ob_get_clean();

}

function build_select($name,$title,$default_value,$options,$multi=false){
    global $post;
    $GLOBALS["name"] = $name;   
    $GLOBALS["title"] = $title;
    $GLOBALS["default_value"] = $default_value; 
    $GLOBALS["options"] = $options;
    ob_start();
    if($multi){
        get_template_part("functions/metas-bloques/inputs/select-multiple");
    }else{
        get_template_part("functions/metas-bloques/inputs/select"); 
    }
    
    return ob_get_clean();

}

function build_image($name,$title){
    global $post;
    $GLOBALS["name"] = $name;   
    $GLOBALS["title"] = $title;
    ob_start();
    get_template_part("functions/metas-bloques/inputs/image");
    return ob_get_clean();

}

function xxxx_add_edit_form_multipart_encoding() {

    echo ' enctype="multipart/form-data"';

}
add_action('post_edit_form_tag', 'xxxx_add_edit_form_multipart_encoding');