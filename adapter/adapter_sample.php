<?php
require_once 'ShowFile.php';

/**
 * ShowFileクラスをインスタンス化する
 */
try {
  $show_file = new ShowFile('./ShowFile.php');
}
catch (Exception $e) {
  die($e->getMessage());
}

$show_file->showPlain();
echo '<hr>';
$show_file->showHighlight();