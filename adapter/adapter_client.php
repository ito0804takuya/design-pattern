<?php
require_once 'DisplaySourceFileImpl.php';

/**
 * DisplaySourceFileImplクラスをインスタンス化
 * 内容を表示するファイルはShowFile.php
 */
$show_file = new DisplaySourceFileImpl('./ShowFile.php');

// プレーンテキストとハイライトしたファイル内容をそれぞれ表示する
$show_file->display();