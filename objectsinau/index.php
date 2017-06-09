<?php
class sample
{
  function nama()
  {
    echo "Hafiz Joundy Syafie";
  }
}

$obj = new sample();
$obj->nama();
class siswa
{
  var $nama;
  var $kelas;
  var $nohp;
}

$joundy = new siswa();
$joundy->nama="Hafiz Joundy Syafie";
$joundy->kelas=11;
$joundy->nohp='082199066627';
echo $joundy->nohp;
?>
