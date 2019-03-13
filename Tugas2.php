<?php
$organisasi = array(
	"keamanan" => array(
	"ketua" => "dul",
	"wakil" => "jono",
	"anggota" => "rudi"),
	
	"ketertiban" => array(
	"ketua" => "udin",
	"wakil" => '',
	"sekretaris" => "chulis"),
	"kemanusiaan" => array(
	"ketua" => "pratama",
	"wakil" => "nugraha"));
	//for ($i=0;$i<2;$i++){echo $organisasi[$i]."<br><br>";}
	//for ($e=0;$e<3;$e++){foreach ($organisasi[$e] as $key => $value){echo $organisasi[$e][$key]."<br><br>";}}
	//echo $organisasi;
	//print_r(%organisasi);
	foreach ($organisasi as $key => $value) {
        $index = 1;
        $divisi = $key;
		foreach ($value as $key => $value) {
			if(empty($value)){
                echo $index.". "."Divisi ".$divisi." tidak mempunyai ".$key."<br>";} 
			else {
                 echo $index.". "."Divisi ".$divisi." mempunyai ".$key." dengan nama ".$value."<br>";}
         $index++;}
	echo "<br>";}
?>