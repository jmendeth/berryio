<?
/*------------------------------------------------------------------------------
  BerryIO About Command
------------------------------------------------------------------------------*/

$title = 'About '.NAME;

// Load about information
require_once(CONFIGS.'about.php');

// Load the version information
require_once(CONFIGS.'version.php');

// Display about information
$content .= view('pages/about');
