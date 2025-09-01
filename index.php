<?php
require 'classes.php';
require 'layouts.php';
require 'forms.php';
// Creating an instance of the class
$hello = new HelloWorld();
$layout = new layouts();
$form = new forms();
// Using the layout methods
print $layout->header();
print $layout->nav();
print $layout->main();
print $layout->footer();

// Using the class methods
print $hello->greet();
print $hello->today();
?>