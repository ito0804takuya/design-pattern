<?php
require_once 'SingletonSample.php';

// インスタンスを2つ取得
$instance1 = SingletonSample::getInstance();
sleep(1);
$instance2 = SingletonSample::getInstance();

echo '<hr>';

/**
 * 2つのインスタンスのIDが同じかどうかを確認
 */
echo 'IDが同じ : ' . ($instance1->getID() === $instance2->getID() ? 'true' : 'false');
echo '<hr>';

/**
 * 2つのインスタンスが同じかどうかを確認
 */
echo 'インスタンスが同じ : ' . ($instance1 === $instance2 ? 'true' : 'false');
echo '<hr>';

/**
 * 複製できないことを確認
 */
$instance1_clone = clone $instance1;