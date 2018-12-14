<?php
require ("koneksi.php");

function getUserData($id){
    $q=mysql_query("SELECT * FROM 'data_user' WHERE  'id='.$id' ");
    while ($r=mysql_fetch_assoc($q))
    {

        $array['id']=$row['id'];
         $array['nama_user']=$row['nama_user'];
          $array['username']=$row['username'];
           $array['email']=$row['email'];
            $array['password']=$row[''];
             $array['umur']=$row['id'];
              $array['gender']=$row['id'];
               $array['telepon']=$row['id'];
                $array['alamat']=$row['id'];

    }
}
?>