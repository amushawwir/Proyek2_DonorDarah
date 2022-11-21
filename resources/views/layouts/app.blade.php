<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
            var propertiPeta = {
                center: new google.maps.LatLng(-7.924610, 112.638294),
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <title>Home</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/LogoKemendag.png" alt="..." height="60">
            </a>
            <p style="padding-top: 12px; color:white">
                Dinas Kependudukan dan Pencatatan Sipil
                <br>Kementrian dalam Negeri Indonesia
            </p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="text-white nav-link active" style="font-size: small;" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" style="font-size: small;" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" style="font-size: small;" href="#">PENGAJUAN KTP</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" style="font-size: small;" href="#">PROFILE</a>
                    </li>
                    <li class="nav-item" style="margin-left: 50px;">
                        <button type="submit" class="btn btn-danger" style="border-radius: 15px; font-size: small;">Login/Logout</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Running -->
    <div class="px-2" style="background-color: #8AC7FF; margin-top: 10px; font-size: small;">
        <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10" behavior="scroll">
            RUNNING TEXT RUNNING TEXT RUNNING TEXT RUNNING TEXT RUNNING TEXT RUNNING TEXT
        </marquee>
    </div>
    <br>
    <!-- Content -->
    <div class="container">
        <div class="d-flex justify-content-center">
            <a class="navbar-brand" href="#">
                <img class="animate__animated animate__fadeInUp" src="images/HeadlineHome.png" alt="..." height="500">
            </a>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h5 class="card-title" style="font-weight: bolder;">BERITA TERBARU</h5>
                <hr style="border: 2px solid black; width: 70px; opacity: 25%;" align="left">
            </div>
            <div class="col-md-4">

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card flex-row"><img class="card-img-left example-card-img-responsive" src="images/BeritaTerbaru1.jpg" width="125" height="75" />
                    <div class="card-body" style="width: 50rem;">
                        <p class="card-text" style="font-size:65%;">Sukseskan 7 Program Strategis Nasional Adminduk, Kemendagri Moratorium Penggantian Kadis Dukcapil</p>
                    </div>
                </div>
                <br>
                <div class="card flex-row"><img class="card-img-left example-card-img-responsive" src="images/BeritaTerbaru2.jpg" wwidth="125" height="75" />
                    <div class="card-body" style="width: 50rem;">
                        <p class="card-text" style="font-size:65%;">Layani Penyandang Disabilitas, Disdukcapil Kota Depok Jemput Bola di 12 SLB </p>
                    </div>
                </div>
            </div>

            <div class=" col-md-4 ">
                <div class="card flex-row "><img class="card-img-left example-card-img-responsive " src="images/BeritaTerbaru3.jpg " width="125 " height="75 " />
                    <div class="card-body " style="width: 50rem; ">
                        <p class="card-text " style="font-size:65%; ">Seluruh Siswa/i SLB se-Kota Denpasar Berhasil 100 Persen Didata Dukcapil Kota Denpasar </p>
                    </div>
                </div>
                <br>
                <div class="card flex-row "><img class="card-img-left example-card-img-responsive " src="images/BeritaTerbaru4.jpg " width="125 " height="75 " />
                    <div class="card-body " style="width: 50rem; ">
                        <p class="card-text " style="font-size:65%; ">Perubahan Nama? Simak Cara Mengurusnya </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <div class="container">
        <div class="row gx-4 justify-content-center">

            <div class="col-lg-4 col-md-12">
                <div class="col-md-12">
                    <h5 class="card-title" style="font-weight: bolder;">GALERI</h5>
                    <hr style="border: 2px solid black; width: 70px; opacity: 25%;" align="left">
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="col-sm-4">
                    <h5 class="card-title" style="font-weight: bolder;">ARTIKEL</h5>
                    <hr style="border: 2px solid black; width: 70px; opacity: 25%;" align="left">
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="col-md-4">
                    <h5 class="card-title" style="font-weight: bolder;">VIDEO</h5>
                    <hr style="border: 2px solid black; width: 70px; opacity: 25%;" align="left">
                </div>
            </div>

        </div>

        <div class="row gx-4 justify-content-center">

            <div class="col-lg-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/GaleriCarousel1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/GaleriCarousel2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/GaleriCarousel3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="container-fluid">
                    <img class="card-img-left example-card-img-responsive " src="images//ArtikelCallCenter.jpg" width="325" height="250" />
                </div>
            </div>
            <div class="col-lg-4">
                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="332.5" height="250" type="text/html" src="https://www.youtube.com/embed/KLPxxWP7s1o?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"><div><small><a href="https://youtubeembedcode.com/es/">youtubeembedcode.com/es/</a></small></div><div><small><a href="https://sverigescasinosida.com/">https://sverigescasinosida.com/</a></small></div></iframe>
            </div>

        </div>

    </div>
    <!-- Footer -->
    <div class="my-5">
        <footer class="text-center text-lg-start text-white" style="background-color: #039AC9; position: absolute; width: 100%;">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <img src="images/Dukcapil.png" alt="..." height="70">
                            <p style="font-size: small; text-align: left; padding-top: 20px;">
                                Perumahan Cakalang Indah 1 No 269K
                                <br> Kota Malang, 65124 <br> Phone : <br> Fax : <br> Email : dukcapil@gmail.com
                            </p>
                        </div>

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column Maps -->
                        <div class="col-lg g-min-height-400">
                            <div id="googleMap" style="width:100%;height:200px;"></div>
                        </div>

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold" style="font-size: 15px;">KUNJUNGI KAMI DI :</h6>

                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i
                ></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i
                ></a>

                            <!-- Twitter -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i
                ></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i
                ></a>

                        </div>
                    </div>
                </section>
            </div>
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © Copyright Direktorat Jenderal Kependudukan dan Pencatatan Sipil - 2022
            </div>
        </footer>
    </div>

</body>

</html>