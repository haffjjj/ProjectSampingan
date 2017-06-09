<?php
include "db.php";
$url = $_GET['url'];
$query = mysqli_query($connect, "SELECT * FROM link where generate = '$url'") or die (mysqli_error());
if(mysqli_num_rows($query) == 0)
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
    while($r = mysqli_fetch_array($query)):?>
    <a href="<?php echo $r['url']; ?>"><h2>Download</h2></a>
    <?php
  endwhile;
}
?>
</body>
</html>
