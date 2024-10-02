<?php
require_once 'paging\header.php'; // Ensure the correct class file is loaded

$head = new header(); // Correct class name
$head->header(); // Call the header method from the correct class

require_once 'paging\footer.php'; // Ensure the correct class file is loaded
$foot = new footer(); // Correct class name 
$foot->footer(); // Call the footer method from the correct class
