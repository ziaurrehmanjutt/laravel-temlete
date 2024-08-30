<!-- resources/views/home.blade.php -->
@extends('layouts.main')

@section('title', 'About')

@section('content')



    <section class="video-sec position-relative overflow-hidden">
        <em class="position-absolute top-0 end-0 start-0 bottom-0 z-1 d-block"></em>
        <video class="position-absolute top-0 end-0 start-0 bottom-0" width="100%" height="600" autoplay loop muted>
            <source src="images/video.mp4" type="video/mp4">
            <source src="images/video.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
        <div class="container position-relative z-2">
            <div class="row pt-lg-5">
                <div class="col-12 text-center">
                    <img src="images/logo-footer.png" alt="Logo" class="mt-1 mb-4" />
                    <h1 class="text-white fw-700 fs-42 pt-3 mb-4 px-lg-5 line-height-1-5">We anticipate, <u
                            class="fw-500 text-uppercase">evolve</u>, and think one step ahead of the industry, ensuring
                        that those who work with us do the same. </h1>
                    <a href="javascript:;" class="btn btn-primary px-5 py-3 mt-5 fw-700 fs-16 text-white">Join Our Team</a>
                    <br />
                </div>
            </div>
        </div>
    </section>

    <section class="tw-boxes">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 p-0">
                    <div class="row d-flex align-items-stretch">
                        <div class="col-lg-5 col-md-6">
                            <div class="bg-white rounded-2 p-4 shadow-sm h-100">
                                <h2 class="fs-20 fw-700">WHAT WE ARE</h2>
                                <em class="line d-block my-2"></em>
                                <p class="text-seondary line-height-1-5 pt-2 d-block">is a world-leading performance-based
                                    CPA (cost-per-action) Netwrk that specializes in maximizing the ROI of both advertisers
                                    and affiliates.</p>
                            </div>
                        </div>
                        <div class="col-lg-2 hide-md"></div>
                        <div class="col-lg-5 col-md-6">
                            <div class="bg-white rounded-2 p-4 shadow-sm h-100">
                                <h2 class="fs-20 fw-700">WHAT WE BELIEVE IN</h2>
                                <em class="line d-block my-2"></em>
                                <p class="text-seondary line-height-1-5 pt-2 d-block">is providing you the best service
                                    possible by creating a seamless, global online marketing experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>

    <section class="d-md-flex align-items-center py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3 col-md-4 mt-4">
                    <img src="images/logo.png" alt="Logo" class="img-fluid" />
                </div>
                <div class="col-lg-9 col-md-8 ps-md-5 mt-4">
                    <i class="fas fa-quote-left fa-2x bg-primary p-3 mb-4 shadow-sm rounded-circle text-white"></i>
                    <p class="text-seondary line-height-1-8 pt-2 d-block fs-18"><i>"<b>As an originator</b>, we've not only
                            adapted to performance marketing's continual evolution, we've influenced its direction. We also
                            know that experience means nothing if it's not accompanied by present day proficiency. That's
                            why we remain dedicated to developing and perfecting our Netwrk's features on a
                            daily-basis."</i></p>
                </div>
            </div>
        </div>
    </section>

    <section class="teams-sec py-5 bg-white">
        <div class="container py-4">
            <div class="row">
                <div class="col-12 mb-4 text-center">
                    <h2 class="text-uppercase fw-600 fs-44 px-5 bg-white d-inline-block position-relative z-1">Meet our
                        Industry Experts</h2>
                    <hr class="border-bottom border-2 two" />
                </div>
            </div>
            <div class="row d-flex align-items-stretch">
                <div class="col-lg-2"></div>
                <div class="col-lg-4 col-md-6 mt-5 px-lg-4">
                    <div class="bg-light rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">
                        <img src="images/team1.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />
                        <div class="clearfix"></div>
                        <span class="fs-20 fw-400 line-height-2">Carlos Herrera</span>
                        <div class="clearfix"></div>
                        <h3 class="fs-24 fw-400 line-height-1-8">Co - Founder</h3>
                        <p class="fs-16 fw-400 line-height-1-5 py-3">Carlos has over 9 years of experience in helping
                            entrepreneurs scale through performance marketing and small business owners across the country.
                        </p>
                        <br />
                        <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i
                                class="fab fa-linkedin"></i></a>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 px-lg-4">
                    <div class="bg-light rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">
                        <img src="images/team2.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />
                        <div class="clearfix"></div>
                        <span class="fs-20 fw-400 line-height-2">Stlendy Jean-Charles</span>
                        <div class="clearfix"></div>
                        <h3 class="fs-24 fw-400 line-height-1-8">Co - Founder</h3>
                        <p class="fs-16 fw-400 line-height-1-5 py-3">Stlendy Jean-Charles, a seasoned executive with over 13
                            years of leadership in the BPO industry as the CO Founder, consistently driving growth and
                            innovation.</p>
                        <br />
                        <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i
                                class="fab fa-linkedin"></i></a>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row d-flexalign-items-stretch">
                <div class="col-lg-4 col-md-6 mt-5 px-lg-4">
                    <div class="bg-light rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">
                        <img src="images/team3.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />
                        <div class="clearfix"></div>
                        <span class="fs-20 fw-400 line-height-2">Amanda L</span>
                        <div class="clearfix"></div>
                        <h3 class="fs-24 fw-400 line-height-1-8">Co - Founder</h3>
                        <p class="fs-16 fw-400 line-height-1-5 py-3">Amanda is the co-founder and Vice President of 1netwrk,
                            with over 15 years of experience managing 1000’ of campaigns she joins a well seasoned team!</p>
                        <br />
                        <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i
                                class="fab fa-linkedin"></i></a>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 px-lg-4">
                    <div class="bg-light rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">
                        <img src="images/team4.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />
                        <div class="clearfix"></div>
                        <span class="fs-20 fw-400 line-height-2">Jacqueline Yeh</span>
                        <div class="clearfix"></div>
                        <h3 class="fs-24 fw-400 line-height-1-8">Lead UX/UI Designer</h3>
                        <p class="fs-16 fw-400 line-height-1-5 py-3">Jacqueline, an all-rounded designer, has assisted many
                            companies in refining user-centered websites, apps, and dashboards. Her creativity drives
                            innovative ideas by understanding users and tackling seemingly impossible challenges.</p>
                        <br />
                        <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i
                                class="fab fa-linkedin"></i></a>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 px-lg-4">
                    <div class="bg-light rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">
                        <img src="images/team5.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />
                        <div class="clearfix"></div>
                        <span class="fs-20 fw-400 line-height-2">Soumaya Laghdas</span>
                        <div class="clearfix"></div>
                        <h3 class="fs-24 fw-400 line-height-1-8">Sales Manager</h3>
                        <p class="fs-16 fw-400 line-height-1-5 py-3">Soumaya, a Business Development Executive, onboarded
                            300+ publishers, negotiated deals, and provided support. Now a Sales Manager, she's keen to
                            engage potential buyers.</p>
                        <br />
                        <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i
                                class="fab fa-linkedin"></i></a>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 px-lg-4">
                    <div class="bg-light rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">
                        <img src="images/team6.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />
                        <div class="clearfix"></div>
                        <span class="fs-20 fw-400 line-height-2">Kamran Saleem</span>
                        <div class="clearfix"></div>
                        <h3 class="fs-24 fw-400 line-height-1-8">CTO</h3>
                        <p class="fs-16 fw-400 line-height-1-5 py-3">
                            Experienced CTO with a strong leadership background, adept at driving strategic decision-making
                            and technological innovation at FundQube & NetwrkQube.</p>
                        <br />
                        <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i
                                class="fab fa-linkedin"></i></a>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 px-lg-4">
                    <div class="bg-light rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">
                        <img src="images/team7.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />
                        <div class="clearfix"></div>
                        <span class="fs-20 fw-400 line-height-2">Adnan Saleem</span>
                        <div class="clearfix"></div>
                        <h3 class="fs-24 fw-400 line-height-1-8">Full-Stack Developer</h3>
                        <p class="fs-16 fw-400 line-height-1-5 py-3">Proficient FullStack developer having more than 5
                            years of experience in front-end and server-side technologies, contributing to innovative
                            solutions at FundQube & NetwrkQube.</p>
                        <br />
                        <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i
                                class="fab fa-linkedin"></i></a>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 px-lg-4">
                    <div class="bg-light rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">
                        <img src="images/team8.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />
                        <div class="clearfix"></div>
                        <span class="fs-20 fw-400 line-height-2">Hridoy R. Khan</span>
                        <div class="clearfix"></div>
                        <h3 class="fs-24 fw-400 line-height-1-8">Business Manager</h3>
                        <p class="fs-16 fw-400 line-height-1-5 py-3">6 years of relentless customer service excellence.
                            Unparalleled problem-solving skills, unwavering dedication, and an unshakable commitment to
                            exceeding expectations. Customer satisfaction is not a goal; it's a way of life</p>
                        <br />
                        <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i
                                class="fab fa-linkedin"></i></a>
                        <br />
                        <br />
                    </div>
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
