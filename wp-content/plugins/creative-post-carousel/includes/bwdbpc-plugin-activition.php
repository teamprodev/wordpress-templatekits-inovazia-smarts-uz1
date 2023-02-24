<?php
if (!defined( 'ABSPATH')) {
    exit;
}

function bwdbpc_addon_failed_load() {
    $check_display = get_current_screen();
	if (isset( $check_display->parent_file) && 'plugins.php' === $check_display->parent_file && 'update' === $check_display->id) {
		return;
	}
	$bwdbpc_plugin_plugin = 'elementor/elementor.php';
	if (bwdbpc_addon_install()) {
		if (!current_user_can('activate_plugins')) {
			return;
		}
		$bwdbpc_plugin_active_url = wp_nonce_url('plugins.php?action=activate&plugin=' . $bwdbpc_plugin_plugin . '&plugin_status=all&paged=1&s', 'activate-plugin_' . $bwdbpc_plugin_plugin );
		$bwd_plugin_the_notice_is = '<p><b>Creative Post Carousel</b> requires Elementor to be activated.</p>';
        $bwd_plugin_the_notice_is .= '<p><a href="'. $bwdbpc_plugin_active_url .'" class="button-primary">Activate Elementor</a></p>';
	} else {
		if (!current_user_can('install_plugins')) {
			return;
		}
		$install_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=elementor'), 'install-plugin_elementor');
		$bwd_plugin_the_notice_is = '<p><b>Creative Post Carousel</b> requires Elementor to be installed and activated.</p>';
		$bwd_plugin_the_notice_is .= '<p><a href="'. $install_url .'" class="button-primary">Install Elementor</a></p>';
	}
	echo '<div class="notice notice-error"><p>' . $bwd_plugin_the_notice_is . '</p></div>';
}

function bwdbpc_admin_notice_minimum_elementor_version() {

	if (!current_user_can('update_plugins')) {
		return;
	}
	$file_path = 'elementor/elementor.php';
    $upgrade_link = wp_nonce_url(self_admin_url('update.php?action=upgrade-plugin&plugin=') . $file_path, 'upgrade-plugin_' . $file_path);
	$bwd_plugin_the_notice_is = '<p><b>Creative Post Carousel</b> does not work since you are using an older version of Elementor</p>';
    $bwd_plugin_the_notice_is .= '<p><a href="'. $upgrade_link .'" class="button-primary">Update Elementor</a></p>';
	echo '<div class="notice notice-error">' . $bwd_plugin_the_notice_is . '</div>';
}

function bwdbpc_addon_install() {
    $file_path = 'elementor/elementor.php';
    $installed_plugins = get_plugins();

    return isset($installed_plugins[$file_path]);
}
