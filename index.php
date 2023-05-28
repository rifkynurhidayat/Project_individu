<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>perpustakaan</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <div class="wrapper">
      <div class="sidebar">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div id="dismiss">
               <i class="fa fa-arrow-left"></i>
            </div>
            <ul class="list-unstyled components">
               <li class="active"> <a href="#">Home</a> </li>
               <li><a href="#about">About </a> </li>
               <li><a href="#contact">Contact </a> </li>
            </ul>
         </nav>
      </div>
      <div id="content">
         <!-- header -->
         <header>
            <!-- header inner -->
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
                           <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                           <li><button type="button" id="sidebarCollapse">
                              <img src="images/menu_icon.png" alt="#" />
                              </button>
                           </li>
                        </div>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                              <div class="text-bg">
                                 <h1>Reading<br> is a window <br> to the world</h1>
                                 <p class="p-2 text-justify ">
                                    Selamat datang di web perpustakaan spesifik kami! Kami adalah perpustakaan online yang didedikasikan untuk mengumpulkan dan menyimpan data jenis buku dari berbagai kategori. Fokus utama kami adalah memastikan pengguna dapat dengan mudah memasukkan data buku ke dalam sistem kami. </p>
                                 <a class="read_more mt-3" href="#">Read more</a>
                              </div>
                           </div>
                           <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                              <div class="images_box">
                                 <figure><img src="images/img2.png"></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid ">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                              <div class="text-bg">
                                 <h1>Reading<br> is a window <br> to the world</h1>
                                 <p class="p-2 text-justify">
                                    Selamat datang di web perpustakaan spesifik kami! Kami adalah perpustakaan online yang didedikasikan untuk mengumpulkan dan menyimpan data jenis buku dari berbagai kategori. Fokus utama kami adalah memastikan pengguna dapat dengan mudah memasukkan data buku ke dalam sistem kami. </p>
                                 <a class="read_more mt-3" href="#">Read more</a>
                              </div>
                           </div>
                           <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                              <div class="images_box">
                                 <figure><img src="images/img2.png"></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption ">
                        <div class="row">
                           <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                              <div class="text-bg">
                                 <h1>Reading<br> is a window <br> to the world</h1>
                                 <p class="p-2 text-justify">
                                    Selamat datang di web perpustakaan spesifik kami! Kami adalah perpustakaan online yang didedikasikan untuk mengumpulkan dan menyimpan data jenis buku dari berbagai kategori. Fokus utama kami adalah memastikan pengguna dapat dengan mudah memasukkan data buku ke dalam sistem kami. </p>
                                 <a class="read_more mt-3" href="#">Read more</a>
                              </div>
                           </div>
                           <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                              <div class="images_box">
                                 <figure><img src="images/img2.png"></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
         <!-- end banner -->
         <!-- about -->
         <div id="about"  class="about">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class="col-md-5">
                     <div class="about_img">
                        <figure><img src="images/books.jpg" alt="#"/></figure>
                     </div>
                  </div>
                  <div class="col-md-7">
                     <div class="titlepage">
                        <h2 class="font-weight-normal">About</h2>
                        <p>Pada web perpustakaan kami adalah halaman yang dirancang khusus untuk memberikan informasi tentang perpustakaan kami, tujuan, visi, misi, dan nilai-nilai yang kami pegang. Halaman ini bertujuan untuk memberikan gambaran yang jelas tentang identitas dan komitmen kami terhadap layanan yang kami sediakan. </p>
                        <a class="read_more">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end about -->
        
         <!-- request -->
         <div id="contact" class="request">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2><span class="white">Contact</span></h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <form id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Full Name" type="type" name="Full Name"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Email" type="type" name="Email"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                           </div>
                           <div class="col-md-12">
                              <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                           </div>
                           <div class="col-md-12">
                              <button class="send_btn">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div id="map"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end request -->
         <!--  footer -->
         <footer>
            <div class="footer">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-8 col-sm-6">
                              <div class="address">
                                 <h3>Address </h3>
                              </div>
                              <ul class="location_icon">
                                 <li>Kota Kuningan Kecamatan Jalaksana Kabupaten Kuningan Provinsi Jawa Barat Kode Pos 45554 </li>
                              </ul>
                           </div>
                           <div class="col-md-4 col-sm-6">
                              <div class="address">
                                 <h3>Links</h3>
                                 <ul class="Menu_footer">
                                    <li class="active"> <a href="#">Home</a> </li>
                                    <li><a href="#about">About </a> </li>
                                    <li><a href="#contact">Contact </a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-5 col-sm-6">
                              <div class="address">
                                 <h3>Follow Us</h3>
                              </div>
                              <ul class="social_icon">
                                 <li><a href="#">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Twitter<i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Linkedin<i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Youtube<i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Instagram<i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                           <div class="col-md-7 col-sm-6">
                              <div class="address">
                                 <h3>Newsletter </h3>
                              </div>
                              <form class="bottom_form">
                                 <input class="enter" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                                 <button class="sub_btn">Send</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <p>Copyright 2023 All Right Reserved By <a href="https://www.instagram.com/nhyrifky/">Rifky Nurhidayat</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
      <script>
         $(document).ready(function() {
             $(".fancybox").fancybox({
                 openEffect: "none",
                 closeEffect: "none"
             });
         
             $(".zoom").hover(function() {
         
                 $(this).addClass('transition');
             }, function() {
         
                 $(this).removeClass('transition');
             });
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {
               lat: 40.645037,
               lng: -73.880224
             },
           });
         
           var image = 'images/maps-and-flags.png';
           var beachMarker = new google.maps.Marker({
             position: {
               lat: 40.645037,
               lng: -73.880224
             },
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>

