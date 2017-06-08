<?php
if (isset($_POST['max']))
{
  if (($_POST['min'] == "") OR ($_POST['max'] == "")) {
    echo "Isi Valuenya Bang";
    $min = "";
    $max = "";
    $random = 0;
  }
  else {
    $min = $_POST['min'];
    $max = $_POST['max'];
    $random = rand($min,$max);
  }
}
else
{
  $min = "";
  $max = "";
  $random = 0;
}
?>
<html>
<head>
  <title>Generate</title>
</head>
<body>
<form method="POST" action="">
<p>Min</p>
<input type="text" value="<?php echo $min ?>" name="min">
<p>Max</p>
<input type="text" value="<?php echo $max ?>" name="max">
<input type="submit" value="generate">
</form>
<p>Random Number :<b> <?php echo $random; ?></b></p>
</body>
<html>
