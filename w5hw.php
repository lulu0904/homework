<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
date_default_timezone_set('Asia/Taipei');
echo "現在時間：".date("Y年m月j日l H點i分s秒")." (台灣時區) "."<br/>";
$now = date("Y-m-j H:i:s");
echo "世界末日：2017年12月31日<br/>";
$end = date("2017-12-31");
echo "距離世界末日剩：";
$date=floor((strtotime($end)-strtotime($now))/86400);
echo $date."天 ";
$hour=floor((strtotime($end)-strtotime($now))%86400/3600);
echo $hour."小時 ";
$minute=floor((strtotime($end)-strtotime($now))%86400%3600/60);
echo $minute."分鐘 ";
$second=floor((strtotime($end)-strtotime($now))%86400%60);
echo $second."秒 <br/>";
switch (date("m"))
{
	case "1":
		echo "<img height='50%' width='50%' src='http://www.2016年占い.jp/wp-content/uploads/1x403.jpg' width='90%'>";
		break;
	case "2":
		echo "<body background='http://www.2017年占い.jp/wp-content/uploads/2word003.jpg' width='90%'>";
		break;
	case "3":
		echo "<body background='http://www.city.urasoe.lg.jp/docs/2016030400077/file_contents/1.png' width='90%'>";
		break;
	case "4":
		echo "<body background='http://komae-kosodate.net/article/2016020100062/files/25-1.png' width='90%'>";
		break;
	case "5":
		echo "<body background='http://www.misaki.rdy.jp/illust/kisetu/spring/title/sozai/5x503.jpg' width='90%'>";
		break;
	case "6":
		echo "<img height='50%' width='50%' src='http://nihontu-cn.com/wp/wp-content/uploads/2017/05/6-4.jpg' width='90%'>";
		break;
	case "7":
		echo "<body background='http://resort-baito.net/wp-content/uploads/2016/11/tsuki_title07.png' width='90%'>";
		break;
	case "8":
		echo "<body background='http://resort-baito.net/wp-content/uploads/2016/12/tsuki_title08.png' width='90%'>";
		break;
	case "9":
		echo "<body background='http://komae-kosodate.net/article/2016082200014/files/9.png' width='90%'>";
		break;
	case "10":
		echo "<body background='http://www.misaki.rdy.jp/illust/kisetu/autumn/title/sozai/10x303.jpg' width='90%'>";
		break;
	case "11":
		echo "<body background='http://www.sozai-library.com/wp-content/uploads/2016/06/7980-450x337.jpg' width='90%'>";
		break;
	case "12":
		echo "<body background='http://www.2016年占い.jp/wp-content/uploads/12x203.jpg' width='90%'>";
		break;
	
}