<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php 
$s1=$_POST["s1"];
$s2=$_POST["s2"];
$toplam=0;

while($s1<=$s2){
	$toplam=$toplam+$s1;
	$s1++;
	}
echo $toplam

?>
</body>
</html>