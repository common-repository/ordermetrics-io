<?php
/*
Plugin Name: OrderMetrics
Description: Accurate Profit Analysis for Ecommerce Companies
Version:     1.0.1
Author:      OrderMetrics
Author URI:  https://ordermetrics.com
License:     GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

function ordermetrics_menu(){
  add_menu_page(
    "OrderMetrics",
    "OrderMetrics",
    "manage_options",
    "ordermetrics",
    NULL,
    "dashicons-chart-bar"
  );
}

function ordermetrics_javascript(){
    wp_enqueue_script('ordermetrics_javascript', plugin_dir_url(__FILE__) . 'ordermetrics.js');
}

add_action('admin_menu', 'ordermetrics_menu');
add_action('admin_enqueue_scripts', 'ordermetrics_javascript');

?>
