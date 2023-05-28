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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

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
                              </div>
                              </ul>
                           </div>
                                 <?php
                                    require 'functions.php';
                                    $jenis = query("SELECT * FROM jenis_buku");
                              ?>
                              <div class="container" style="margin-top: 120px;">
                                 <h3 class="font-weight-bold text-white d-flex justify-content-center">Kategori jenis buku</h3>
                                 <a class="btn btn-info mb-5 font-weight-sm" href="tambah_jenis.php">Tambah jenis buku</a>
                                    <table class="display " id="myTable">
                                       <thead>
                                             <tr>
                                                <th class="text-white">Nomor</th>
                                                <th class="text-white">Id jenis buku</th>
                                                <th class="text-white">Jenis buku</th>
                                                <th class="text-white">Aksi</th>
                                             </tr>
                                       </thead>
                                          <tr>
                                                   <?php $i =1; ?>
                                                   <?php foreach($jenis as $kategori) : ?>
                                                      <td><?= $i; ?></td>
                                                      <td><?= $kategori["id_jenis_buku"];?></td>
                                                      <td><?= $kategori["jenis_buku"]; ?></td>
                                                      <td>
                                                         <a class="btn btn-primary" href="edit_jenis.php?id_jenis_buku=<?= $kategori['id_jenis_buku']; ?>">Edit</a>
                                                         <a class="btn btn-danger" href="hapus_jenis.php?id_jenis_buku=<?= $kategori['id_jenis_buku']; ?>" onclick=" return confirm('Yakin akan dihapus?');">Hapus</a>
                                                      </td>
                                          </tr>
                                                   <?php $i++; ?>
                                                   <?php endforeach; ?>
                                    </table>
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
                              
            <script>
               $(document).ready(function () {
                  $('#myTable').DataTable();
               });
            </script>



</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>