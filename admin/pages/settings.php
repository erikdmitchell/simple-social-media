<?php global $emsm_admin; ?>
<pre>
<?php print_r($_POST); ?>
</pre>
<div class="wrap">
	
	<h1>EM Social Media Settings</h1>

	<form method="post" action="">
		<?php wp_nonce_field('update_settings', 'em_social_meida_admin'); ?>
	
		<table class="form-table">
			<tbody>
				
				<?php foreach ($emsm_admin->social_media as $slug => $sm) : ?>

					<tr>
						<th scope="row"><?php echo $sm['name']; ?></th>
						<td>

							<input name="social_media_options[<?php echo $slug; ?>][url]" id="<?php echo $slug; ?>-url" class="regular-text code" type="url" value="<?php echo $sm['url']; ?>" />
							<span class="<?php echo $slug; ?>-icon icon-img"><span class="icon-txt">Icon: </span><span class="icon-img-fa"><i class="fa <?php echo $sm['icon']; ?>"></i></span></span>
							
							<a class="emsm-select-icon" data-input-id="<?php echo $slug; ?>">Select Icon</a>
	
							<input type="hidden" name="social_media_options[<?php echo $slug; ?>][icon]" id="<?php echo $slug; ?>-icon" value="<?php echo $sm['icon']; ?>" />
							<input type="hidden" name="social_media_options[<?php echo $slug; ?>][name]" id="<?php echo $slug; ?>-name" value="<?php echo $sm['name']; ?>" />

						</td>
					</tr>
				
				<?php endforeach; ?>
				
			</tbody>
		</table>
	
		<input type="button" name="add-field" id="add-field" class="button button-primary add-field" value="Add Field">
	
		<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
	</form>

	<div id="emsm-icons-overlay">
		<ul class="fa-icons-list">
			<?php foreach ($emsm_admin->icons as $icon) : ?>
					<li id="<?php echo $icon['class']; ?>"><a href="#" data-icon="<?php echo $icon['class']; ?>"><i class="fa <?php echo $icon['class']; ?>"></i><?php echo $icon['name']; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	
</div>