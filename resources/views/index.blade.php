<!-- resources/views/home.blade.php -->
@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <section class="home-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <strong class="py-4 px-3 text-white fw-bold rounded-1 bg-primary fw-600 fs-24 position-relative">Welcome
                        to NetwrkQube. <em></em></strong>
                    <div class="clearfix"></div>
                    <h1 class="text-white fw-700 fs-50 mt-5 pt-3 mb-4">Performance Marketing that achieves your definition of
                        results.</h1>
                    <span class="overflow-hidden rounded-1 mt-4 d-inline-block"><a href="javascript:;"
                            class="btn btn-banner py-2 px-4 fw-700 fs-20"> &nbsp; <span>Become an Advertiser</span> &nbsp;
                        </a></span>
                    <br />
                    <span class="overflow-hidden rounded-1 mt-4 d-inline-block"><a href="javascript:;"
                            class="btn btn-banner py-2 px-5 fw-700 fs-20"><span>Become a Publisher</span></a></span>
                    <br />
                    <b class="fs-20 fw-600 pt-4 d-block">Are you an affiliate?</b>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center gap-3 mt-md-30">
                        <img src="images/banner-icon.svg" alt="icon" />
                        <span class="text-white fs-28 fw-500">30,000+ Publishers</span>
                    </div>
                </div>
                <div class="col-lg-4 hide-md"></div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center gap-3 mt-md-30">
                        <img src="images/banner-icon2.svg" alt="icon" />
                        <span class="text-white fs-28 fw-500">3,000+ Active Campaigns</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-sec d-md-flex align-items-center">
        <img src="images/gif1.png" alt="Animated Map" class="img-fluid position-absolute start-0 ms-5" />
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="bg-white rounded-2 p-4">
                        <h2 class="fs-20 fw-700">Tailor-made solutions for your marketing goals.</h2>
                        <em class="line d-block my-2"></em>
                        <p class="text-seondary line-height-1-5 pt-2 d-block">Access a global Netwrk of marketing channels
                            to increase sales, leads, sign-ups, app installations, or any other actions you deem essential
                            to evolving your brand. We give you control by ensuring you only pay for the action that you
                            define.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="glob-sec d-md-flex align-items-center">
        <div class="bg-black rounded-2 p-4 position-absolute start-0 ms-5 border border-light col-5">
            <h2 class="fs-20 fw-700 text-white">Build your brand in any niche, anywhere.</h2>
            <em class="line d-block my-2"></em>
            <p class="text-light opacity-2 line-height-1-8 pt-2 d-block">Your product or service - positioned in front of
                consumers who are one impression away from thinking, "I need that." Utilize massive social followings,
                visitor-rich websites, expansive e-mail lists, and media buying expertise to extend your reach to the right
                consumers in the right places.</p>
            <span class="overflow-hidden rounded-1 d-inline-block mt-4"><button
                    class="btn btn-outline-primary px-5 py-2 fw-700 fs-20"><span> Start Adverstising </span></button></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <img src="images/gif2.png" alt="Animated Map" class="img-fluid float-end" />
                </div>
            </div>
        </div>
    </section>

    <section class="tab-sec d-md-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/tab.png" alt="Tab" class="img-fluid px-md-5" />
                </div>
                <div class="col-md-6">
                    <h2 class="fs-20 fw-700 d-inline-block">NetwrkQube Tracking Platform.<br /><em
                            class="line d-block my-2 float-end"></em></h2>
                    <p class="text-seondary line-height-1-8 pt-2 d-block">Whether you have experience working with Netwrks
                        or it's your first time in the performance marketing space, NetwrkQube has a tracking solution to
                        suit your individual needs. Use our Advertiser Tracking Platform to integrate instantly as well as
                        access detailed tracking reports to monitor progress and optimize your campaigns' performance.</p>
                    <a href="javascript:;" class="btn btn-primary px-5 py-3 mt-5 fw-700 fs-16 text-white">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="partners-sec d-flex align-items-center bg-white py-5">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2 class="text-uppercase fw-600 fs-44">TRUSTED PARTNERS</h2>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-sm mt-5">
                    <img src="images/partner3.svg" alt="Partner" class="img-fluid" />
                </div>
                <div class="col-sm mt-5">
                    <img src="images/partner2.svg" alt="Partner" class="img-fluid" />
                </div>
                <div class="col-sm mt-5">
                    <img src="images/partner1.svg" alt="Partner" class="img-fluid" />
                </div>
                <div class="col-sm mt-5">
                    <img src="images/partner4.svg" alt="Partner" class="img-fluid" />
                </div>
                <div class="col-sm mt-5">
                    <img src="images/partner5.svg" alt="Partner" class="img-fluid" />
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-sm mt-5">
                    <img src="images/partner6.svg" alt="Partner" class="img-fluid" />
                </div>
                <div class="col-sm mt-5">
                    <img src="images/partner7.svg" alt="Partner" class="img-fluid" />
                </div>
                <div class="col-sm mt-5">
                    <img src="images/partner8.svg" alt="Partner" class="img-fluid" />
                </div>
                <div class="col-sm mt-5">
                    <img src="images/partner9.svg" alt="Partner" class="img-fluid" />
                </div>
                <div class="col-sm mt-5">
                    <img src="images/partner10.svg" alt="Partner" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <section class="icons-sec py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5">
                    <div class="d-md-flex align-items-start gap-2">
                        <img src="images/icon1.svg" alt="Icon" />
                        <div>
                            <h3 class="fs-20 fw-700 text-uppercase my-3">PROPRIETARY SOFTWARE</h3>
                            <p class="fs-18 fw-400 line-height-1-8">Use our proprietary tracking and analytical software to
                                discover patterns that will assist you with optimizing your campaigns.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 mb-5">
                    <div class="d-md-flex align-items-start gap-2">
                        <img src="images/icon2.svg" alt="Icon" />
                        <div>
                            <h3 class="fs-20 fw-700 text-uppercase my-3">DEDICATED COMPLIANCE</h3>
                            <p class="fs-18 fw-400 line-height-1-8">Your brand's integrity is protected. Our processes vet
                                affiliates, prevent fraud, and surveil traffic around the clock.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 mb-5">
                    <div class="d-md-flex align-items-start gap-2">
                        <img src="images/icon3.svg" alt="Icon" />
                        <div>
                            <h3 class="fs-20 fw-700 text-uppercase my-3">HIGH QUALITY LEADS</h3>
                            <p class="fs-18 fw-400 line-height-1-8">We ensure that the traffic being sent to your campaigns
                                is comprised of real consumers who are hungry for your product or service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 mb-5">
                    <div class="d-md-flex align-items-start gap-2">
                        <img src="images/icon4.svg" alt="Icon" />
                        <div>
                            <h3 class="fs-20 fw-700 text-uppercase my-3">COMMITTED ACCOUNT MANAGERS</h3>
                            <p class="fs-18 fw-400 line-height-1-8">Work with our experienced team to gain insights,
                                monitor success, and develop strategies to meet your goals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="javascript:;" class="btn btn-primary px-5 py-3 mt-5 fw-700 fs-16 text-white">Get Started</a>
                </div>
            </div>
        </div>
    </section>


    <section class="teams-sec py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 text-center">
                    <h2 class="text-uppercase fw-600 fs-44 px-5 bg-light d-inline-block position-relative z-1">Meet our
                        Industry Experts</h2>
                    <hr class="border-bottom border-2 two" />
                </div>
            </div>
            <div class="row d-flex align-items-stretch">
                <div class="col-lg-2"></div>
                <div class="col-lg-4 col-md-6 mt-5 px-lg-4">
                    <div class="bg-white rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">
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
                    <div class="bg-white rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">
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

                <div class="col-lg-2"></div>
            </div>
            <!--<div class="row d-flexalign-items-stretch">-->
            <!--  <div class="col-lg-4 col-md-6 mt-5 px-lg-4">-->
            <!--    <div class="bg-white rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">-->
            <!--      <img src="images/team3.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />-->
            <!--      <div class="clearfix"></div>-->
            <!--      <span class="fs-20 fw-400 line-height-2">Amanda L</span>-->
            <!--      <div class="clearfix"></div>-->
            <!--      <h3 class="fs-24 fw-400 line-height-1-8">Co - Founder</h3>-->
            <!--      <p class="fs-16 fw-400 line-height-1-5 py-3">Amanda is Co – Founder and Vice President of NetwrkQube. With over 18 Years Experience in the BPO Industry managing hundreds of Campaigns, she excels at building and maintaining long-term relationships with clients and publishers by helping them increase and maximize their ROIs.</p>-->
            <!--      <br />-->
            <!--      <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i class="fab fa-linkedin"></i></a>-->
            <!--      <br />-->
            <!--      <br />-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="col-lg-4 col-md-6 mt-5 px-lg-4">-->
            <!--    <div class="bg-white rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">-->
            <!--      <img src="images/team4.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />-->
            <!--      <div class="clearfix"></div>-->
            <!--      <span class="fs-20 fw-400 line-height-2">Jacqueline Yeh</span>-->
            <!--      <div class="clearfix"></div>-->
            <!--      <h3 class="fs-24 fw-400 line-height-1-8">Lead UX/UI Designer</h3>-->
            <!--      <p class="fs-16 fw-400 line-height-1-5 py-3">Jacqueline, an all-rounded designer, has assisted many companies in refining user-centered websites, apps, and dashboards. Her creativity drives innovative ideas by understanding users and tackling seemingly impossible challenges.</p>-->
            <!--      <br />-->
            <!--      <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i class="fab fa-linkedin"></i></a>-->
            <!--      <br />-->
            <!--      <br />-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="col-lg-4 col-md-6 mt-5 px-lg-4">-->
            <!--    <div class="bg-white rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">-->
            <!--      <img src="images/team5.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />-->
            <!--      <div class="clearfix"></div>-->
            <!--      <span class="fs-20 fw-400 line-height-2">Soumaya Laghdas</span>-->
            <!--      <div class="clearfix"></div>-->
            <!--      <h3 class="fs-24 fw-400 line-height-1-8">Sales Manager</h3>-->
            <!--      <p class="fs-16 fw-400 line-height-1-5 py-3">As a Business Development Executive, Soumaya onboarded 300+ publishers, negotiated deals, and provided support. Now a Sales Manager, she's eager to connect with potential buyers</p>-->
            <!--      <br />-->
            <!--      <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i class="fab fa-linkedin"></i></a>-->
            <!--      <br />-->
            <!--      <br />-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="col-lg-4 col-md-6 mt-5 px-lg-4">-->
            <!--    <div class="bg-white rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">-->
            <!--      <img src="images/team6.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />-->
            <!--      <div class="clearfix"></div>-->
            <!--      <span class="fs-20 fw-400 line-height-2">Kamran Saleem</span>-->
            <!--      <div class="clearfix"></div>-->
            <!--      <h3 class="fs-24 fw-400 line-height-1-8">CTO</h3>-->
            <!--      <p class="fs-16 fw-400 line-height-1-5 py-3">-->
            <!--          Experienced CTO with a strong leadership background, adept at driving strategic decision-making and technological innovation at FundQube & NetwrkQube.</p>-->
            <!--      <br />-->
            <!--      <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i class="fab fa-linkedin"></i></a>-->
            <!--      <br />-->
            <!--      <br />-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="col-lg-4 col-md-6 mt-5 px-lg-4">-->
            <!--    <div class="bg-white rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">-->
            <!--      <img src="images/team7.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />-->
            <!--      <div class="clearfix"></div>-->
            <!--      <span class="fs-20 fw-400 line-height-2">Adnan Saleem</span>-->
            <!--      <div class="clearfix"></div>-->
            <!--      <h3 class="fs-24 fw-400 line-height-1-8">Full-Stack Developer</h3>-->
            <!--      <p class="fs-16 fw-400 line-height-1-5 py-3">Proficient FullStack developer having more than 5 years of experience in front-end and server-side technologies, contributing to innovative solutions at FundQube & NetwrkQube.</p>-->
            <!--      <br />-->
            <!--      <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i class="fab fa-linkedin"></i></a>-->
            <!--      <br />-->
            <!--      <br />-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="col-lg-4 col-md-6 mt-5 px-lg-4">-->
            <!--    <div class="bg-white rounded-3 border border-2 pt-3 px-4 pb-2 text-center h-100">-->
            <!--      <img src="images/team8.png" alt="Team Memeber" class="my-2 img-fluid rounded-circle" />-->
            <!--      <div class="clearfix"></div>-->
            <!--      <span class="fs-20 fw-400 line-height-2">Hridoy R. Khan</span>-->
            <!--      <div class="clearfix"></div>-->
            <!--      <h3 class="fs-24 fw-400 line-height-1-8">Business Manager</h3>-->
            <!--      <p class="fs-16 fw-400 line-height-1-5 py-3">6 years of relentless customer service excellence. Unparalleled problem-solving skills, unwavering dedication, and an unshakable commitment to exceeding expectations. Customer satisfaction is not a goal; it's a way of life</p>-->
            <!--      <br />-->
            <!--      <a href="javascript:;" class="text-decoration-none text-dark shadow px-2 py-1 mb-3"><i class="fab fa-linkedin"></i></a>-->
            <!--      <br />-->
            <!--      <br />-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
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
