<?php
/**
 * Add RSS Feed to dashboard
 */
function pep_dashboard_widgets() {
global $wp_meta_boxes;
unset(
$wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'],
$wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'],
$wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']
);
wp_add_dashboard_widget( 'dashboard_custom_feed', 'جدید ترین های المنتور پلاس', 'pep_dashboard_custom_feed_output' );
}
function pep_dashboard_custom_feed_output() {
echo '<div style="width:100%;float:right;"><p style="border:1px solid #000000;">شما در حال استفاده از فارسی ساز حرفه ای المنتور پلاس فارسی هستید</p>';
echo "</div>";
}
add_action('wp_dashboard_setup', 'pep_dashboard_widgets');