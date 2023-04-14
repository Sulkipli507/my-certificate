<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Certificate</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('file/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('file/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('file/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('file/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('file/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('file/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('file/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <section id="certificate" class="contact section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mt-5 mt-lg-0">
            <div class="section-title">
                <h2>My certificate</h2>
                <p>Masukkan kode unik untuk mendapatkan sertifikat</p>
            </div>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Kode unik" required>
              </div>
              <div class="text-center"><button type="submit">Check now</button></div>
            </form>

          </div>

          <div class="col-lg-7">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
                {{-- gambar --}}
            </div>
          </div>

        </div>

      </div>
    </section>

 
  <!-- Vendor JS Files -->
  <script src="{{ asset('file/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('file/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('file/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('file/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('file/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('file/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('file/js/main.js')}}"></script>

</body>

</html>