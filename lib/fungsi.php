<?php
function post($p,$a=""){
	return isset($_POST["$p"])?_POST["$p"]:"$a";
}
function get($p,$a=""){
	return isset($_GET["$p"])?$_GET["$p"]:$a;
}
function sess($p,$a=""){
	return isset($_SESSION["$p"])?$_SESSION["$p"]:"$a";
}
function query($q){
	include "koneksi.php";
	$query=$db->prepare($q);
	$query->execute();
	return $query;
}
function select ($t,$f="*"){
	include "koneksi.php";
	$query=$db->prepare("select $f from $t");
	$query-execute();
	return $query;
}
function insert ($t,$f){
	include "koneksi.php";
	$query=$db->prepare("insert into $t values($f)");
	$query-execute();
	return $query;
}
function update($t, $f){
	include "koneksi.php";
	$query=$db->prepare("update $t set $f");
	$query-execute();
	return $query;
}
function delete($t){
	include "koneksi.php";
	$query=$db->prepare("delete from $t");
	$query-execute();
	return $query;
}
function far($q){
	include "koneksi.php";
	return $data=$q->fetchALL();
}
function fir($q){
	include "koneksi.php";
	return $data=$q->fetch();
}
function nur($q){
	include "koneksi.php";
	return $data=$q->rowCount();
}
function rp($duit){
	return "RP" .number_format($duit);
}
function alert($a){
	echo"<script>alert('$a')</script";
}
function redirect($a){
	echo"<script>location.href='$a'</script";
}
function back(){
	echo"<script>history.back()</script>";
}
function paging($q,$l,$p){
	$of=($p-1)*$l;
	$query=mysql_query("$q limit $of,$l");
	$jumlah=ceil(nur(query($q))/$l);
	$paging=array("query"=>$query,"jumlah"=>$jumlah,"no"=>$of);
	return $paging;
}
function nav($url,$j,$p){
	for($i=1;$i<=$j;$i++){
		if($i==$p)echo"<span>$i</span>";
		else echo"<a href='$url&page=$i'>$i</a>";
	}
}
?>