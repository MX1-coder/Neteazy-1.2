<?php
/**
 * Main Settings
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
include_once( 'settings/main.php' );

?>
<fieldset class="itembox">
    <legend>
		<?php esc_html_e( 'Main', $this->plugin['text'] ); ?>
    </legend>

    <div class="container">
        <div class="element">
			<?php esc_html_e( 'Position', $this->plugin['text'] ); ?><?php echo self::tooltip( $menu_help ); ?><br/>
			<?php echo self::option( $menu ); ?>

        </div>
        <div class="element">
			<?php esc_html_e( 'Top offset (px)', $this->plugin['text'] ); ?>
			<?php echo self::tooltip( $top_offset_help ); ?>
			<?php echo self::pro(); ?>
            <br/>
			<?php echo self::option( $top_offset ); ?>

        </div>
        <div class="element">
			<?php esc_html_e( 'Side offset (px)', $this->plugin['text'] ); ?>
			<?php echo self::tooltip( $side_offset_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $side_offset ); ?>
        </div>
    </div>

    <div class="container">
        <div class="element">
			<?php esc_html_e( 'Align', $this->plugin['text'] ); ?><?php echo self::tooltip( $align_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $align ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Shape', $this->plugin['text'] ); ?><?php echo self::tooltip( $shape_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $shape ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Side Space', $this->plugin['text'] ); ?><?php echo self::tooltip( $sideSpace_help ); ?>
            <br/>
			<?php echo self::option( $sideSpace ); ?>
        </div>
    </div>

    <div class="container">
        <div class="element">
			<?php esc_html_e( 'Button Space', $this->plugin['text'] ); ?><?php echo self::tooltip( $buttonSpace_help ); ?>
            <br/>
			<?php echo self::option( $buttonSpace ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Label On', $this->plugin['text'] ); ?><?php echo self::tooltip( $labelsOn_help ); ?><br/>
			<?php echo self::option( $labelsOn ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Label Space', $this->plugin['text'] ); ?><?php echo self::tooltip( $labelSpace_help ); ?>
            <br/>
			<?php echo self::option( $labelSpace ); ?>
        </div>
    </div>

    <div class="container">
        <div class="element">
			<?php esc_html_e( 'Label Connected', $this->plugin['text'] ); ?><?php echo self::tooltip( $labelConnected_help ); ?>
            <br/>
			<?php echo self::option( $labelConnected ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Label Effect', $this->plugin['text'] ); ?><?php echo self::tooltip( $labelEffect_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $labelEffect ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Label Speed (ms)', $this->plugin['text'] ); ?><?php echo self::tooltip( $labelSpeed_help ); ?>
            <br/>
			<?php echo self::option( $labelSpeed ); ?>
        </div>
    </div>

    <div class="container">
        <div class="element">
			<?php esc_html_e( 'Icon size (px)', $this->plugin['text'] ); ?><?php echo self::tooltip( $iconSize_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $iconSize ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Icon size for mobile (px)', $this->plugin['text'] ); ?><?php echo self::tooltip( $mobiliconSize_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $mobiliconSize ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Mobile Screen (px)', $this->plugin['text'] ); ?><?php echo self::tooltip( $mobilieScreen_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $mobilieScreen ); ?>
        </div>
    </div>

    <div class="container">
        <div class="element">
			<?php esc_html_e( 'Label size (px)', $this->plugin['text'] ); ?><?php echo self::tooltip( $labelSize_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $labelSize ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Label size for mobile (px)', $this->plugin['text'] ); ?><?php echo self::tooltip( $mobillabelSize_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $mobillabelSize ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Show After Position', $this->plugin['text'] ); ?><?php echo self::tooltip( $showAfterPosition_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $showAfterPosition ); ?>
        </div>
    </div>

    <div class="container">
        <div class="element">
			<?php esc_html_e( 'Z-index', $this->plugin['text'] ); ?><br/>
			<?php echo self::option( $z_index ); ?>
        </div>
        <div class="element"></div>
        <div class="element"></div>
    </div>

</fieldset>


<fieldset class="itembox">
    <legend>
		<?php esc_html_e( 'Sub Menu ', $this->plugin['text'] ); ?>
    </legend>

    <div class="container">
        <div class="element">
			<?php esc_html_e( 'Sub Position', $this->plugin['text'] ); ?><?php echo self::tooltip( $subPosition_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $subPosition ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Sub Space', $this->plugin['text'] ); ?><?php echo self::tooltip( $subSpace_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $subSpace ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Sub Effect', $this->plugin['text'] ); ?><?php echo self::tooltip( $subEffect_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $subEffect ); ?>
        </div>
    </div>

    <div class="container">
        <div class="element">
			<?php esc_html_e( 'Sub Speed (ms)', $this->plugin['text'] ); ?><?php echo self::tooltip( $subSpeed_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $subSpeed ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Sub Open', $this->plugin['text'] ); ?><?php echo self::tooltip( $subOpen_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $subOpen ); ?>
        </div>
        <div class="element"></div>
    </div>

</fieldset>

<fieldset class="itembox">
    <legend>
		<?php esc_html_e( 'Popup', $this->plugin['text'] ); ?>
    </legend>

    <div class="container">
        <div class="element">
			<?php esc_html_e( 'Horizontal position', $this->plugin['text'] ); ?>
			<?php echo self::tooltip( $windowhorizontalPosition_help ); ?><?php echo self::pro(); ?><br/>
			<?php echo self::option( $windowhorizontalPosition ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Vertical position', $this->plugin['text'] ); ?>
			<?php echo self::tooltip( $windowverticalPosition_help ); ?><?php echo self::pro(); ?><br/>
			<?php echo self::option( $windowverticalPosition ); ?>
        </div>
        <div class="element">
			<?php esc_html_e( 'Corners', $this->plugin['text'] ); ?><?php echo self::tooltip( $windowCorners_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $windowCorners ); ?>
        </div>
    </div>

    <div class="container">
        <div class="element">
			<?php esc_html_e( 'Color', $this->plugin['text'] ); ?><?php echo self::tooltip( $windowColor_help ); ?>
			<?php echo self::pro(); ?><br/>
			<?php echo self::option( $windowColor ); ?>
        </div>
        <div class="element"></div>
        <div class="element"></div>
    </div>

</fieldset>


