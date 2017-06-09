<?php
function bacaHTML($url){
  // inisialisasi CURL
  $data = curl_init();
  // setting CURL
  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($data, CURLOPT_URL, $url);
  // menjalankan CURL untuk membaca isi file
  $hasil = curl_exec($data);
  curl_close($data);
  return $hasil;
}
$kodeHTML =  bacaHTML("http://www.detik.com");
$pecah = explode('<div class="tl_vidfot">', $kodeHTML);
$pecahLagi = explode('<article>', $pecah[1]);
echo $pecahLagi[0];
?>
