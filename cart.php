<?php
require_once("funx.php");
//セッション開始
session_start();

//セッションから取得
$cart = null;
if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
}else{
    $cart =[];
}
//リクエストパラメータを取得
$id = -1;
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
}
//選択された商品を取得
$items = createItems();
$item = $items[$id];

//商品をカートに追加
$cart[] = $item;

//セッションに追加
$_SESSION["cart"] = $cart;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ccmc-04 - ショップシステム</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />	
</head>

<body>
	<h1>ショップシステム</h1>
	<p><a href="shop.html">買い物を続ける</a>　<a href="cart.html?mode=clear">カートをクリアする</a></p>
	<table>
		<tr>
			<th>書籍名</th>
			<th>価格</th>
			<th>著者</th>
			<th>ISBN</th>
			<th></th>
		</tr>
		        <tr>
			<td>Head First PHP & MySQL</td>
			<td>4,650</td>
			<td>Lynn Beighley</td>
			<td>978-4873114446</td>
			
		</tr>
		        <tr>
			<td>リーダブルコード</td>
			<td>2,600</td>
			<td>Dustin Boswell</td>
			<td>978-4873115658</td>
			
		</tr>
		        <tr>
			<td>Head First デザインパターン</td>
			<td>5,060</td>
			<td>Eric Freeman</td>
			<td>978-4873112497</td>
			
		</tr>
		        <tr>
			<td>PHPによるデザインパターン入門</td>
			<td>2,400</td>
			<td>下岡 秀幸</td>
			<td>978-4798015163</td>
		</tr>
			</table>
</body>

</html>
