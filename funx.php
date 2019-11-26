<?php
require_once "Item.php";
?>
<?php
/**
 * 商品の配列を生成する。
 * @return array Itemクラスのインスタンスを要素とする配列
 */
function createItems():array {
	$items = array(
		new Item("Head First PHP & MySQL", 4,650, Lynn Beighley, 978-4873114446),
		new Item("リーダブルコード", 2,600, Dustin Boswell, 978-4873115658),
		new Item("Head First デザインパターン", 5,060, Eric Freeman, 978-4873112497),
		new Item("PHPによるデザインパターン入門", 2,400, 下岡 秀幸, 978-4798015163),

	);	
}
?>