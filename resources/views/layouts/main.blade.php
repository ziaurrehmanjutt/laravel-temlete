<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white border-bottom fixed-top">
        <div class="container">
          <a class="navbar-brand my-1" href="index"><img src="images/logo.png" alt="Logo" class="img-fluid" width="150" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index"><strong>—</strong> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index"><strong>—</strong> Advertisers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="publishers"><strong>—</strong> Publishers</a>
              </li>
              <li class="nav-item overflow-hidden rounded-1">
                <a href="login" class="btn btn-outline-primary px-4 py-2 fw-700"> &nbsp; <span> Login </span> &nbsp; </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-black pt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 col-md-9 p-0">
                    <div class="row align-items-start d-flex">
                        <div class="col-md-4">
                            <a href="index"><img src="images/logo-footer.png" alt="Logo Fotoer"
                                    class="img-fluid" /></a>
                        </div>
                        <div class="col-md-4">
                            <strong class="text-light fs-20 fw-700 opacity-50">Information</strong>
                            <div class="clearfix"></div><br />
                            <a href="privacy"
                                class="text-decoration-none fs-20 text-light fw-500 py-2 d-block opacity-50">Privacy</a>
                            <div class="clearfix"></div>
                            <a href="terms"
                                class="text-decoration-none fs-20 text-light fw-500 py-2 d-block opacity-50">Terms</a>
                            <div class="clearfix"></div>
                            <a href="contact"
                                class="text-decoration-none fs-20 text-light fw-500 py-2 d-block opacity-50">Contact</a>
                            <div class="clearfix"></div>
                            <div class="d-flex gap-3 mt-4">
                                <a href="javascript:;"
                                    class="text-decoration-none fs-20 text-light fw-500 py-2 d-block"><img
                                        src="images/footer-icon1.svg" alt="Social Icons" /></a>
                                <a href="javascript:;"
                                    class="text-decoration-none fs-20 text-light fw-500 py-2 d-block"><img
                                        src="images/footer-icon2.svg" alt="Social Icons" /></a>
                                <a href="javascript:;"
                                    class="text-decoration-none fs-20 text-light fw-500 py-2 d-block"><img
                                        src="images/footer-icon3.svg" alt="Social Icons" /></a>
                                <a href="javascript:;"
                                    class="text-decoration-none fs-20 text-light fw-500 py-2 d-block"><img
                                        src="images/footer-icon4.svg" alt="Social Icons" /></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <strong class="text-light fs-20 fw-700 opacity-50">Company</strong>
                            <div class="clearfix"></div><br />
                            <a href="about"
                                class="text-decoration-none fs-20 text-light fw-500 py-2 d-block opacity-50">About</a>
                            <div class="clearfix"></div>
                            <a href="careers"
                                class="text-decoration-none fs-20 text-light fw-500 py-2 d-block opacity-50">Careers</a>
                            <div class="clearfix"></div>
                            <a href="faq"
                                class="text-decoration-none fs-20 text-light fw-500 py-2 d-block opacity-50">FAQ</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3">
                    <strong
                        class="py-4 px-3 text-white fw-bold rounded-1 bg-primary fw-600 fs-24 position-relative float-end">Are
                        you a data vendor? <em></em></strong>
                </div>
            </div>
        </div>
        <br />
        <div class="copy py-4 mt-5">
            <div class="container">
                <p class="fs-18 fw-500 text-light opacity-50">&copy;NetwrkQube. 2023, All Rights Reserved. NetwrkQube.,
                    5924 Sheridan St Unit #2111 Hollywood, FL 33021, United States </p>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    @yield('scripts')
</body>

</html>
