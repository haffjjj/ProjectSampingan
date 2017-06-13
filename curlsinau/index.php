<?php
function bacaHTML($url){
  $data = curl_init();
  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($data, CURLOPT_URL, $url);
  $hasil = curl_exec($data);
  curl_close($data);
  return $hasil;
}
$kodeHTML =  bacaHTML("http://194.58.115.48/add?id=1492840541586363433_5128899969");
?>
