<?php
/**
 * Holds the html template for page type tagging
 *
 * Used in the main plugin file.
 *
 * @package WooCommerce upsy Tagging
 * @since   1.1.0
 * @var string $page_type
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<?php if ( isset( $page_type ) && !empty( $page_type ) ): ?>
<div class="upseller_page_type" style="display:none"><?php echo esc_attr($page_type); ?></div>
<?php endif; ?>