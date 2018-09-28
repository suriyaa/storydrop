<?php
/**
 * @package config
 */

// Protocol allows us to detect if the page is being accessed via SSL or not
$Protocol = $_SERVER['USING_HTTPS'] ? 'https://' : 'http://';
define('PROTOCOL',$Protocol);

// CASHEBUST is used to version your css and js files on the web
define('CACHEBUST','1');

$siteTitle = 'StoryDrop';

$siteKeywords = 'storydrop, suriyaa, story, drop, book, publishing, book publishing, cs50x, final project, upload, platform';

$siteDescription = 'Upload your manuscript file';

$creator = 'Suriyaa R. Sundararuban';
