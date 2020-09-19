<?php
class ShowFile
// adaptee
{
  /**
   * 内容を表示するファイル名
   * @access private
   */
  private $filename;

  /**
   * @param string ファイル名
   * @throws Exception
   */
  public function __construct($filename)
  {
    if (!is_readable($filename)) {
      throw new Exception('file "' . $filename . '" is not readable!');
    }
    $this->filename = $filename;
  }

  // プレーンテキストを表示する
  public function showPlain()
  {
    echo '<pre>';
    echo htmlspecialchars(file_get_contents($this->filename), ENT_QUOTES, mb_internal_encoding());
    echo '</pre>';
  }

  // キーワードをハイライトして表示
  public function showHighlight()
  {
    highlight_file($this->filename);
  }
}