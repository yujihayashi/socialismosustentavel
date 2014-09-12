<?php

// Prevent loading this file directly
if ( !defined('SENDPRESS_VERSION') ) {
	header('HTTP/1.0 403 Forbidden');
	die;
}

class SendPress_View_Emails_Edit extends SendPress_View_Emails {
	
	function save(){
	   print_r($_POST['content-1']);

	}

	function admin_init(){
		remove_filter('the_editor',					'qtrans_modifyRichEditor');
	}

	function html($sp) {
		global $post_ID, $post;

		$view = isset($_GET['view']) ? $_GET['view'] : '' ;

		if(isset($_GET['emailID'])){
			$emailID = $_GET['emailID'];
			$post = get_post( $_GET['emailID'] );
			$post_ID = $post->ID;
		}
	
        if($post->post_type !== 'sp_newsletters'){
            SendPress_Admin::redirect('Emails');
        }
        $template_id = get_post_meta( $post->ID , '_sendpress_template' , true);

		?>
        <form method="POST" name="post" id="post">
        <input type="hidden" name="post_ID" id="post_ID" value="<?php echo $post->ID; ?>" />
        <input type="submit" value="save" />
        <h2>Edit Email Content</h2>
        <br>
        <?php $this->panel_start('<span class="glyphicon glyphicon-envelope"></span> '.  __('Subject','sendpress') ); ?>
        <input type="text" name="post_subject" size="30" tabindex="1" class="form-control" value="<?php echo esc_attr( htmlspecialchars( get_post_meta($post->ID,'_sendpress_subject',true ) )); ?>" id="email-subject" autocomplete="off" />
        <?php $this->panel_end(  ); ?>
        <div class="sp-row">
<div class="sp-75 sp-first">
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
  <li><a href="#profile" data-toggle="tab">Profile</a></li>
  <li><a href="#messages" data-toggle="tab">Messages</a></li>
  <li><a href="#settings" data-toggle="tab">Settings</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane fade in active" id="home"><?php the_editor($post->post_content,'content-1'); ?></div>
  <div class="tab-pane fade" id="profile"><?php the_editor($post->post_content,'content-2'); ?></div>
  <div class="tab-pane fade" id="messages"><?php the_editor($post->post_content,'content-3'); ?></div>
  <div class="tab-pane fade" id="settings"><?php the_editor($post->post_content,'content-4'); ?></div>
</div>

</div>
<div class="sp-25">
<br><br>
	<?php $this->panel_start( __('Template','sendpress') ); ?>
	<select>
	<?php
			$args = array(
			'post_type' => 'sp_template' ,
			'post_status' => array('sp-standard'),
			);

			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$temp_id = $the_query->post->ID;
				$s = '';
				if($temp_id == $template_id){
					$s = 'selected';
				}
				echo '<option '.$s.'>' . get_the_title() . '</option>';
			}
			
		}
	?>
	
	</select>
	<?php $this->panel_end(  ); ?>
</div>
</div>



        </form>
	<?php
	}

}