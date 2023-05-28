<?php
    require 'functions.php';
    $id = $_GET['id_buku'];
    if(hapusDaftar($id) > 0 ){
        echo "
           <script>
               alert ('data berhasil dihapus');
               document.location.href='buku.php';
           </script> ";
   } else {
       echo "
           <script>
               alert ('data gagal dihapus');
               document.location.href='buku.php';
           </script> ";
   }

?>