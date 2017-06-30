<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

// base_url is very important. Because this is gonna be used everywhere on the website
$config['base_url'] = 'https://your-website.com/random-image/';

//title is what is gonna be shown on browser tab.
$config['title'] = "AHSAN TEST WEBSITE";

$config['tag_line'] = "She's Your Future GF";

//this is the path of the folder where images are stored.

$config['data_files'] = "/home/ahsan044/public_html/random-image/assets/uploads/";


//where you want to redirect your traffic.
$config['redirect_url']  = "http://dev.ahsanshabbir.com";

//database settings here

$config['db_name']  = "seo";
$config['db_user']  = "";
$config['db_pass']  = "";
$config['db_host']  = "localhost";
$config['copyrights'] = "AMS 2017";

?>