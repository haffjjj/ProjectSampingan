<?php
class laptop
{
  public static $harga;
  public static function belicom()
  {
    return "Beli komputer dengan harga".self::$harga;
  }
}

laptop::$harga = 1000000;
echo laptop::belicom();

 ?>
