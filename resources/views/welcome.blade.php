@extends('layouts.app')

@section('content')

            <div class="content">
                <!-- Header -->
                <header class="masthead">
                    <div class="container">
                        <div class="intro-text">
                            <div class="intro-lead-in">Welcome To Our Studio!</div>
                            <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
                            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
                        </div>
                    </div>
                </header>

                <!-- Services -->
                <section id="services">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">Services</h2>
                                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
                                <h4 class="service-heading">E-Commerce</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                            </div>
                            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                                <h4 class="service-heading">Responsive Design</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                            </div>
                            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
                                <h4 class="service-heading">Web Security</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Portfolio Grid -->
                <section class="bg-light" id="portfolio">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">Portfolio</h2>
                                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="/images/portfolio/01-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Threads</h4>
                                    <p class="text-muted">Illustration</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="/images/portfolio/02-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Explore</h4>
                                    <p class="text-muted">Graphic Design</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="/images/portfolio/03-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Finish</h4>
                                    <p class="text-muted">Identity</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="/images/portfolio/04-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Lines</h4>
                                    <p class="text-muted">Branding</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="/images/portfolio/05-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Southwest</h4>
                                    <p class="text-muted">Website Design</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="/images/portfolio/06-thumbnail.jpg" alt="">
                                </a>
                                <div class="portfolio-caption">
                                    <h4>Window</h4>
                                    <p class="text-muted">Photography</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- About -->
                <section id="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">About</h2>
                                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-image">
                                            <img class="rounded-circle img-fluid" src="/images/about/1.jpg" alt="">
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>2009-2011</h4>
                                                <h4 class="subheading">Our Humble Beginnings</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-image">
                                            <img class="rounded-circle img-fluid" src="/images/about/2.jpg" alt="">
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>March 2011</h4>
                                                <h4 class="subheading">An Agency is Born</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-image">
                                            <img class="rounded-circle img-fluid" src="/images/about/3.jpg" alt="">
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>December 2012</h4>
                                                <h4 class="subheading">Transition to Full Service</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-image">
                                            <img class="rounded-circle img-fluid" src="/images/about/4.jpg" alt="">
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4>July 2014</h4>
                                                <h4 class="subheading">Phase Two Expansion</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-image">
                                            <h4>Be Part
                                                <br>Of Our
                                                <br>Story!</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Team -->
                <section class="bg-light" id="team">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="team-member">
                                    <img class="mx-auto rounded-circle" src="/images/team/1.jpg" alt="">
                                    <h4>Kay Garland</h4>
                                    <p class="text-muted">Lead Designer</p>
                                    <ul class="list-inline social-buttons">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="team-member">
                                    <img class="mx-auto rounded-circle" src="/images/team/2.jpg" alt="">
                                    <h4>Larry Parker</h4>
                                    <p class="text-muted">Lead Marketer</p>
                                    <ul class="list-inline social-buttons">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="team-member">
                                    <img class="mx-auto rounded-circle" src="/images//team/3.jpg" alt="">
                                    <h4>Diana Pertersen</h4>
                                    <p class="text-muted">Lead Developer</p>
                                    <ul class="list-inline social-buttons">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 mx-auto text-center">
                                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Clients -->
                <section class="py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <img class="img-fluid d-block mx-auto" src="/images/logos/envato.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <img class="img-fluid d-block mx-auto" src="/images/logos/designmodo.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <img class="img-fluid d-block mx-auto" src="/images/logos/themeforest.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="#">
                                    <img class="img-fluid d-block mx-auto" src="/images/logos/creative-market.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact -->
                <section id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">Contact Us</h2>
                                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12 text-center">
                                            <div id="success"></div>
                                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <span class="copyright">Copyright &copy; Your Website 2018</span>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-inline social-buttons">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-inline quicklinks">
                                    <li class="list-inline-item">
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Terms of Use</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

@endsection
