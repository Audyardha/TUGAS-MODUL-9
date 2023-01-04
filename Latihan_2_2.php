<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Latihan 2 </title>
</head>
<body>
<h2> Latihan 2 </h2>
<?php
$nama1=$_FILES["file1"]["name"];
$nama2=$_FILES["file2"]["name"];
$nama3=$_FILES["file3"]["name"];
$tmp1=$_FILES["file1"]["tmp_name"];
$tmp2=$_FILES["file2"]["tmp_name"];
$tmp3=$_FILES["file3"]["tmp_name"];
copy($tmp1,"c:/upload_dir/$nama1");
copy($tmp2,"c:/upload_dir/$nama2");
copy($tmp3,"c:/upload_dir/$nama3");
echo("Name file 1 :<strong>$nama1</strong><br>");
echo("Name file 2 :<strong>$nama2</strong><br>");
echo("Name file 3 :<strong>$nama3</strong>");
?>
</body>
</html>