<?php
$arrayName = array("maryam","culis");
$mahasiswa = array(
array(
"nama" => "maryam",
"nim" => "001",
"kampus" => "uin"),
array(
"nama" => "agus",
"nim" => "002",
"kampus" => "uin")
);
print_r($mahasiswa);
echo $mahasiswa[0]["nama"]."<br><br>";
echo $mahasiswa[1]["nim"]."<br><br>";
for ($i=0;$i<2;$i++){
echo $arrayName[$i]."<br><br>";
}
for ($e=0;$e<2;$e++){
	foreach ($mahasiswa[$e] as $key => $value){
		echo $mahasiswa[$e][$key]."<br><br>";
	}
}
$nama = "10a";
if(empty($nama) || $nama == "" || $nama === ''){
	echo "kosong"."<br><br>";
}else{
	echo "ada";
	echo " yaitu ".$nama."<br><br>";}
$suhu = 30;
if($suhu == 30){
	echo "suhu normal"."<br>" ;
}else if($suhu < 30){
	echo "suhu dingin"."<br>";
}else{echo "panas";}
?>