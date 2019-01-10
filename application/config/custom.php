<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

// base_url is very important. Because this is gonna be used everywhere on the website
$config['base_url'] = 'http://projects.lan/facebook-random-image/';

//title is what is gonna be shown on browser tab.
$config['title'] = "RANDOM IMAGE";

$config['tag_line'] = "YOUR TAG LINE HERE";

//this is the path of the folder where images are stored.

$config['data_files'] = "uploads/";


//where you want to redirect your traffic.
$config['redirect_url']  = "http://dev.ahsanshabbir.com";

//database settings here

$config['db_name']  = "seo";
$config['db_user']  = "root";
$config['db_pass']  = "root";
$config['db_host']  = "127.0.0.1";
$config['copyrights'] = "AMS 2017";

?>
