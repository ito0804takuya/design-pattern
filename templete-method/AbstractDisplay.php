<?php

// (abstractは、抽象クラスにつける。子クラスはメソッドをオーバーライドしないといけなくなる)
abstract class AbstractDisplay
{
  // 表示するデータ
  private $data;

  /**
   * @param mixed $data
   * (mixedは、色々な型がありえる場合)
   */
  public function __construct($data)
  {
    if (!is_array($data)) {
      $data = array($data);
    }
    $this->data = $data;
  }

  public function display()
  {
    $this->displayHeader();
    $this->displayBody();
    $this->displayFooter();
  }

  // データを取得する
  public function getData()
  {
    return $this->data;
  }

  /**
   * ヘッダを表示する(サブクラスに実装を任せる抽象メソッド)
   * (protectedは、このクラスと、継承したクラスからアクセス可)
   */
  protected abstract function displayHeader();

  // ボディを表示する(サブクラスに実装を任せる抽象メソッド)
  protected abstract function displayBody();

  // フッターを表示する(サブクラスに実装を任せる抽象メソッド)
  protected abstract function displayFooter();
}
