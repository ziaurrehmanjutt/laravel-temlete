@extends('layouts.login')

@section('title', 'Forgot Password')

@section('content')

    <section class="login-sec position-relative overflow-hidden h-100">
        <em class="position-absolute top-0 end-0 start-0 bottom-0 z-1 d-block"></em>
        <video class="position-absolute top-0 end-0 start-0 bottom-0" width="100%" height="100%" autoplay loop muted>
            <source src="images/video.mp4" type="video/mp4">
            <source src="images/video.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
        <div class="container position-relative z-2 h-100 py-5">
            <div class="row align-items-center h-100">
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8 text-center">
                    <img src="images/logo-footer.png" alt="Logo" class="img-fluid" />
                    <h4 class="text-white py-3">Enter your e-mail here and we will provide instructions on how to reset your
                        password.</h4>
                    <form>
                        <input type="text" name="text" class="form-control form-control-lg my-4"
                            placeholder="Email address" />
                        <button name="button" type="button" class="btn btn-primary btn-block w-100 btn-lg">Submit</button>
                        <br /><br />
                        <a href="login" class="d-block my-2 text-white">Back to Login</a>
                        <br /><br /><br />
                        <small class="text-white"><b>NetwrkQube</b>. All Rights Reserved 2024</small>
                    </form>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
    </section>

@endsection
