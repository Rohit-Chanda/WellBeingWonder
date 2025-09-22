<?php
/**
 * @package Newscrunch
 */
if ( ! class_exists( 'Newscrunch_Post_Format_Meta_Box' ) ) {
    class Newscrunch_Post_Format_Meta_Box
    {
        public function __construct()
        {
            add_action( 'add_meta_boxes', array( $this, 'newscrunch_post_format_meta_fn'));
            add_action( 'save_post', array( $this, 'newscrunch_post_format_meta_save'));
        }

        //Add Meta Box
        function newscrunch_post_format_meta_fn()
        {
            add_meta_box( 'newscrunch_post_format_video', esc_html__('Video Type Post Format','newscrunch'), array($this,'newscrunch_post_format_meta_cb_fn'), 'post','normal','high' );
        }

        //Callback Meta Function
        function newscrunch_post_format_meta_cb_fn()
        {
            require_once('newscrunch-post-format-meta-box-page-settings.php');
        }

        //Save Meta Values
        function newscrunch_post_format_meta_save($post_id) 
        {
           
            if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || (defined('DOING_AJAX') && DOING_AJAX) || isset($_REQUEST['bulk_edit']))
                  return;
              
            if ( ! current_user_can( 'edit_page', $post_id ) )
            {   return ;  }

              
            if(isset( $_POST['post_ID']))
            {
                $post_ID = absint($_POST['post_ID']);
                update_post_meta($post_ID, 'newscrunch_post_video_embed', sanitize_text_field($_POST['newscrunch_post_video_embed']));
            }
        }
    }
}
new Newscrunch_Post_Format_Meta_Box();