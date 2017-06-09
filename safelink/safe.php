<?php
include "db.php";
$url = $_GET['url'];
$querylink = mysqli_query($connect, "SELECT * FROM link where generate = '$url'") or die (mysqli_error());
if(mysqli_num_rows($querylink) == 0)
{
  echo "Url Tidak di temukan";
}
else {
  ?>
  <html>
  <head>
    <title>SafeLink</title>
  </head>
  <body>
    <?php
    while($r = mysqli_fetch_array($querylink)):?>
    <a href="<?php echo $r['link']; ?>"><h2>Download</h2></a>
    <?php
  endwhile;
}
$querycount = mysqli_query($connect, "SELECT count(id) as jumlah from post") or die (mysqli_error());
$jumlah = mysqli_fetch_array($querycount);
$rand = mt_rand(1,$jumlah['0']);
$querypost = mysqli_query($connect, "SELECT * FROM post where id = '$rand'") or die (mysqli_error());
while($r = mysqli_fetch_array($querypost)):
?>
  <h2><?php echo $r['judul'] ?></h2>
  <p><?php echo $r['isi'] ?></p?>
<?php
endwhile;
?>
</body>
</html>
