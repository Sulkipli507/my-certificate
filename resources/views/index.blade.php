<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>My Certificate</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('file/img/ngabuburit.jpeg')}}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="{{ asset('file/lib/flaticon/font/flaticon.css') }}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('file/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('file/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('file/css/style.css')}}" rel="stylesheet" />
  </head>

  <body>

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">My Certificate</span>
          </p>
          <h1 class="mb-4">Sertifikat ngabuburIT</h1>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5">
            <div class="contact-form">
              <div id="success"></div>
              <form action="{{ route('certificate-validate') }} " method="post">
                @csrf
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    id="number_certificate"
                    name="number_certificate"
                    placeholder=" Masukkan Nomor Unik Untuk Melihat Sertifikat"
                    required
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="text-center">
                  <button
                    class="btn btn-primary py-2 px-4"
                    type="submit">
                    Cek Sertifikat
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 mb-5">
            @if (isset($certificates))
              @foreach ($certificates as $item)
                <img class="certificate" src="{{asset('storage/' . $item->file)}}"/>
              @endforeach 
            @endif
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('file/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('file/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('file/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('file/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('file/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{ asset('file/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('file/js/main.js')}}"></script>
  </body>
</html>
