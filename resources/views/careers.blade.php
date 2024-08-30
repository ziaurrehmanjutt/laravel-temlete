<!-- resources/views/home.blade.php -->
@extends('layouts.main')

@section('title', 'careers')

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
                    <h1 class="text-white fw-700 fs-42 pt-3 mb-4 px-lg-5 line-height-1-5">
                        <ssmall class="fs-5 fw-400">Evolve your career.</ssmall><br />Join the <u
                            class="fw-500 text-uppercase">NetwrkQube</u> team.
                    </h1>
                    <a href="javascript:;" class="btn btn-primary px-5 py-3 mt-5 fw-700 fs-16 text-white">Join Our Team</a>
                    <br />
                </div>
            </div>
        </div>
    </section>

    <section class="tw-boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="bg-white rounded-2 p-4 shadow-sm h-100">
                        <h2 class="fs-20 fw-700">What is NetwrkQube</h2>
                        <em class="line d-block my-2"></em>
                        <p class="text-seondary line-height-1-5 pt-2 d-block">NetwrkQube is a world leading
                            performance-based CPA Netwrk that specializes in maximizing the ROI of our clients. Our goal is
                            to provide the best service possible to both affiliates and advertisers around the world, by
                            creating a seamless online marketing experience. We aim to anticipate, evolve, and think one
                            step ahead of the industry, ensuring that those who work with us do the same.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white rounded-2 p-4 shadow-sm h-100">
                        <h2 class="fs-20 fw-700">What does NetwrkQube do?</h2>
                        <em class="line d-block my-2"></em>
                        <p class="text-seondary line-height-1-5 pt-2 d-block">We operate a platform that enables advertisers
                            and affiliates to build an audience. We provide our international advertisers with leads and
                            sales, by leveraging the skills of our affiliates who specialize in traffic generation. Our
                            strength comes from our diversity. As we work with advertisers in different industries and
                            affiliates from different backgrounds, we are able to create an effective mix and ensure that
                            every marketing goal is met.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white rounded-2 p-4 shadow-sm h-100">
                        <h2 class="fs-20 fw-700">What is it like to work at NetwrkQube?</h2>
                        <em class="line d-block my-2"></em>
                        <p class="text-seondary line-height-1-5 pt-2 d-block">Our work is rewarding and challenging, but we
                            like to keep the office quite casual. Our team is united by NetwrkQube's values, and we hire
                            talented individuals from all walks of life. As a part of the team, you can look forward to
                            team-building activities, annual golf tournaments, and more. We are a growing company and we are
                            looking to bring on the best new talent we can find!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-md-flex align-items-center py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 mt-4">
                    <h4 class="h4 fw-700">Job Openings</h4>
                    <div class="table-responsove mt-4">
                        <table class="table">
                            <tr>
                                <th class="p-4">01</th>
                                <td class="p-4"><a class="fw-700 text-decoration-none" href="javascript:;"
                                        data-bs-toggle="modal" data-bs-target="#jobDetailModal">Advertiser Account
                                        Manager</a></td>
                                <td class="p-4">Full-Time</td>
                            </tr>
                        </table>
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


    <div class="modal fade" id="jobDetailModal" tabindex="-1" aria-labelledby="jobDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-700" id="jobDetailModalLabel">Advertiser Account Manager</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="h5 fw-700 py-3">Description</h5>
                    <p class="line-height-1-5">NetwrkQube is seeking driven individuals to build and maintain long-lasting
                        relationships with our advertising clients. Your primary role with the company will be working with
                        advertisers to produce campaigns that our affiliates will promote. You will learn about the
                        performance marketing industry and become the main contact for both small and large businesses. You
                        will set up and manage their marketing campaigns, maintain strict compliance, oversee budgets, and
                        grow each account to its fullest potential. You will work well as part of a team, while
                        self-managing your time to reach out to your clients daily. It is essential that you have no problem
                        communicating over the phone, or through email and Skype messaging.
                        <br /><br />
                        A post-secondary education and experience in account management, sales, digital marketing, or
                        affiliate marketing is considered an asset.
                        <br /><br />
                        Currently this position is fully remote as our office is closed due to COVID-19.
                    </p>
                    <h5 class="h5 fw-700 py-3">Duties</h5>
                    <ul>
                        <li class="d-block py-2 line-height-1-5">Maintain continuous contact with advertisers to grow client
                            relationships and achieve their desired sales goals.</li>
                        <li class="d-block py-2 line-height-1-5">Set-up and manage performance marketing campaigns.</li>
                        <li class="d-block py-2 line-height-1-5">Communicate with Affiliate Managers regarding campaign
                            details and restrictions in relation to affiliate promotion.</li>
                        <li class="d-block py-2 line-height-1-5">Attend industry tradeshows to meet with potential and
                            existing clients to communicate company benefits and strengthen current relationships.</li>
                    </ul>
                    <h5 class="h5 fw-700 py-3">Required Skills and Competencies</h5>
                    <ul>
                        <li class="d-block py-2 line-height-1-5">Multi-tasking.</li>
                        <li class="d-block py-2 line-height-1-5">Problem solving.</li>
                        <li class="d-block py-2 line-height-1-5">Computer and Internet skills.</li>
                        <li class="d-block py-2 line-height-1-5">CRM (Customer Relationship Management) experience.</li>
                        <li class="d-block py-2 line-height-1-5">Excellent written and oral communication in English.</li>
                        <li class="d-block py-2 line-height-1-5">Ability to take Initiative.</li>
                    </ul>
                    <h5 class="h5 fw-700 py-3">Benefits</h5>
                    <ul>
                        <li class="d-block py-2 line-height-1-5">Full time.</li>
                        <li class="d-block py-2 line-height-1-5">Base salary plus commission.</li>
                        <li class="d-block py-2 line-height-1-5">Full health and dental benefits paid 100% by employer.</li>
                        <li class="d-block py-2 line-height-1-5">Work from home flex days.</li>
                        <li class="d-block py-2 line-height-1-5">Catered lunch on Fridays.</li>
                        <li class="d-block py-2 line-height-1-5">Team building events.</li>
                        <li class="d-block py-2 line-height-1-5">Employee lounge with XBox.</li>
                    </ul>
                    <h5 class="h5 fw-700 py-3">Location</h5>
                    <p class="line-height-1-5">Ottawa, ON - Canada</p>
                    <h5 class="h5 fw-700 py-3">Covid-19 Considerations</h5>
                    <p class="line-height-1-5">At this time our office is completely closed and all travel suspended. All
                        interviews, training and work will take place from your home until it is deemed safe and prudent to
                        return to the office.</p>
                    <h5 class="h5 fw-700 py-3">How to Apply</h5>
                    <p class="line-height-1-5">Submit your resume and cover letter to <a
                            href="mailto:careers@NetwrkQube.com">careers@NetwrkQube.com</a> with Advertiser Account
                        Manager: Your Name in the subject line. Tell us why you're excited about joining the NetwrkQube
                        team!
                        <br /><br />
                        NetwrkQube is an equal opportunity employer.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
