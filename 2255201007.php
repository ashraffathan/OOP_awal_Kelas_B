<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_kuliah;
  private $Dosen_killer;
  private $Cita_cita;
  
   function __construct($Nama, $NIM, $Mata_kuliah, $Dosen_killer, $Cita_cita){
    $this->Nama = $Nama;
    $this->NIM = $NIM;
	$this->Mata_kuliah = $Mata_kuliah;
    $this->Dosen_killer = $Dosen_killer;
	$this->Cita_cita = $Cita_cita;
   }  

  // Methods
  function get_Nama() {
    return $this->Nama;
  }
 
  function get_NIM() {
    return $this->NIM;
  }
  
  function get_Mata_kuliah() {
    return $this->Mata_kuliah;
  }
 
  function get_Dosen_killer() {
    return $this->Dosen_killer;
  }
  
   function get_Cita_cita() {
    return $this->Cita_cita;
  }
}

$nata = new Mahasiswa("nata", "2255201007", "pbo", "pak arif", "sawit10H" );

echo $nata->get_Nama();
echo "<br>";
echo $nata->get_NIM();
echo "<br>";
echo $nata->get_Mata_kuliah();
echo "<br>";
echo $nata->get_Dosen_killer();
echo "<br>";
echo $nata->get_Cita_cita();
?> 
  
</body>
</html>
