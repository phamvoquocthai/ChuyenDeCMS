
<?php
function send_email_public($id, $post)
{
    if ($post->post_status == 'public'){
    }
}
 
// Đưa hàm add_string_to_title vào hook filter the_title
add_action('save_post', 'send_email_public', 11, 2);


function mytheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Single Post Widgets', 'textdomain' ),
		'id'            => 'mytheme-single-post-widgets',
		'description'   => __( 'Widgets in this area will be shown under your single posts, before comments.', 'textdomain' ),
		'before_widget'	=> '',
		'after_widget'	=> '',
		'before_title'	=> '',
		'after_title'	=> '',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );