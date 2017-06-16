<?php
$pname=$_POST["uname"];
$pgender=$_POST["gender"];
$pphone=$_POST["phone"];
$pyear=$_POST["year"];
$pmonth=$_POST["month"];
$pday=$_POST["day"];
$pmessage=$_POST["message"];
echo"學生資料 <br/>";
echo"學生姓名:" .$pname."<br/>";
echo"學生性別:" .$pgender."<br/>";
echo"學生電話:" .$pphone."<br/>";
echo"生日年:" .$pyear."<br/>";
echo"月:" .$pmonth."<br/>";
echo"天:" .$pday."<br/>";
echo"您留下的訊息:" .$pmessage."<br/>";

 
$link=mysqli_connect("localhost","root","hayama1028","homework");
mysqli_query($link,"set names utf8");
$add="INSERT INTO hw(name,gender,phone,year,month,day,message) VALUES('$pname','$pgender','$pphone','$pyear','$pmonth','$pday','$pmessage')";

mysqli_query($link, $add);


$read="SELECT * FROM hw";//讀取資料
$readresult=mysqli_query($link,$read);
	echo "<table border='1'>";
	echo "<tr><td>編號</td><td>姓名</td><td>性別</td><td>電話</td><td>出生年</td><td>出生月</td><td>出生日</td><td>訊息</td></tr>";

while($result=mysqli_fetch_array($readresult))
{
	echo "<tr>";
	echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td><td>".$result[6]."</td><td>".$result[7]."</td>";
	//echo "<td><a href='travel_del.php?no=".$result[0]."'>刪除資料</a></td>";
	//echo "<td><a href='travel_update.php?no=".$result[0]."'>更新資料</a></td>";
	echo"</tr>";
}
echo"</table>";

?>
