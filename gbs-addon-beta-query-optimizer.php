<?php
/*
Plugin Name: Group Buying Addon - Advanced: Query Optimization
Version: Beta
Plugin URI: http://groupbuyingsite.com/marketplace
Description: This optimization should be used with caution and should only be used if advised. It will make database queries more efficient by adding additional tables.
Author: Sprout Venture
Author URI: http://sproutventure.com/wordpress
Plugin Author: Dan Cameron
Contributors: Dan Cameron 
Text Domain: group-buying
Domain Path: /lang

*/

add_action('plugins_loaded', 'gb_load_query_opt');
function gb_load_query_opt() {
	if (class_exists('Group_Buying_Controller')) {
		require_once('groupBuyingQueryOptimization.class.php');
		Group_Buying_Query_Optimization_Addon::init();
	}
}