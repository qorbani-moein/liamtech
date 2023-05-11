<?php

/**
 * Plugin Name: Option Theme - Eight
 * Plugin URI:  https://eightco.org
 * Description: All Option of Your Site
 * Version:     0.1
 * Author:      eightco
 * Author URI:  https://eightco.org
 * Text Domain: eight-option-theme-xnet
 * License: GPLv3
 */

if (!defined('ABSPATH')) {
  die('-1');
}


add_action('wp_footer', 'query_page');

function query_page()
{
  include('init.php');

  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $current_page = "https://";
  else
    $urcurrent_pagel = "http://";
  // Append the host(domain name, ip) to the URL.   
  $current_page .= $_SERVER['HTTP_HOST'];

  // Append the requested resource location to the URL   
  $current_page .= $_SERVER['REQUEST_URI'];

  $page_home = get_site_url() . '/';
  $services_single = $page_home . 'services/';
  $product_single = $page_home . 'product/';

  console(substr($current_page, strlen($current_page), 1));
  if (substr($current_page, strlen($current_page) - 1, 1) == "/") {
    // $page_portfolio = $page_portfolio .  "/";
    // $page_ourservice = $page_ourservice .  "/";
    // $page_about_us = $page_about_us .  "/";
  }

  console("start");
  console("current_page: " . $current_page);
  console("page_home: " . $page_home);
  console("services_single: " . $services_single);
  // console("page_portfolio: " . $page_portfolio); 


  if ($current_page == $page_home) {
  }
  if ($current_page == $page_category) {
  }
  if ($current_page == $page_archive_portfolio) {
  }
  if ($product_single == substr($current_page, 0, strlen($product_single))) {
    product_single_script();
    replace_txt_add_to_cart();
  }
  if ($services_single == substr($current_page, 0, strlen($services_single))) {
    services_single_script();
  }
  //elseif($current_page == substr($current_page,0,strlen($page_shop_en))){
  //     script_page_shop_EnToFa();
  // }
  header();
}
function header()
{
  echo `
  <script>
    var all_change = document.querySelectorAll("change-to-show-card").entries;
    
    // for(i = 0 ; i <= all_change.length -1 ; i++){
    //   item_card = all_change[i].innerHtml;
    // }
    for(const[i , elem] of all_change.entries()){
      
    }
    
    var all_change_card_btn = document.querySelectorAll("change-to-show-card add_to_cart_button").entries;
    var all_change_card_img = document.querySelectorAll("change-to-show-card bdt-wc-product-image a");
    
    for(const[i , elem] of all_change.entries()){
      elem.href = all_change_card_img[i].innerHTML.href;
    }

  </script>  
  `;

}
