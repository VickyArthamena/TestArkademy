<?php

function biodata ($name, $age) {
	$name = $name;
	$umur = $age;
	$address = "Perumnas THP 3 Jln Gagak No 19";
	$hobbies = "Film Dan Musik";
	$is_maried = false;
	$list_school = [["keyname" => "Politeknik Caltex riau", 
	"year_in" => "2015", 
	"year_out" => "2019", 
	"major" => "Teknik Informatika"],
	["keyname" => "SMK N 1 Mandau", 
	"year_in" => "2012", 
	"year_out" => "2015", 
	"major" => "Teknik Komputer dan Jaringan"]];
	$skills = [["skill_name" => "php", "level" => "advanced"]];
	$interest_in_coding = true;
	$biodatadiri = [$name,$umur,$address,$hobbies,$is_maried,$list_school,$skills,$interest_in_coding];
	$dataJson = json_encode($biodatadiri);
	return $dataJson ;
}
$name = "Vicky Arthamena";
$age = 22;
echo 'Data Diri'.$name.'Dan'.$age.'Adalah'.biodata($name,$age);
?>