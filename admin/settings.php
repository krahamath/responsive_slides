<link href="<?php echo osc_base_url().'oc-content/plugins/responsive_slides/admin/admin.css'; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo osc_base_url(). 'oc-content/plugins/responsive_slides/admin/jscolor/jscolor.js'; ?>"></script>
<?Php
if(Params::getParam('backgroundcolor') != '') {
	$backgroundcolor = Params::getParam('backgroundcolor');
} else {
	$backgroundcolor = (getSliderBackgroundColor() != '') ? getSliderBackgroundColor() : '' ;
}if(Params::getParam('bordercolor') != '') {
	$bordercolor = Params::getParam('bordercolor');
} else {
	$bordercolor = (getSliderBorderColor() != '') ? getSliderBorderColor() : '' ;
}if(Params::getParam('borderwidth') != '') {
	$borderwidth = Params::getParam('borderwidth');
} else {
	$borderwidth = (getSliderBorderWidth() != '') ? getSliderBorderWidth() : '' ;
}if(Params::getParam('shadowcolor') != '') {
	$shadowcolor = Params::getParam('shadowcolor');
} else {
	$shadowcolor = (getSliderShadowColor() != '') ? getSliderShadowColor() : '' ;
}if(Params::getParam('width') != '') {
	$width = Params::getParam('width');
} else {
	$width = (getSliderWidth() != '') ? getSliderWidth() : '' ;
}if(Params::getParam('height') != '') {
	$height = Params::getParam('height');
} else {
	$height = (getSliderHeight() != '') ? getSliderHeight() : '' ;
}if(Params::getParam('caption') != '') {
	$caption = Params::getParam('caption');
} else {
	$caption = (getSliderCaption() != '') ? getSliderCaption() : '' ;
}if(Params::getParam('link') != '') {
	$link = Params::getParam('link');
} else {
	$link = (getSliderLink() != '') ? getSliderLink() : '' ;
}if(Params::getParam('openin') != '') {
	$openin = Params::getParam('openin');
} else {
	$openin = (getSliderOpenIn() != '') ? getSliderOpenIn() : '' ;
}if(Params::getParam('auto') != '') {
	$auto = Params::getParam('auto');
} else {
	$auto = (getSliderAuto() != '') ? getSliderAuto() : '' ;
}if(Params::getParam('pager') != '') {
	$pager = Params::getParam('pager');
} else {
	$pager = (getSliderPager() != '') ? getSliderPager() : '' ;
}if(Params::getParam('navigation') != '') {
	$navigation = Params::getParam('navigation');
} else {
	$navigation = (getSliderNavigation() != '') ? getSliderNavigation() : '' ;
}if(Params::getParam('speed') != '') {
	$speed = Params::getParam('speed');
} else {
	$speed = (getSliderSpeed() != '') ? getSliderSpeed() : '' ;
}if( Params::getParam('option') == 'stepone' ) {
	$dao_preference = new Preference();
	$dao_preference->update(array("s_value" => $backgroundcolor), array("s_section" =>"rslides", "s_name" => "backgroundcolor")) ;
	$dao_preference->update(array("s_value" => $bordercolor), array("s_section" =>"rslides", "s_name" => "bordercolor")) ;
	$dao_preference->update(array("s_value" => $borderwidth ), array("s_section" =>"rslides", "s_name" => "borderwidth")) ;
	$dao_preference->update(array("s_value" => $shadowcolor ), array("s_section" =>"rslides", "s_name" => "shadowcolor")) ;
	$dao_preference->update(array("s_value" => $width), array("s_section" =>"rslides", "s_name" => "width")) ;
	$dao_preference->update(array("s_value" => $height), array("s_section" =>"rslides", "s_name" => "height")) ;
	$dao_preference->update(array("s_value" => $caption ), array("s_section" =>"rslides", "s_name" => "caption")) ;
	$dao_preference->update(array("s_value" => $link ), array("s_section" =>"rslides", "s_name" => "link")) ;
	$dao_preference->update(array("s_value" => $openin ), array("s_section" =>"rslides", "s_name" => "openin")) ;
	$dao_preference->update(array("s_value" => $auto ), array("s_section" =>"rslides", "s_name" => "auto")) ;
	$dao_preference->update(array("s_value" => $pager), array("s_section" =>"rslides", "s_name" => "pager")) ;
	$dao_preference->update(array("s_value" => $navigation ), array("s_section" =>"rslides", "s_name" => "navigation")) ;
	$dao_preference->update(array("s_value" => $speed ), array("s_section" =>"rslides", "s_name" => "speed")) ;
	?>
	<div class="slidersuccess">
		<?php _e('Settings Saved', 'rslides'); ?>
	</div>
	<?php
}unset($dao_preference) ;
?>

<div class="rslides_menu">
	<ul>
		<li><a href="<?php echo osc_admin_render_plugin_url("responsive_slides/admin/create.php"); ?>"><?php _e('Create', 'rslides'); ?></a></li>
		<li><a href="<?php echo osc_admin_render_plugin_url("responsive_slides/admin/list.php"); ?>"><?php _e('Manage', 'rslides'); ?></a></li>
		<li class="active"><a href="<?php echo osc_admin_render_plugin_url("responsive_slides/admin/settings.php"); ?>"><?php _e('Settings', 'rslides'); ?></a></li>
		<li><a href="<?php echo osc_admin_render_plugin_url("responsive_slides/admin/help.php"); ?>"><?php _e('Help', 'rslides'); ?></a></li>
	</ul>
</div>

