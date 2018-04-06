<?php


// Settings page for Flow Promotion Request Plugin
 
add_action('admin_menu', function() {
    add_options_page( 'Flow Promotion Request Settings', 'Flow Promotion Request', 'manage_options', 'flow-promotion-request', 'flow_promotion_request_settings' );
});
 
 
add_action( 'admin_init', function() {
    register_setting( 'flow-promotion-request-settings', 'from' );
	register_setting( 'flow-promotion-request-settings', 'fromTit' );
    register_setting( 'flow-promotion-request-settings', 'subject' );
    register_setting( 'flow-promotion-request-settings', 'body' );
    register_setting( 'flow-promotion-request-settings', 'to' );
});
 
 
function flow_promotion_request_settings() {
  ?>
<h1>Flow Promotion Request Plugin Settings</h1>
	<h2>Mail Settings:</h2>
    <div class="wrap">
      <form action="options.php" method="post">
 
        <?php
          settings_fields( 'flow-promotion-request-settings' );
          do_settings_sections( 'flow-promotion-request-settings' );
        ?>
        <table>
             <tr>
                <th>From email</th>
                <td>
                    <label>
                        <input type="text" name="from" value="<?php echo esc_attr( get_option('from') );?>" />
                    </label>
                </td>
            </tr>
			 <tr>
                <th>From Title</th>
                <td>
                    <label>
                        <input type="text" name="fromTit" value="<?php echo esc_attr( get_option('fromTit') );?>" />
                    </label>
                </td>
            </tr>
			<tr>
                <th>Subject</th>
                <td>
                    <label>
                        <input type="text" name="subject" value="<?php echo esc_attr( get_option('subject') );?>"/>
                    </label>
                </td>
            </tr>
			<tr>
                <th>Body</th>
                <td>
                    <label>
                        <textarea name="body" style="resize:both;" value=""><?php echo esc_attr( get_option('body') );?></textarea>
                    </label>
                </td>
            </tr>
			<tr>
                <th>To (one email address per line)</th>
                <td>
                    <label>
                        <textarea style="resize:both;" name="to" value=""><?php echo esc_attr( get_option('to') );?></textarea>
                    </label>
                </td>
            </tr>
			<tr>
                <td><?php submit_button(); ?></td>
            </tr>
        </table>
 
      </form>
    </div>
  <?php
}