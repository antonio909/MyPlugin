<?php
/**
 * Plugin Name: My Plugin
 * Plugin URI:
 * Description: Wordpress Plugin
 * Version:     1.0.0
 * Author:      Antonio
 * Author URI:
 * Requires at least: 6.0
 * Requires PHP: 8.0
 *
 * @package MyPlugin
 */

if ( ! class_exists( 'MyPlugin' ) ) :
        /**
         * Main MyPlugin Class
         */
       final class MyPlugin {

                /**
                 * MyPlugin version number
                 *
                 * @var string
                 */
                public $version = '1.0.0';