<div class="rslides_content">
	<h2 class="render-title"><?php _e('Settings','rslides'); ?></h2>
	<form method="post" action="<?php osc_admin_base_url(true); ?>">
	<input type="hidden" name="page" value="plugins" />
	<input type="hidden" name="action" value="renderplugin" />
	<input type="hidden" name="file" value="responsive_slides/admin/settings.php" />
	<input type="hidden" name="option" value="stepone" />
	<div class="form-horizontal">
	<fieldset>
	<div class="form-row">
		<div class="form-label"><?php _e('Background Color', 'rslides'); ?></div>
		<div class="form-controls">
			<input type="text" class="color {hash:true}" value="<?php echo osc_esc_html($backgroundcolor); ?>" name="backgroundcolor" class="xlarge"/> <?php _e('Default #FFFFFF', 'rslides'); ?>
		</div>
	</div>
	<div class="form-row">
		<div class="form-label"><?php _e('Border Color', 'rslides'); ?></div>
		<div class="form-controls">
			<input type="text" class="color {hash:true}" value="<?php echo osc_esc_html($bordercolor); ?>" name="bordercolor" class="xlarge"/> <?php _e('Default #FFFFFF', 'rslides'); ?>
		</div>
	</div>
	<div class="form-row">
	<div class="form-label"><?php _e('Border Width', 'rslides'); ?></div>
	<div class="form-controls">
		<input type="text" value="<?php echo osc_esc_html($borderwidth); ?>" name="borderwidth" class="xlarge"/> <?php _e('Default 10', 'rslides'); ?>
	</div>
	</div>
	<div class="form-row">
		<div class="form-label"><?php _e('Box Shadow Color', 'rslides'); ?></div>
		<div class="form-controls">
			<input type="text" class="color {hash:true}" value="<?php echo osc_esc_html($shadowcolor); ?>" name="shadowcolor" class="xlarge"/> <?php _e('Default #333333', 'rslides'); ?>
		</div>
	</div>
	<div class="form-row">
		<div class="form-label"><?php _e('Width', 'rslides'); ?></div>
		<div class="form-controls">
			<input type="text" value="<?php echo osc_esc_html($width); ?>" name="width" class="xlarge"/> <?php _e('Set 0 for default full width', 'rslides'); ?>
		</div>
	</div>
	<div class="form-row">
		<div class="form-label"><?php _e('Height', 'rslides'); ?></div>
		<div class="form-controls">
			<input type="text" value="<?php echo osc_esc_html($height); ?>" name="height" class="xlarge"/> <?php _e('Set 0 for default full height', 'rslides'); ?>
		</div>
	</div>
	<div class="form-row">
	<div class="form-label"><?php _e('Caption', 'rslides'); ?></div>
	<div class="form-controls">
		<select name="caption">
			<option <?php if($caption ==1){echo 'selected="selected"';}?> value='1'><?php _e('Enable', 'rslides'); ?></option>
			<option <?php if($caption ==0){echo 'selected="selected"';}?> value='0'><?php _e('Disable', 'rslides'); ?></option>
		</select> 
	</div>
	</div>
	<div class="form-row">
	<div class="form-label"><?php _e('Link to URL', 'rslides'); ?></div>
	<div class="form-controls">
		<select name="link">
			<option <?php if($link ==1){echo 'selected="selected"';}?> value='1'><?php _e('Enable', 'rslides'); ?></option>
			<option <?php if($link ==0){echo 'selected="selected"';}?> value='0'><?php _e('Disable', 'rslides'); ?></option>
		</select> 
	</div>
	</div>
	<div class="form-row">
	<div class="form-label"><?php _e('Open Link in', 'rslides'); ?></div>
	<div class="form-controls">
		<select name="openin">
			<option <?php if($openin ==1){echo 'selected="selected"';}?> value='1'><?php _e('New Window', 'rslides'); ?></option>
			<option <?php if($openin ==0){echo 'selected="selected"';}?> value='0'><?php _e('Same Window', 'rslides'); ?></option>
		</select> 
	</div>
	</div>
	<div class="form-row">
	<div class="form-label"><?php _e('Auto Slide', 'rslides'); ?></div>
	<div class="form-controls">
		<select name="auto">
			<option <?php if($auto ==1){echo 'selected="selected"';}?> value='1'><?php _e('Enable', 'rslides'); ?></option>
			<option <?php if($auto ==0){echo 'selected="selected"';}?> value='0'><?php _e('Disable', 'rslides'); ?></option>
		</select> 
	</div>
	</div>
	<div class="form-row">
	<div class="form-label"><?php _e('Pager', 'rslides'); ?></div>
	<div class="form-controls">
		<select name="pager">
			<option <?php if($pager ==1){echo 'selected="selected"';}?> value='1'><?php _e('Enable', 'rslides'); ?></option>
			<option <?php if($pager ==0){echo 'selected="selected"';}?> value='0'><?php _e('Disable', 'rslides'); ?></option>
		</select> 
	</div>
	</div>
	<div class="form-row">
	<div class="form-label"><?php _e('Navigation', 'rslides'); ?></div>
	<div class="form-controls">
		<select name="navigation">
			<option <?php if($navigation ==1){echo 'selected="selected"';}?> value='1'><?php _e('Enable', 'rslides'); ?></option>
			<option <?php if($navigation ==0){echo 'selected="selected"';}?> value='0'><?php _e('Disable', 'rslides'); ?></option>
		</select> 
	</div>
	</div>
	<div class="form-row">
		<div class="form-label"><?php _e('Speed', 'rslides'); ?></div>
		<div class="form-controls"><input type="text" value="<?php echo $speed; ?>" name="speed" class="xlarge"> <?php _e('Default 500', 'rslides'); ?></div>
	</div>	
</fieldset>		
	<div class="form-actions">
		<button type="submit" class="btn btn-submit"></button> <?php _e('Save changes','rslides'); ?> />
	</div>
</div>

</form>
</div>