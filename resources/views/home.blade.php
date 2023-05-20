<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pd entertainment mw</title>
    <link rel="stylesheet" href="{{asset('assets/libs/OwlCarousel-2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/iconfont/tabler-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
</head>

<body>
    <!------------------------------>
    <!-- Header Start -->
    <!------------------------------>
    <header class="main-header position-fixed w-100">
        <div class="container">
            <nav class="navbar navbar-expand-xl py-0">
                <div class="logo">
                    <a class="navbar-brand py-0 me-0" href="#">
                        <img style="width:25vh; position:relative; left:-15%;" src="assets/images/PD.jpg" alt="logo">
                    </a>
                </div>
                <a class="d-inline-block d-lg-block d-xl-none d-xxl-none  nav-toggler text-decoration-none" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="ti ti-menu-2 text-primary"></i>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">Portifolio </a>
                        </li>

                    </ul>
                    <div class="d-flex align-items-center">
                        <a class="btn btn-primary border btn-outline-white btn-hover-secondery text-capitalize " href="#">Account</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <div class="logo">
                    <a class="navbar-brand py-0 me-0" href="#"><img src="{{asset('assets/images/Creato-logo.svg')}}" alt=""></a>
                </div>
                <button type="button" class="btn-close text-reset  ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x text-primary"></i></button>
            </div>
            <div class="offcanvas-body pt-0">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" aria-current="page" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#">Pricing </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#">Elements </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#">blog </a>
                    </li>
                </ul>
                <div class="login d-block align-items-center mt-3">
                    <a class="btn btn-primary text-capitalize w-100" href="#">contact us</a>
                </div>
            </div>
        </div>
    </header>
    <!------------------------------>
    <!-- Header End  -->
    <!------------------------------>

    <!------------------------------>
    <!--- Hero Banner Start--------->
    <!------------------------------>
    <section class="hero-banner position-relative overflow-hidden">
        <div class="container owl-carousel owl-theme landing-slider">

            <div class="row d-flex flex-wrap align-items-center item">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative left-hero-color">
                        <h1 class="mb-0 fw-bold">
                            We have equipments
                        </h1>
                        <p style="line-height:1.6em">The project management tool you love The project management tool you love. The project management tool you love..</p>
                        <a href="#" class="btn btn-primary btn-hover-secondery"><span class="d-inline-block me-2"><i
                                    class="ti ti-playstation-triangle"></i></span> Hire For Events</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative right-hero-color">
                        <img src="assets/images/Dj-Speakers-800x445.jpg" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row d-flex flex-wrap align-items-center item">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative left-hero-color">
                        <h1 class="mb-0 fw-bold">
                            Event Hires
                        </h1>
                        <p style="line-height:1.6em">The project management tool you love The project management tool you love. The project management tool you love..</p>
                        <a href="#" class="btn btn-primary btn-hover-secondery"><span class="d-inline-block me-2"><i
                                    class="ti ti-playstation-triangle"></i></span> Hire For Events</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative right-hero-color">
                        <img src="{{asset('assets/images/Dj-Speakers-800x445.jpg')}}" class="img-fluid">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!------------------------------>
    <!--- Hero Banner End--------->
    <!------------------------------>

    <!------------------------------>
    <!--- Service sectin Start------>
    <!------------------------------>
    <section class="service position-relative overflow-hidden">
        <div class="container position-relative">
            <img src="{{asset('assets/images/service/dot-shape.png')}}" class="shape position-absolute">
            <div class="row">
                <div class="col-12"><small class="fs-7 d-block">Working Process</small></div>
                <div class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center ">
                    <h2 class="fs-2 text-black mb-0">Our Featured Service<br> that We Provide</h2>
                </div>
            </div>
            <div class="row d-flex flex-wrap justify-content-center step-row">

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card border-0 shadow mb-5">
                        <div class="card-body">
                            <img style="width:100%;" src="{{asset('assets/images/pngwing.com(1).png')}}" alt="">
                            <h5 class="mb-0 fw-500">Step 1</h5>
                            <h3 class="fs-4">Download our App</h3>
                            <p class="fs-7 mb-0 fw-500 mb-4">There are many variations of pass for ages of oremsum.</p>
                            <a href="#" class="btn btn-primary btn-hover-secondery section-btn">All Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card border-0 shadow mb-5">
                        <div class="card-body">
                            <img style="width:100%;" src="{{asset('assets/images/pngwing.com(1).png')}}" alt="">
                            <h5 class="mb-0 fw-500">Step 1</h5>
                            <h3 class="fs-4">Download our App</h3>
                            <p class="fs-7 mb-0 fw-500 mb-4">There are many variations of pass for ages of oremsum.</p>
                            <a href="#" class="btn btn-primary btn-hover-secondery section-btn">All Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card border-0 shadow mb-5">
                        <div class="card-body">
                            <img style="width:100%;" src="{{asset('assets/images/pngwing.com(1).png')}}" alt="">
                            <h5 class="mb-0 fw-500">Step 1</h5>
                            <h3 class="fs-4">Download our App</h3>
                            <p class="fs-7 mb-0 fw-500 mb-4">There are many variations of pass for ages of oremsum.</p>
                            <a href="#" class="btn btn-primary btn-hover-secondery section-btn">All Services</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!------------------------------>
    <!--- Service sectin Start------>
    <!------------------------------>

    <!---------------------------------->
    <!--- Our Service sectin Start------>
    <!---------------------------------->
    <section class="our-service position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <img src="{{asset('assets/images/pngwing.com(1).png')}}" class="img-fluid">
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ps-xxl-0 ps-xl-0 ps-lg-3 ps-md-3 ps-sm-3 ps-3">
                    <small class="fs-7 d-block">Our Service</small>
                    <h2 class="fs-2 text-black mb-0">View Booked Calendar</h2>
                    <p class="mb-0 fw-500 fs-7">
                        Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.
                    </p>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li class="d-flex flex-wrap align-items-start">
                            <i class="ti ti-circle-check fs-4 pe-2"></i>
                            <span class="fs-7 text-black">List of the tasks that require your attention.</span>
                        </li>
                        <li class="d-flex flex-wrap align-items-start">
                            <i class="ti ti-circle-check fs-4 pe-2"></i>
                            <span class="fs-7 text-black">Google Calendar integration to see when interruptions will
                                happen</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!--- Our Service sectin End---->
    <!------------------------------>

    <!------------------------------>
    <!-- Portfolio section Start---->
    <!------------------------------>
    <section class="portfolio position-relative bg-primary">
        <div class="container position-relative mb-5">
            <div class="row">
                <div class="col-12"><small class="fs-7 d-block text-primary">Product Docs</small></div>
                <div class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center ">
                    <h2 class="fs-3 text-white mb-0">Check Out Events <br> Hosted By Us.</h2>
                    <a href="#" class="btn btn-primary border  btn-hover-secondery section-btn">Open
                        Portfolio</a>
                </div>
            </div>
        </div>
        <div class="container position-relative">
            <div class="portfolio-wrap">
                <div class="owl-carousel owl-theme portfolio-slider">
                    <div class="item">
                        <a href="#"><img style="border-radius:0" src="{{asset('assets/images/Dj-Speakers-800x445.jpg')}}" class="w-100"></a>
                    </div>




                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!-- Portfolio section End ----->
    <!------------------------------>

    <!------------------------------>
    <!-- Pricing section Start------>
    <!------------------------------>
    <section class="pricing position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <small class="fs-7 d-block">Pricing Plan</small>
                    <h2 class="fs-3 pricing-head text-black mb-0 position-relative">What’s About Our Pricing Subscription
                    </h2>
                </div>
            </div>
            <div class="row plans">
                <div class="col-12 text-center">
                    <div class="form-check form-switch d-flex justify-content-center ps-0 align-items-center">
                        <label class="form-check-label text-black fs-7" for="flexSwitchCheckChecked">Monthly</label>
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label text-black fs-7" for="flexSwitchCheckChecked">Yearly</label>
                    </div>
                    <div class="save d-inline-block position-relative text-primary fw-500 fs-9 text-center">Save Up To 58%
                    </div>
                </div>
            </div>
            <div class="row justify-content-center price-plan">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0 h-100">
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-primary text-center">Personal</small>
                            <h2 class="mb-4 text-center position-relative"><sub class="fs-2 text-black">0</sub><sup class="fs-6 position-absolute">$</sup></h2>
                            <small class="fs-7 d-block text-center">Free</small>
                            <p class="fs-7 text-center fw-500">For individuals looking for a simple CRM solution</p>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Basic CRM features</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Unlimited Personal Pipelines</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Email Power Tools</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-action text-center pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-sm-4 pb-4">
                            <a href="#" class="btn btn-primary btn-hover-secondery text-capitalize">Set Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0 h-100">
                        <div class="position-absolute badge bg-primary d-inline-block mx-auto">
                            Most Popular
                        </div>
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-primary text-center">Professional</small>
                            <h2 class="mb-4 text-center position-relative"><sub class="fs-2 text-black">49</sub><sup class="fs-6 position-absolute">$</sup></h2>
                            <small class="fs-7 d-block text-center">Free</small>
                            <p class="fs-7 text-center fw-500">For individuals looking for a simple CRM solution</p>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Basic CRM features</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Unlimited Personal Pipelines</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Email Power Tools</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Unlimited Shared Pipelines</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-action text-center pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-sm-4 pb-4">
                            <a href="#" class="btn btn-primary btn-hover-secondery text-capitalize">Set Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0 h-100">
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-primary text-center">Enterprise</small>
                            <h2 class="mb-4 text-center position-relative"><sub class="fs-2 text-black">99</sub><sup class="fs-6 position-absolute">$</sup></h2>
                            <small class="fs-7 d-block text-center">Free</small>
                            <p class="fs-7 text-center fw-500">For individuals looking for a simple CRM solution</p>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Basic CRM features</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Unlimited Personal Pipelines</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Email Power Tools</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Unlimited Shared Pipelines</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black"> Full API Access</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-action text-center pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-sm-4 pb-4">
                            <a href="#" class="btn btn-primary btn-hover-secondery text-capitalize">Set Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!-- Pricing section End-------->
    <!------------------------------>

    <!------------------------------>
    <!------ FAQ section Start------>
    <!------------------------------>
    <section class="faq position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <small class="fs-7 d-block">Frequently Asked Questions</small>
                    <h2 class="fs-3 text-black mb-0">Want to ask something from us?</h2>
                </div>
            </div>
            <div class="accordion-block">
                <div class="accordion row" id="accordionPanelsStayOpenExample">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button text-black fs-7" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Letraset sheets containing sum passages ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed text-black fs-7" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    There are many variations ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed text-black fs-7" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Lorem Ipsum generators on the Internet tend ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                <button class="accordion-button collapsed text-black fs-7" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                                    Various versions have evolved over the ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                                <button class="accordion-button collapsed text-black fs-7" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                                    Finibus bonorum et malorum ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingsix">
                                <button class="accordion-button collapsed text-black fs-7" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesix" aria-expanded="false" aria-controls="panelsStayOpen-collapsesix">
                                    Many desktop publishing packages ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingsix">
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!------ FAQ section End------>
    <!------------------------------>

    <!------------------------------>
    <!-----Contact section Start---->
    <!------------------------------>
    <section class="contact bg-primary position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="dots-shape-left position-absolute"><img src="{{asset('assets/images/icons/dot-shape.png')}}"></div>
            <div class="dots-shape-right position-absolute"><img src="{{asset('assets/images/icons/dot-shape.png')}}"></div>
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <small class="fs-7 d-block text-primary">Join us Now</small>
                    <h2 class="fs-3 text-white mb-0">Ready to try our services?</h2>
                    <div class="owl-carousel owl-theme testimonial">
                        <div class="item">
                            <div class="details position-relative">
                                <p class="fs-5 fw-light blue-light mb-4">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece”
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="avtar-img rounded-circle overflow-hidden"><img src="{{asset('assets/images/contact/testimonial-image.png')}}" class="img-fluid">
                                    </div>
                                    <div class="name ps-3">
                                        <h6 class="text-white">Merky Lester</h6>
                                        <small class="d-block blue-light fw-500 fs-10 pb-0">Managers</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="details position-relative">
                                <p class="fs-5 fw-light blue-light mb-4">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece”
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="avtar-img rounded-circle overflow-hidden"><img src="{{asset('assets/images/contact/testimonial-image.png')}}" class="img-fluid">
                                    </div>
                                    <div class="name ps-3">
                                        <h6 class="text-white">Merky Lester</h6>
                                        <small class="d-block blue-light fw-500 fs-10 pb-0">Managers</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <form class="position-relative">
                        <div class="row ps-xxl-5 ps-xl-5 ps-lg-3 ps-md-0 ps-sm-0 ps-0">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">Full Name</label>
                                    <input type="text" class="form-control border-0" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">User Name</label>
                                    <input type="text" class="form-control border-0" placeholder="Enter your username">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">Email address</label>
                                    <input type="email" class="form-control border-0" placeholder="Enter your email address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">Email Password</label>
                                    <input type="text" class="form-control border-0" placeholder="Enter your password">
                                </div>
                            </div>

                            <div class="agree fs-7 fw-500">
                                By clicking on the Sign Up button, you agree to Rakon.<br><a href="#" class="text-primary text-decoration-none">terms and conditions of use.</a>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-light btn-hover-secondery text-capitalize mt-2 w-auto contact-btn">Try
                                    for Free</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!------------------------------>
    <!-----Contact section End----->
    <!------------------------------>

    <!------------------------------>
    <!-----Footer Start------------->
    <!------------------------------>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-logo-col">
                        <p class="blue-light mb-0 fs-7 fw-500">PDEntertainment is a company that works on events like weddings ,parties, we also do hires for equipments.</p>
                        <div class="callus text-white fw-500 fs-7">
                            Blantyre
                            <div class="blue-light">Call us: <a href="#" class="text-primary fw-500 fs-7 text-decoration-none">808-956-9599</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">Social</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">Company</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Affiliates</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Legal & Privacy</a></li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="subscribe">
                        <h5 class="text-white">Subscribe</h5>
                        <p class="blue-light fw-500">Subscribe to get the latest news form us
                        </p>
                        <div class="input-group">
                            <input type="email" class="form-control br-15" placeholder="Enter email address" aria-label="Enter email address" aria-describedby="button-addon2">
                            <button class="btn btn-primary btn-hover-secondery ms-xxl-2 ms-xl-2 ls-lg-0 ms-md-0 ms-sm-0 ms-0" type="button" id="button-addon2">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyrights text-center blue-light  fw-500">@<span id="autodate">2023</span> - pdentertainment</a>
            </div>
        </div>
    </footer>
    <!------------------------------>
    <!-------Footer End------------->
    <!------------------------------>


    <script src="{{asset('dist/js/jquery.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/libs/OwlCarousel-2/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('dist/js/custom.js')}}"></script>

</body>

</html>
