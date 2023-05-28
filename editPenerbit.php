<?php
   require 'functions.php';
   $id_penerbit = $_GET['id_penerbit'];
   $penerbit = query("SELECT * FROM penerbit WHERE id_penerbit = '$id_penerbit'")[0];
   if(isset($_POST['submit'])){
      if(editPenerbit($_POST)> 0){
         echo "
         <script>
             alert ('data berhasil diedit');
             document.location.href='penerbit.php';
         </script> ";
 } else {
     echo "
         <script>
             alert ('data gagal diedit');
             document.location.href='penerbit.php';
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
    <title>Edit penerbit</title>
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
                        <div class="container" style="margin-top: 105px;">
                           <h3 class="font-weight-bold text-white d-flex justify-content-center">Edit data Penerbit</h3>
                           <form action="" method="POST">
                            <input type="hidden" name="id_penerbit" value="<?=$penerbit['id_penerbit']; ?>">
                              <div class="form-group">
                                 <label for="id_penerbit" class="text-white">Id Penerbit</label>
                                 <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" value="<?=$penerbit['id_penerbit']; ?>" placeholder="Id penerbit">
                              </div>
                              <div class="form-group">
                                 <label for="nama_penerbit"  class="text-white">Nama Penerbit</label>
                                 <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="<?=$penerbit['nama_penerbit']; ?>" placeholder="Nama penerbit">
                              </div>
                              <div class="form-group">
                                 <label for="email"  class="text-white">Email</label>
                                 <input type="text" class="form-control" id="email" name="email" value="<?=$penerbit ['email']; ?>" placeholder="Email">
                              </div>
                              <div class="form-group">
                                 <label for="alamat"  class="text-white">Alamat</label>
                                 <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$penerbit ['alamat'];?>" placeholder="Alamat">
                              </div>
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                           </form>
                        </div>
         </div>
       </div>               
      </div>
         <div class="card text-center" style="background:#0192c8;">
                     <div class="card-footer text-body-secondary">
                           <p class="text-white">Copyright 2023 All Right Reserved By <a class="text-white" href="https://www.instagram.com/nhyrifky/">Rifky Nurhidayat</a></p>
                     </div>
         </div>    
    </div>
    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>