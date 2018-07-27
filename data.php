<?php

$dress = $_GET['d'];
$intervene = $_GET['i'];

function sanitize($boolString){
	if($boolString === '1') return true;
	else return false;
}

function readInt($name){
	if(file_exists($name.".txt")){
		$file = fopen($name.".txt", "r") or die("Unable to open file ".$name.".txt!");
		$value = fread($file,filesize($name.".txt"));
		fclose($file);
		return (int)$value;
	}else{
		return 0;
	}
}

function writeInt($name, $value){
	$file = fopen($name.".txt", "w") or die("Unable to open file ".$name.".txt!");
	fwrite($file, $value);
	fclose($file);
}

function readDress(){
	return readInt("d");
}

function readCasual(){
	return readInt("c");
}

function readIntervene(){
	return readInt("i");
}

function readNoIntervene(){
	return readInt("n");
}

function writeDress($value){
	writeInt("d", $value);
}

function writeCasual($value){
	writeInt("c", $value);
}

function writeIntervene($value){
	writeInt("i", $value);
}

function writeNoIntervene($value){
	writeInt("n", $value);
}

if($dress != null && $dress !== "" && $intervene != null && $intervene !== ""){
	$dress = sanitize($dress);
	$intervene = sanitize($intervene);
	
	if($dress){
		writeDress(readDress() + 1);
	}else{
		writeCasual(readCasual() + 1);
	}
	
	if($intervene){
		writeIntervene(readIntervene() + 1);
	}else{
		writeNoIntervene(readNoIntervene() + 1);
	}
	
}else{
	//no info, display it instead
	echo "Hi :)<br>";
	echo "Dress: ".readDress()." / Casual: ".readCasual()."<br>";
	echo "Intervene: ".readIntervene()." / No intervention: ".readNoIntervene();
}

?>