<?php
require 'functions.php';
    $id_jenis_buku = $_GET['id_jenis_buku'];
    $jenis_buku = query("SELECT * FROM jenis_buku WHERE id_jenis_buku = '$id_jenis_buku'")[0];
   if(isset($_POST["submit"])){
      if(editJenis($_POST)>0 ){
         echo "
            <script>
                alert ('data berhasil diedit');
                document.location.href='jenis_buku.php';
            </script> ";
    } else {
        echo "
            <script>
                alert ('data gagal diedit');
                document.location.href='jenis_buku.php';
            </script> ";
    }
      }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jenis buku</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</head>
<body>
   <div id="content">
         <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="images/books.jpg" alt="#" width="50px"/></a>
                                 <h3 class="font-weight-bold mt-2 text-light">BooksEdu</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                           <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                              <ul class="btn">
                                 <div class="dropdown">
                                    <button class="down_btn" type="button" data-toggle="dropdown" aria-expanded="false">
                                    Master data
                                    </button>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="jenis_buku.php">Jenis buku</a>
                                       <a class="dropdown-item" href="buku.php">Buku</a>
                                       <a class="dropdown-item" href="penerbit.php">Penerbit</a>
                                    </div>
                                 <li><a href="index.php">Home</a></li>
                                 </li>
                              </div>
                              </ul>
                           </div>
                           <div class="container" style="margin-top: 140px;">
                           <h3 class="font-weight bold text-white d-flex justify-content-center">Input jenis buku</h3>
                              <form action="" method="POST">
                                <input type="hidden" name="id_jenis_buku" value="<?= $jenis_buku['id_jenis_buku']; ?>" id="id_jenis_buku">
                                 <div class="mb-3">
                                    <label for="id_jenis_buku" class="form-label text-white">Id jenis Buku</label>
                                    <input type="text" class="form-control mb-4" name="id_jenis_buku" id="d_jenis_buku" value="<?= $jenis_buku ['id_jenis_buku']; ?>" aria-describedby="id jenis buku..">
                                 </div>
                                 <div class="mb-3">
                                    <label for="jenis_buku" class="form-label text-white">Jenis Buku</label>
                                    <input type="text" class="form-control mb-4" name="jenis_buku" value="<?= $jenis_buku['jenis_buku']; ?>" id="jenis_buku">
                                 </div>
                                 <button  class="btn btn-primary mb-4" name="submit">Kirim</button>
                              </form>
                        </div>
                  </div>
            </div>
       </div>
            <div style="background: #0192c8; margin-bottom: -1px;" class="card text-center">
                 <div class="card-footer text-body-secondary">
                    <p class="text-white">Copyright 2023 All Right Reserved By <a class="text-white" href="https://www.instagram.com/nhyrifky/">Rifky Nurhidayat</a></p>
                  </div>
            </div>     
   </div>
    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>