<?php
/*
Plugin Name: CI Percentage calculator
Plugin URI: https://www.calculator.io/percentage-calculator/
Description: This percentage calculator computes the percent of a number, the percentage change, and the quantity of a number whose percentage is provided.
Version: 1.0.0
Author: Percentage Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_percentage_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Percentage Calculator by www.calculator.io";

function display_calcio_ci_percentage_calculator(){
    $page = 'index.html';
    return '<h2>Percentage Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_percentage_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_percentage_calculator', 'display_calcio_ci_percentage_calculator' );