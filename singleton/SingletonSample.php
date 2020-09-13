<?php
class SingletonSample
{
  // メンバ変数(オブジェクトの属性)
  private $id;

  // 唯一のインスタンス を保持する変数
  // (static : クラス変数)
  private static $instance;

  /** 
   * IDとして、生成日時+乱数のハッシュ値を作成
   * privateなため、このクラス自身からのみID属性を付与できる
  */
  private function __construct()
  {
    $this->id = md5(date('r') . mt_rand());
  }

  /**
   * インスタンスを返すためのメソッド(外部からのインターフェース)
   * (static function : クラスメソッド=クラスが持つべきメソッド)
   * @return SingletonSampleインスタンス
   */
  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new SingletonSample(); // 初回のみ
      echo 'created!';
    }
    return self::$instance;
  }

  /**
   * IDを返す
   * @return インスタンスのID
   */
  public function getID()
  {
    return $this->id;
  }

  /**
   * インスタンスの複製を拒否する
   * @throws RuntimeException
   */
  public final function __clone()
  {
    throw new RuntimeException('Clone is not allowed against' . get_class($this));
  }
}