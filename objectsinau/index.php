<?php
// buat abstract class
abstract class komputer{
   // buat abstract method
   abstract public function booting_os();
}

class laptop extends komputer{
   public function booting_os(){
     return "Proses Booting Sistem Operasi Laptop";
   }
}

class pc extends komputer{
   public function booting_os(){
     return "Proses Booting Sistem Operasi PC";
   }
}

class chromebook extends komputer{
public function booting_os(){
     return "Proses Booting Sistem Operasi Chromebook";
   }
}


// buat objek dari class diatas
$laptop_baru = new laptop();
$pc_baru = new pc();
$chromebook_baru = new chromebook();

// buat fungsi untuk memproses objek
function booting_os_komputer($objek_komputer){
   return $objek_komputer->booting_os();
}

// jalankan fungsi
echo booting_os_komputer($laptop_baru);
echo "<br />";
echo booting_os_komputer($pc_baru);
echo "<br />";
echo booting_os_komputer($chromebook_baru);
 ?>
