<?php
    require 'functions.php';
    $id = $_GET['id_jenis_buku'];
    if(hapusJenis($id) > 0 ){
        echo "
           <script>
               alert ('data berhasil dihapus');
               document.location.href='jenis_buku.php';
           </script> ";
   } else {
       echo "
           <script>
               alert ('data gagal dihapus');
               document.location.href='jenis_buku.php';
           </script> ";
   }

?>