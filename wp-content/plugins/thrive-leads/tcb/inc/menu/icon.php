<?php
/**
 * Thrive Themes - https://thrivethemes.com
 *
 * @package TCB2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden
}

?>
<div id="tve-icon-component" class="tve-component" data-view="Icon">
	<div class="dropdown-header" data-prop="docked">
		<?php echo __( 'Main Options', 'thrive-cb' ); ?>
		<i></i>
	</div>
	<div class="dropdown-content">
		<div class="hide-states pb-10">
			<div class="tve-control tve-choose-icon" data-view="ModalPicker"></div>
		</div>
		<div class="tve-control no-space" data-view="ColorPicker"></div>
		<div class="hide-states pt-10">
			<div class="tve-control" data-view="Slider"></div>
		</div>
	</div>
</div>
