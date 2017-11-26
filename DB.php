<?php
class DB {

  var $server='localhost';
  var $user='root';
  var $pwd='123';
  var $dbname='dbd2';


  function open()
  {
     $con=mysqli_connect($this->server,$this->user,$this->pwd,$this->dbname)
     or die ('Gagal koneksi ke server '.$this->server);
     return $con;
  }




  function getData($conn,$sql)
  {
     $res=array();
     $rs=mysqli_query($conn,$sql);

     while($rec=mysqli_fetch_assoc($rs)){
         $res[]=$rec;
     }

     return $res;
  }
}


 ?>
