<?php
require_once 'ListDisplay.php';
require_once 'TableDisplay.php';

$data = array(
  'デザイン',
  'gang',
  'sample1',
  'sample2'
);

$display1 = new ListDisplay($data);
$display2 = new TableDisplay($data);

$display1->display();
echo '<hr>';
$display2->display();