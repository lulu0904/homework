<!DOCTYPE html>
<html>
<head>
	<title>上傳頁面</title>
</head>
<body>
	<form action = "hw10upload.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000">

	<?php
	$i=$_POST["count"];
	for($j=0 ; $j<$i ; $j++){
	?>

	選擇檔案<?php echo $j+1;?>:<input type="file" name="uploadfile[]">

	<?php
	
	}
	?>

	<input type="hidden" name="number" value=<?php $i; ?>>
	<input type="submit" value="送出">
	</form>

</body>
</html>