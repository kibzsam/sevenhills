@extends('layouts.navbar')

@section('index')
<!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra">Aspy Medical Solutions</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                            <h4 class="h-light">Quality Healthcare Staffing is Our Specialty</h4>
                        </div>
                        <div class="well well-trans">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">

                                <ul class="lead-list">
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>We are a leader in health care staffing with <br>many years of experience in the ﬁeld. </strong></span></li>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Client satisfaction</strong></span></li>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Excellent services</strong></span></li>
                                </ul>
                                <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                    <a href="#service" class="btn btn-skin btn-lg">Learn more <i class="fa fa-angle-right"></i></a>
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <img src="{{  asset('public/img/dummy/img-1.png') }}" class="img-responsive" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-66">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">

                            <i class="fa fa-check fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Who we are</h4>
                            <p>
                                Aspy Medical Solutions is a leader in health care staffing with many years of experience in the field.
                                We are proud of the services we provide to our diverse clients. When choosing your professional medical staffing services,
                                please choose carefully. Your patients’ well-being and your facility’s good name hang in the balance.
                                For all the right reasons, Aspy Medical Solutions is the right choice
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Why us?</h4>
                            <p>
                                Patient care is YOUR business and YOU are our business. Our employment application and screening processes
                                are exhaustive and unparalleled in the industry.
                                Aspy Medical Solutions is dedicated to providing you with the absolute best healthcare staffing services available.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Section: boxes -->


    <section id="callaction" class="home-section paddingtop-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="callaction bg-gray">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-text">
                                        <h3>What we offer</h3>
                                        <p>Aspy Medical Solutions provides, contract, temp-to-perm, and direct hire personnel to
                                            many segments of the healthcare ﬁeld including physician practices,
                                            long-term care facilities, hospitals, medical home care agencies and many more.  </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                    <div class="cta-btn">
                                        <a href="{{route('applicationForm')}}" class="btn btn-skin btn-lg">APPLY HERE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('public/img/dummy/img-1.jpg') }}" class="img-responsive" alt="" />
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light">Physicians</h6>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light">Physician assistants</h6>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light">Nurse practitioners</h6>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light">Medical office assistants</h6>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.5s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light">Occupational therapists</h6>
                                {{--<p>Vestibulum tincidunt enim in pharetra malesuada.</p>--}}
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.6s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light">Pharmacists</h6>
                                {{--<p>Vestibulum tincidunt enim in pharetra malesuada.</p>--}}
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-sm-3 col-md-3">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light">Registered nurses</h6>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light"> Licensed practical nurses</h6>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light">Certiﬁed nursing assistants</h6>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light">Respiratory therapists</h6>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.5s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light">Veterinarian assistants</h6>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.6s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-check fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h6 class="h-light">Pharmacy Technicians</h6>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- /Section: services -->
    <section id="facilities" class="home-section paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">How far are we?</h2>
                            <p>Aspy Medical Solutions is continually growing and evolving to meet the demands of the health care field. Since our inception,
                                we have tripled in size due to our professionalism and dedication to provide quality staff to our clients.</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                        <div id="owl-works" class="owl-carousel">

                            <div class="item"><a href="{{ asset('public/img/photo/2.jpeg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg">
                                    <img src="public/img/photo/2.jpeg" class="img-responsive " alt="img"></a>
                            </div>
                            <div class="item"><a href="{{ asset('public/img/photo/1.jpeg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                    <img src="public/img/photo/1.jpeg" class="img-responsive" alt="img"></a>
                            </div>
                            <div class="item"><a href="{{ asset('public/img/photo/3.jpeg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="public/img/photo/3.jpeg" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="{{ asset('public/img/photo/4.jpeg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="public/img/photo/4.jpeg" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="{{ asset('public/img/photo/5.jpeg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="public/img/photo/5.jpeg" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="{{ asset('public/img/photo/6.jpeg') }}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="public/img/photo/6.jpeg" class="img-responsive " alt="img"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: works -->
    <section id="partner" class="home-section paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Our clients</h2>
                            <p>We recognize that our personnel are presenting Aspy Medical Solutions but while on assignment,
                                they are a reflection of your facility to your patients and their families. As such, we
                                promise to continually evaluate our employees’ actions, skills, attitudes and how they might
                                influence your clients’ perception of you!
                            </p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>
    </section>

    <footer>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>About Aspy</h5>
                            <p>
                                Aspy Medical Solutions is a leader in health care staffing with many years of
                                experience in the ﬁeld. We are proud of the services we provide to our diverse clients...
                            </p>
                        </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#service">Our services</a></li>
                                <li><a href="#">Terms & conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>VISIT US</h5>
                            <p>
                                We are always available for consultations and incase of anything you can reach to us and will be
                                more than willing to help.
                            </p>
                            <ul>
                                <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Friday, 8am to 5pm
                                </li>
                                <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span>  702-807-3199
                                </li>
                                <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span>
                                <a href="mailto:info@sevenhillsmed.com">info@sevenhillsmed.com</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Our location</h5>
                            <p>8565 S. Eastern Ave # 150<br>
                                Las Vegas, Nevada 89123 </p>

                        </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Follow us</h5>
                            <ul class="company-social">
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--<br>-->
    <footer class="main-footer" style="background:#ffffff;">
        <div class="container">
            <div class="pull-right hidden-xs" style="align:center;">
                Powered by<b> Alpha Tech</b>
            </div>
            <strong>Copyright &copy; 2019 <a href="sevenhillsmed.com">Aspy</a>.</strong> All rights
                reserved.
        </div>
        <br>
    </footer>
    <!--<br>-->

@endsection
