<?php	

//Сохранение настроек
function save_setting() { 
	global $select_options; 
	if ( ! isset( $_REQUEST['settings-updated'] ) ) 
		$_REQUEST['settings-updated'] = false;
	?>
	<div class="wrap">
<h2>Информация о сайте</h2>

<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div id="message" class="updated">
<p><strong>Настройки сохранены</strong></p>
</div>
<?php endif; ?>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table class="form-table">

<tr valign="top">
<th scope="row">Телефон глановного секретаря</th>
<td><input type="text" name="phone" value="<?php echo get_option('phone'); ?>" /></td>
</tr>
 
<tr valign="top">
<th scope="row">Адрес электороной почты</th>
<td><input type="text" name="Email" value="<?php echo get_option('Email'); ?>" /></td>
</tr>

<tr valign="top">
<th scope="row">Адрес</th>
<td><input type="text" name="address" value="<?php echo get_option('address'); ?>" /></td>
</tr>

</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="phone,Email,address" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>
<?php
}