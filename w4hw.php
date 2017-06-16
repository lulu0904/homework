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