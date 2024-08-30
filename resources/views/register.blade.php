@extends('layouts.login')

@section('title', 'Regsiter')

@section('content')

    <section class="login-sec position-relative overflow-hidden h-100">
        <em class="position-absolute top-0 end-0 start-0 bottom-0 z-1 d-block"></em>
        <video class="position-absolute top-0 end-0 start-0 bottom-0" width="100%" height="100%" autoplay loop muted>
            <source src="images/video.mp4" type="video/mp4">
            <source src="images/video.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
        <div class="position-relative z-2 h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-5 col-md-6 bg-black px-md-5 py-5 text-center h-100 d-flex align-items-center">
                    <div>
                        <img src="images/logo-footer.png" alt="Logo" class="img-fluid" />
                        <h1 class="text-white fs-2 my-4">Affiliate Registration</h1>
                        <hr class="opacity-50 my-4" />
                        <p class="text-white line-height-1-8">tart maximizing your affiliate earnings by working with the #1
                            voted CPA Netwrk.Simply fill out our affiliate application to the right to begin promoting
                            thousands of campaigns from our largest selection of brands ever!
                            Learn more at <a href="https://NetwrkQube.com"
                                class="text-white">NetwrkQube.com</a><br /><br />Increase your chances of approval. Read our
                            step-by-step application guide <a class="text-white" href="javascript:;">here</a>.</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 text-center px-md-5 py-5 h-100 d-flex align-items-center">
                    <div class="w-100 text-white px-lg-5" id="step1">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/logo-footer.png" alt="Logo" class="img-fluid" />
                                <div class="progress my-4" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%">
                                    </div>
                                </div>
                                <p>Do you already have an account with NetwrkQube?</p>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="login" class="btn btn-secondary w-100 btn-lg prev">YES</a>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg next">NO</a>
                            </div>
                        </div>
                        <br /><br />
                        <form>
                            <a href="login" class="d-block my-2 text-white">Don't have an account? Login Now</a>
                            <br /><br /><br />
                            <small class="text-white"><b>NetwrkQube</b>. All Rights Reserved 2024</small>
                        </form>
                    </div>

                    <div class="w-100 text-white px-lg-5" id="step2">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/logo-footer.png" alt="Logo" class="img-fluid" />
                                <div class="progress my-4" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="16" aria-valuemin="16" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 16%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <input type="text" class="form-control" placeholder="First Name" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <input type="text" class="form-control" placeholder="Last Name" />
                            </div>
                            <div class="col-sm-12 mt-4">
                                <input type="text" class="form-control" placeholder="Company Name" />
                            </div>
                            <div class="col-sm-12 mt-4">
                                <input type="text" class="form-control" placeholder="Email" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <input type="password" class="form-control" placeholder="Password" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <input type="password" class="form-control" placeholder="Re-Enter Password" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg prev">Back</a>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg next">Next</a>
                            </div>
                        </div>
                        <br /><br />
                        <form>
                            <a href="login" class="d-block my-2 text-white">Already have an account? Sign in now.</a>
                            <br /><br /><br />
                            <small class="text-white"><b>NetwrkQube</b>. All Rights Reserved 2024</small>
                        </form>
                    </div>

                    <div class="w-100 text-white px-lg-5" id="step3">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/logo-footer.png" alt="Logo" class="img-fluid" />
                                <div class="progress my-4" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="33" aria-valuemin="33" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 33%"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <input type="text" class="form-control" placeholder="Mobile Phone Number" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <input type="text" class="form-control" placeholder="Alternate Phone Number" />
                            </div>
                            <div class="col-sm-12 mt-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Your Time Zone</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>When can you be reached?</option>
                                    <option value="1">Anytime</option>
                                    <option value="2">Early Morning</option>
                                    <option value="3">Late Morning</option>
                                    <option value="4">Early Afternoon</option>
                                    <option value="5">Late Afternoon</option>
                                    <option value="6">Evening</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <input type="text" class="form-control" placeholder="What is Your Skye ID?" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg prev">Back</a>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg next">Next</a>
                            </div>
                        </div>
                        <br /><br />
                        <form>
                            <a href="login" class="d-block my-2 text-white">Already have an account? Sign in now.</a>
                            <br /><br /><br />
                            <small class="text-white"><b>NetwrkQube</b>. All Rights Reserved 2024</small>
                        </form>
                    </div>

                    <div class="w-100 text-white px-lg-5" id="step4">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/logo-footer.png" alt="Logo" class="img-fluid" />
                                <div class="progress my-4" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="49" aria-valuemin="49" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 49%"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <input type="text" class="form-control" placeholder="Street Address 1" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <input type="text" class="form-control" placeholder="Street Address 2" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <input type="text" class="form-control" placeholder="City" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <input type="text" class="form-control" placeholder="State / Province" />
                            </div>
                            <div class="col-sm-12 mt-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>North American State/Province</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Country</option>
                                    <option value="1">Anytime</option>
                                    <option value="2">Early Morning</option>
                                    <option value="3">Late Morning</option>
                                    <option value="4">Early Afternoon</option>
                                    <option value="5">Late Afternoon</option>
                                    <option value="6">Evening</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <input type="text" class="form-control" placeholder="Zip / Postal Code" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg prev">Back</a>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg next">Next</a>
                            </div>
                        </div>
                        <br /><br />
                        <form>
                            <a href="login" class="d-block my-2 text-white">Already have an account? Sign in now.</a>
                            <br /><br /><br />
                            <small class="text-white"><b>NetwrkQube</b>. All Rights Reserved 2024</small>
                        </form>
                    </div>

                    <div class="w-100 text-white px-lg-5" id="step5">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/logo-footer.png" alt="Logo" class="img-fluid" />
                                <div class="progress my-4" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="66" aria-valuemin="66" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 66%"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>How did you hear about us?</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>What is your experience?</option>
                                    <option value="1">Anytime</option>
                                    <option value="2">Early Morning</option>
                                    <option value="3">Late Morning</option>
                                    <option value="4">Early Afternoon</option>
                                    <option value="5">Late Afternoon</option>
                                    <option value="6">Evening</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <textarea rows="3" placeholder="Describe your past experience in affiliate marketing. (50-200 characters)"
                                    class="form-control"></textarea>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <textarea rows="3" placeholder="How do you intend to promote campaigns? (50-200 characters)"
                                    class="form-control"></textarea>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <input type="text" class="form-control" placeholder="Campaign name" />
                            </div>
                            <div class="col-sm-12 mt-4">
                                <input type="text" class="form-control" placeholder="Website URL" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg prev">Back</a>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg next">Next</a>
                            </div>
                        </div>
                        <br /><br />
                        <form>
                            <a href="login" class="d-block my-2 text-white">Already have an account? Sign in now.</a>
                            <br /><br /><br />
                            <small class="text-white"><b>NetwrkQube</b>. All Rights Reserved 2024</small>
                        </form>
                    </div>

                    <div class="w-100 text-white px-lg-5" id="step6">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/logo-footer.png" alt="Logo" class="img-fluid" />
                                <div class="progress my-4" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="83" aria-valuemin="83" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 83%"></div>
                                </div>
                                <p class="line-height-1-5">We require all of our affiliates to submit a piece of photo
                                    government identification. Please upload a photo of the front and back of a piece of
                                    identifcation stating your full name and address.</p>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <label class="text-start pb-3">Photo ID Front</label>
                                <input type="file" class="form-control" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <label class="text-start pb-3">Photo ID Back</label>
                                <input type="file" class="form-control" />
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg prev">Back</a>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg next">Next</a>
                            </div>
                        </div>
                        <br /><br />
                        <form>
                            <a href="login" class="d-block my-2 text-white">Already have an account? Sign in now.</a>
                            <br /><br /><br />
                            <small class="text-white"><b>NetwrkQube</b>. All Rights Reserved 2024</small>
                        </form>
                    </div>

                    <div class="w-100 text-white px-lg-5" id="step7">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/logo-footer.png" alt="Logo" class="img-fluid" />
                                <div class="progress my-4" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="100" aria-valuemin="100" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 100%"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <div class="form-check text-start">
                                    <input class="form-check-input" type="checkbox" id="check1" />
                                    <label class="form-check-label line-height-1-5" for="check1">Check this box if you
                                        agree that you will not share, trade, sell or otherwise transfer your account to a
                                        third party.</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <div class="form-check text-start">
                                    <input class="form-check-input" type="checkbox" id="check2" />
                                    <label class="form-check-label line-height-1-5" for="check2">Check this box if you
                                        agree that you will not use freelancers, microjob sites, or guaranteed lead services
                                        to send traffic to NetwrkQube.</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <div class="form-check text-start">
                                    <input class="form-check-input" type="checkbox" id="check3" />
                                    <label class="form-check-label line-height-1-5" for="check3">Check this box if you
                                        agree to NetwrkQube's affiliate <a href="terms">terms and
                                            conditions</a>.</label>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg prev">Back</a>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-primary w-100 btn-lg next">Submit</a>
                            </div>
                        </div>
                        <br /><br />
                        <form>
                            <a href="login" class="d-block my-2 text-white">Already have an account? Sign in now.</a>
                            <br /><br /><br />
                            <small class="text-white"><b>NetwrkQube</b>. All Rights Reserved 2024</small>
                        </form>
                    </div>

                    <div class="w-100 text-dark px-lg-5" id="step8">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/logo-footer.png" alt="Logo" class="img-fluid" />
                                <div class="progress my-4" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="100" aria-valuemin="100" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 100%"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <div class="bg-white rounded-2 p-4 text-start">
                                    <h3 class="fw-700 fs-4">Thank you for registering to NetwrkQube.</h3>
                                    <hr />
                                    <p>Here are the next steps in your application:</p>
                                    <br />
                                    <strong class="d-block py-2">Step 1: Confirm your application.</strong>
                                    <p class="line-height-1-8">Within a few minutes, you will receive an e-mail from
                                        affiliates@NetwrkQube.com. This e-mail will contain a link that you must click to
                                        confirm that you have applied for an account with NetwrkQube. If you do not receive
                                        this e-mail, please check your Junk/Spam folder.
                                        <br /><br />
                                        If you still have not received this e-mail within an hour, please contact us and let
                                        us know.
                                    </p>
                                    <hr />
                                    <strong class="d-block py-2">Step 2: Application Review.</strong>
                                    <p class="line-height-1-8">Your application will be reviewed by our compliance and
                                        affiliate management teams. If your application is appropriate, your will be
                                        contacted for a telephone interview.</p>
                                    <hr />
                                    <strong class="d-block py-2">Step 3: Phone Interview.</strong>
                                    <p class="line-height-1-8">All applicants must complete a telephone interview with a
                                        NetwrkQube affiliate manager. Instructions on how to reach an affiliate manager will
                                        be provided once you have confirmed your application.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-secondary w-100 btn-lg prev">Back</a>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <a href="javascript:;" class="btn btn-primary w-100 btn-lg next">Submit</a>
                            </div>
                        </div>
                        <br /><br />
                        <form>
                            <a href="login" class="d-block my-2 text-white">Already have an account? Sign in now.</a>
                            <br /><br /><br />
                            <small class="text-white"><b>NetwrkQube</b>. All Rights Reserved 2024</small>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#step1 .next").click(function() {
                $("#step1").hide();
                $("#step2").show();
            });
            $("#step2 .next").click(function() {
                $("#step2").hide();
                $("#step3").show();
            });
            $("#step2 .prev").click(function() {
                $("#step2").hide();
                $("#step1").show();
            });
            $("#step3 .next").click(function() {
                $("#step3").hide();
                $("#step4").show();
            });
            $("#step3 .prev").click(function() {
                $("#step3").hide();
                $("#step2").show();
            });
            $("#step4 .next").click(function() {
                $("#step4").hide();
                $("#step5").show();
            });
            $("#step4 .prev").click(function() {
                $("#step4").hide();
                $("#step3").show();
            });
            $("#step5 .next").click(function() {
                $("#step5").hide();
                $("#step6").show();
            });
            $("#step5 .prev").click(function() {
                $("#step5").hide();
                $("#step4").show();
            });
            $("#step6 .next").click(function() {
                $("#step6").hide();
                $("#step7").show();
            });
            $("#step6 .prev").click(function() {
                $("#step6").hide();
                $("#step5").show();
            });
            $("#step7 .next").click(function() {
                $("#step7").hide();
                $("#step8").show();
            });
            $("#step7 .prev").click(function() {
                $("#step7").hide();
                $("#step6").show();
            });
        });
    </script>
@endsection
