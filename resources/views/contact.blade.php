<!-- resources/views/home.blade.php -->
@extends('layouts.main')

@section('title', 'Contact')

@section('content')

    <section class="text-pages py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="h1 fw-700">Contact Us</h1>
                    <hr />
                    <p>Drop us your concerns with one click.</p>
                </div>
                <div class="col-md-4 mt-4">
                    <input type="text" class="form-control" placeholder="Full Name" />
                </div>
                <div class="col-md-4 mt-4">
                    <input type="text" class="form-control" placeholder="Email" />
                </div>
                <div class="col-md-4 mt-4">
                    <input type="text" class="form-control" placeholder="Phone Number" />
                </div>
                <div class="col-md-12 mt-4">
                    <textarea class="form-control" rows="8" placeholder="Write us your message"></textarea>
                </div>
                <div class="col-md-12 mt-4">
                    <button name="button" class="btn btn-primary btn-lg px-5" type="button">SUBMIT</button>
                </div>
            </div>
        </div>
    </section>

    <section class="lets-work py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-uppercase fw-600 fs-44 mb-5">LET’S WORK TOGETHER</h2>
                    <p class="fs-22 line-height-1-5">We've been shaping this industry since 2019, and we know what makes
                        performance marketing strategies successful through first-hand experience.</p>
                    <a href="javascript:;" class="btn btn-primary px-5 py-3 mt-4 fw-700 fs-16 text-white w-75">Advertise
                        with NetwrkQube</a>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fs-20 fw-700">Come meet us</h2>
                    <em class="line d-block my-2"></em>
                    <div class="d-flex gap-3 mt-5 align-items-start">
                        <img src="images/aw.png" alt="AW" />
                        <p class="line-height-1-5">
                            <b>Las Vegas 2024</b><br />
                            Las Vegas, Nevada<br />April 8-10
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
