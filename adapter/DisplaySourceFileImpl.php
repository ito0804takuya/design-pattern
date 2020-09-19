<?php
require_once 'DisplaySourceFile.php';
require_once 'ShowFile.php';

// DisplaySourceFileを実装したクラス
class DisplaySourceFileImpl extends ShowFile implements DisplaySourceFile
// adapter
{
  public function __construct($filename)
  {
    parent::__construct($filename);
  }

  // 指定のソースをハイライトして表示
  public function display()
  {
    parent::showHighlight();
  }
}