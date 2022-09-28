<?php
 class keuangan_penggajian{
    public $gaji = "1.000.000";
    public $karyawan = "Daffa";
    public $manager = "Mujib";

    public function __construct(){
        echo "ini berasal dari construct keuangan_penggajian";
    }
    public function sistem_penggajian(){
        echo "Gaji perbulan $this->gaji dari $this->manager untuk $this->karyawan";
    }
    public function __destruct(){
        echo "ini berasal dari destruct keuangan_penggajian" ;
    }
   
 }
    $sistem_keuangan = new keuangan_penggajian();
    echo "<br/>";
    echo $sistem_keuangan ->sistem_penggajian();
    echo "<br/>";
    ?>