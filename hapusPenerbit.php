<?php
    require 'functions.php';
    $id = $_GET['id_penerbit'];
    if(hapusPenerbit($id) > 0 ){
        echo "
           <script>
               alert ('data berhasil dihapus');
               document.location.href='penerbit.php';
           </script> ";
   } else {
       echo "
           <script>
               alert ('data gagal dihapus');
               document.location.href='penerbit.php';
           </script> ";
   }

?>