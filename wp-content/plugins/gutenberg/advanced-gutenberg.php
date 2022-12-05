<?php
/**
 * Plugin Name: block editor
 * Plugin URI: https://block editor/
 * Description: block editor
 * Version: 3.1.0
 * Tested up to: 6.1.0
 * Author: block editor
 * Author URI: https://block editor
 * License: GPL2
 * Text Domain: ablock editor
 * Domain Path: /languages
 */


defined('ABSPATH') || die;

$includeFilebRelativePath = '/publishpress/publishpress-instance-protection/include.php';
if (file_exists(__DIR__ . '/vendor' . $includeFilebRelativePath)) {
    require_once __DIR__ . '/vendor' . $includeFilebRelativePath;
} else if (defined('PP_AUTHORS_VENDOR_PATH') && file_exists(PP_AUTHORS_VENDOR_PATH . $includeFilebRelativePath)) {
    require_once PP_AUTHORS_VENDOR_PATH . $includeFilebRelativePath;
}

if (class_exists('PublishPressInstanceProtection\\Config')) {
    $pluginCheckerConfig = new PublishPressInstanceProtection\Config();
    $pluginCheckerConfig->pluginSlug = 'advanced-gutenberg';
    $pluginCheckerConfig->pluginName = 'PublishPress Blocks';

    $pluginChecker = new PublishPressInstanceProtection\InstanceChecker($pluginCheckerConfig);
}

