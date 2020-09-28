@extends('layouts.user')

@section('content')
    <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Grab The Employers Attention!!</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Make your cv with stylish template that will express you in better way and emphasize your skill and interest in front of employer so he/she will know you better way.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="/login">Login</a>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="/register">Regiter</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Why we are better than other!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4" style="color: white">We not only facilitate the the student to build their cv we also offer employer to get the data of the student according to their need. So you have great chance to get your dream Job!</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#theme">Check Our Templates!</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio-->
        <div id="theme">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-4">
                        <a class="portfolio-box" href="/images/cover1.jpg">
                            <img  src="/images/cover1.jpg" height="500px" width="100%" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name text-center">Classic Cover</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <a class="portfolio-box" href="/images/cover2.jpg">
                            <img  src="/images/cover2.jpg" height="500px" width="100%"  alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name text-center">Modern Cover</div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-4 col-sm-4">
                        <a class="portfolio-box" href="template/preview.jpg">
                            <img src="/template/preview.jpg" height="500px" width="100%" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name text-center">Modern Resume Template</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
                <!-- Services-->
                <section class="page-section" id="services">
                    <div class="container">
                        <h2 class="text-center mt-0">At Your Service</h2>
                        <hr class="divider my-4" />
                        <div class="row">
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="mt-5">
                                    <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                                    <h3 class="h4 mb-2">Sturdy Templates</h3>
                                    <p class="text-muted mb-0">Our Templates are updated regularly to keep them bug free!</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="mt-5">
                                    <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                                    <h3 class="h4 mb-2">Up to Date</h3>
                                    <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="mt-5">
                                    <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                                    <h3 class="h4 mb-2">In employer's reach </h3>
                                    <p class="text-muted mb-0">Lots of the employers are our partner</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="mt-5">
                                    <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                                    <h3 class="h4 mb-2">Always for your help</h3>
                                    <p class="text-muted mb-0">Send your feedback and enquiry to us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Need help to write CV!</h2>
                <a class="btn btn-light btn-xl" target="_blank" href="http://www.unice.fr/crookall-cours/jobs/docs/cv%20-%20Resume%20Writing%20Guide%20-%205205666.pdf">Click here to read rules!</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Are you facing any problen and do you have any suggestion please send your valuable feedback and suggestion in below listed contact.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div><a href="tel:+919781866665">+91 9781866665</a></div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a href="#" class="d-block" data-toggle="modal" data-target="#contactUs">click here to submit your enquiry</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
       
        <div class="modal fade"  id="contactUs" tabindex="-1" role="dialog" aria-labelledby="contactUs" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Send Your valuable feedback.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="contactUsForm" name="contactUsForm">
                        @csrf
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <label class="custom-required" for="Email">Email</label>
                                <input type="email" required id="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <label class="custom-required" for="message">Message</label>
                                <textarea name="message" required id="message" class="form-control" cols="30" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit"  class="btn btn-primary "><i class="la la-check-square-o"></i> Submit</button>
                        <button type="button"  class="btn btn-dark" data-dismiss="modal"><i class="ft-x"></i> Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

     
