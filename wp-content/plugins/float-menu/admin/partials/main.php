<?php
/**
 * Plugin main page
 *
 * @package     Wow_Plugin
 * @subpackage  Admin/Main_page
 * @author      Dmytro Lobov <d@dayes.dev>
 * @copyright   2019 Wow-Company
 * @license     GNU Public License
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wpdb;
$data = $wpdb->prefix . 'wow_' . $this->plugin['prefix'];
$info = ( isset( $_REQUEST['info'] ) ) ? sanitize_text_field( $_REQUEST['info'] ) : '';
if ( $info === 'saved' ) {
	echo '<div class="updated" id="message"><p><strong>' . esc_attr__( 'Item Added', $this->plugin['text'] ) . '</strong>.</p></div>';
} elseif ( $info === 'update' ) {
	echo '<div class="updated" id="message"><p><strong>' . esc_attr__( 'Item Updated', $this->plugin['text'] ) . '</strong>.</p></div>';
} elseif ( $info === 'delete' ) {
	$delid = absint( $_GET['did'] );
	$wpdb->delete( $data, [ 'id' => $delid ], [ '%d' ] );
	echo '<div class="updated" id="message"><p><strong>' . esc_attr__( 'Item Deleted', $this->plugin['text'] ) . '</strong>.</p></div>';
}

$current_tab = ( isset( $_REQUEST["tab"] ) ) ? sanitize_text_field( $_REQUEST["tab"] ) : 'list';

$tabs = apply_filters( $this->plugin['slug'] . '_tab_menu', array(
	'list'      => esc_attr__( 'List', $this->plugin['text'] ),
	'add-new'   => esc_attr__( 'Add new', $this->plugin['text'] ),
	'extension' => esc_attr__( 'Pro Features', $this->plugin['text'] ),
	'support'   => esc_attr__( 'Support', $this->plugin['text'] ),
	'items'     => esc_attr__( 'Plugins', $this->plugin['text'] ),
	'rate'      => esc_attr__( 'Rate', $this->plugin['text'] ),
	'docs'      => esc_attr__( 'Documentation', $this->plugin['text'] ),
) );

$rate_url = 'https://wordpress.org/support/plugin/float-menu/reviews/#new-post';
$docs_url = 'https://wow-company.com/faq/category/wow-plugins/float-menu-pro/';

$rating = $this->rating['wp_url'];
?>

    <div class="wrap">
        <h1 class="wp-heading-inline"><?php echo $this->plugin['name']; ?>
            v. <?php echo $this->plugin['version']; ?></h1>
        <a href="?page=<?php echo $this->plugin['slug']; ?>&tab=add-new" class="page-title-action">
			<?php esc_attr_e( 'Add New', $this->plugin['text'] ); ?></a>
        <a href="<?php echo $this->url['facebook']; ?>" class="page-title-action" target="_blank">Stay in touch</a>
        <hr class="wp-header-end">
        <div class="notice notice-info">
            <p class="ideas">
                <i class="fas fa-bullhorn"></i>We are constantly trying to improve the plugin and add more useful
                features to it. Your support and your ideas for improving the plugin are very important to us. <br/>
                <i class="fas fa-star"></i>If you like the plugin, please <a href="<?php echo esc_url( $rating ); ?>"
                                                                             target="_blank">leave a review</a> about it
                at WordPress.org.<br/>
                <i class="fas fa-share-alt"></i>Help other users find this plugin and take advantage of it.
                <b>Share:</b> <span data-share="facebook">Facebook</span>, <span data-share="twitter">Twitter</span>,
                <span data-share="vk">VK</span>, <span data-share="linkedin">LinkedIn</span>, <span
                        data-share="pinterest">Pinterest</span>, <span data-share="xing">XING</span>, <span
                        data-share="reddit">Reddit</span>, <span data-share="blogger">Blogger</span>, <span
                        data-share="telegram">Telegram</span>
            </p>
            <input type="hidden" id="wp-title" value="<?php echo esc_attr( $this->rating['wp_title'] ); ?>">
            <input type="hidden" id="wp-url" value="<?php echo esc_url( $this->rating['wp_home'] ); ?>">
        </div>

        <div id="wow-message"></div>

		<?php
		echo '<h2 class="nav-tab-wrapper">';
		foreach ( $tabs as $tab => $name ) {
			$class = ( $tab === $current_tab ) ? ' nav-tab-active' : '';
			if ( $tab == 'add-new' ) {
				$action = ( isset( $_REQUEST["act"] ) ) ? sanitize_text_field( $_REQUEST["act"] ) : '';
				if ( ! empty( $action ) && $action == 'update' ) {
					echo '<a class="nav-tab' . esc_attr( $class ) . '" href="?page=' . $this->plugin['slug'] . '&tab='
					     . esc_attr( $tab ) . '">' . esc_attr__( 'Update', $this->plugin['prefix'] ) . ' #'
					     . absint( $_REQUEST["id"] ) . '</a>';
				} else {
					echo '<a class="nav-tab' . esc_attr( $class ) . '" href="?page=' . $this->plugin['slug'] . '&tab='
					     . esc_attr( $tab ) . '">' . esc_attr( $name ) . '</a>';
				}
			} elseif ( $tab === 'rate' ) {
				echo '<a class="nav-tab' . esc_attr( $class ) . '" href="' . esc_url( $rate_url ) . '" target="_blank"><span class="dashicons dashicons-star-filled" style="color:#ffcc01;"></span> ' . esc_attr( $name ) . '</a>';

			} elseif ( $tab === 'docs' ) {
				echo '<a class="nav-tab' . esc_attr( $class ) . '" href="' . esc_url( $docs_url ) . '" target="_blank"><span class="dashicons dashicons-media-document" style="color:#006bb3;"></span>' . esc_attr( $name ) . '</a>';

			} else {
				echo '<a class="nav-tab' . esc_attr( $class ) . '" href="?page=' . $this->plugin['slug'] . '&tab='
				     . esc_attr( $tab ) . '">' . esc_attr( $name ) . '</a>';
			}

		}
		echo '</h2>';
		$file = apply_filters( $this->plugin['slug'] . '_menu_file', $current_tab );
		switch ( $file ) {
			case 'add-new':
				include_once( 'add-new.php' );
				break;
			case 'extension':
				include_once( 'extension.php' );
				break;
			case 'support':
				include_once( 'support.php' );
				break;
			case 'items':
				include_once( 'items.php' );
				break;
			default:
				include_once( 'list.php' );
				break;
		}
		?>
    </div>
<?php
