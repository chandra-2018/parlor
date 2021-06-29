<?php include('includes/header.php') ?>

    <div id="betty-page"> <a href="#" class="js-betty-nav-toggle betty-nav-toggle"><i></i></a>
        <!-- Sidebar Section -->
        <aside id="betty-aside">
            <!-- Logo -->
            <div class="betty-logo">
                <a href="index.html"><img src="<?php echo $this->config->base_url() ?>assets/images/logo.png" alt=""></a>
                <h1><a href="index.html">Betty</a> <span>Center of Beauty</span></h1>
            </div>
           


            <?php include('includes/mainMenu.php'); ?>

            <!-- Info -->
            <div class="betty-contact-info">
                <div class="feat-inner"> <span class="icon et-clock"></span>
                    <div class="feat-info">
                        <h5>Mon-Fri: 08.00 - 19.00</h5>
                        <h6>Sunday: Closed</h6>
                    </div>
                </div>
            </div>
            <div class="betty-contact-info">
                <div class="feat-inner"> <span class="icon et-phone"></span>
                    <div class="feat-info">
                        <h5>+1 203-123-0606</h5>
                        <h6>515 West Ave Norwalk</h6>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div class="betty-footer">
                <ul>
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                </ul>
            </div>
        </aside>
        <!-- Main Section -->
        <div id="betty-main">
            <aside id="betty-hero" class="js-fullheight">
                <!-- Slider -->
                <div class="flexslider js-fullheight">
                    <ul class="slides">
                       <li style="background-image: url(<?php echo $this->config->base_url() ?>assets/images/slider/02.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 js-fullheight slider-text">
                                        <div class="slider-text-inner">
                                            <div class="desc">
                                                <h1>Everthing is possible with our salon!</h1>
                                                <p>We make the best makeup in 515 West Ave Norwalk</p>
                                                <div class="btn btn-contact"><a href="https://1.envato.market/BjNML" target="_blank">Buy Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="background-image: url(<?php echo $this->config->base_url() ?>assets/images/slider/01.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 js-fullheight slider-text">
                                        <div class="slider-text-inner">
                                            <div class="desc">
                                                <h1>Welcome to Betty Beauty Salon!</h1>
                                                <p>Everthing is possible with our salon</p>
                                                <div class="btn btn-contact"><a href="https://1.envato.market/BjNML" target="_blank">Buy Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="background-image: url(<?php echo $this->config->base_url() ?>assets/images/slider/03.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 js-fullheight slider-text">
                                        <div class="slider-text-inner">
                                            <div class="desc">
                                                <h1>Everthing is possible with our salon!</h1>
                                                <p>We make the best hairdressing in 515 West Ave Norwalk</p>
                                                <div class="btn btn-contact"><a href="https://1.envato.market/BjNML" target="_blank">Buy Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- Services -->
            <div class="betty-home-services betty-services">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <h2 class="betty-heading">Our Services</h2> <span class="heading-meta">We offer a wide range of beauty services</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?php echo $this->config->base_url() ?>assets/images/services/01.jpg" alt=""> </div>
                                <div class="con">
                                    <a href="services-page.html">
                                        <h5>Makeup</h5>
                                        <p><i class="ti-arrow-right"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?php echo $this->config->base_url() ?>assets/images/services/02.jpg" alt=""> </div>
                                <div class="con">
                                    <a href="services-page.html">
                                        <h5>Hairdressing</h5>
                                        <p><i class="ti-arrow-right"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?php echo $this->config->base_url() ?>assets/images/services/03.jpg" alt=""> </div>
                                <div class="con">
                                    <a href="services-page.html">
                                        <h5>Barber</h5>
                                        <p><i class="ti-arrow-right"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?php echo $this->config->base_url() ?>assets/images/services/04.jpg" alt=""> </div>
                                <div class="con">
                                    <a href="services-page.html">
                                        <h5>Massage Theraphy</h5>vi
                                        <p><i class="ti-arrow-right"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?php echo $this->config->base_url() ?>assets/images/services/05.jpg" alt=""> </div>
                                <div class="con">
                                    <a href="services-page.html">
                                        <h5>Body Treatments</h5>
                                        <p><i class="ti-arrow-right"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?php echo $this->config->base_url() ?>assets/images/services/06.jpg" alt=""> </div>
                                <div class="con">
                                    <a href="services-page.html">
                                        <h5>Aromatherapy</h5>
                                        <p><i class="ti-arrow-right"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog -->
            <div class="betty-home-blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <h2 class="betty-heading">Latest News</h2> <span class="heading-meta">Read about latest health trends</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="blog-entry">
                                <a href="post.html" class="blog-img"><img src="<?php echo $this->config->base_url() ?>assets/images/blog/2.jpg" class="img-fluid" alt=""></a>
                                <div class="desc"> <span><a href="#">Makeup</a></span>
                                    <h4><a href="post.html">Top 5 Benefits of Body Polishing</a></h4> <span class="text-right"><a href="#">Dec 30, 2021</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog-entry">
                                <a href="post.html" class="blog-img"><img src="<?php echo $this->config->base_url() ?>assets/images/blog/1.jpg" class="img-fluid" alt=""></a>
                                <div class="desc"> <span><a href="#">Makeup</a></span>
                                    <h4><a href="post.html">Hair Accessories You Should Try</a></h4> <span class="text-right"><a href="#">Dec 29, 2021</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog-entry">
                                <a href="post.html" class="blog-img"><img src="<?php echo $this->config->base_url() ?>assets/images/blog/3.jpg" class="img-fluid" alt=""></a>
                                <div class="desc"> <span><a href="#">Barber</a></span>
                                    <h4><a href="post.html">Trending Hairstyles For Men in 2021</a></h4> <span class="text-right"><a href="#">Dec 20, 2021</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="btn btn-contact"><a href="blog.html">All Blog Post</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testiominals -->
            <div class="betty-testimonial testimonials bg-img bg-fixed" data-background="<?php echo $this->config->base_url() ?>assets/images/banner.jpg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="section-head col-md-4">
                            <h4>What our clients say about betty</h4>
                            <p>Quisque consectetur massa id ipsum soltudin ultrices. Pellentesque the sceisque justo.</p>
                        </div>
                        <div class="owl-carousel owl-theme col-md-8">
                            <div class="item-box"> <span class="quote">
                                    <img src="<?php echo $this->config->base_url() ?>assets/images/quot.png" alt="">
                                </span>
                                <p>Quality dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the lemon sanleo.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="<?php echo $this->config->base_url() ?>assets/images/team/a.png" alt=""> </div>
                                    <div class="cont">
                                        <h6>Emma Brown</h6> <span>Lawyer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box"> <span class="quote">
                                    <img src="<?php echo $this->config->base_url() ?>assets/images/quot.png" alt="">
                                </span>
                                <p>Quality dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the lemon sanleo.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="<?php echo $this->config->base_url() ?>assets/images/team/b.png" alt=""> </div>
                                    <div class="cont">
                                        <h6>Jason White</h6> <span>Model</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-box"> <span class="quote">
                                    <img src="<?php echo $this->config->base_url() ?>assets/images/quot.png" alt="">
                                </span>
                                <p>Quality dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the lemon sanleo.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="<?php echo $this->config->base_url() ?>assets/images/team/c.png" alt=""> </div>
                                    <div class="cont">
                                        <h6>Emily Smith</h6> <span>Psychologist</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brands -->
            <div class="betty-brands brands">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <h2 class="betty-heading">Our Brands</h2> <span class="heading-meta">We use only the high quality original products</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 owl-carousel owl-theme">
                            <div class="brand-logo">
                                <a href="#"><img src="<?php echo $this->config->base_url() ?>assets/images/brands/1.png" alt=""></a>
                            </div>
                            <div class="brand-logo">
                                <a href="#"><img src="<?php echo $this->config->base_url() ?>assets/images/brands/2.png" alt=""></a>
                            </div>
                            <div class="brand-logo">
                                <a href="#"><img src="<?php echo $this->config->base_url() ?>assets/images/brands/3.png" alt=""></a>
                            </div>
                            <div class="brand-logo">
                                <a href="#"><img src="<?php echo $this->config->base_url() ?>assets/images/brands/4.png" alt=""></a>
                            </div>
                            <div class="brand-logo">
                                <a href="#"><img src="<?php echo $this->config->base_url() ?>assets/images/brands/5.png" alt=""></a>
                            </div>
                            <div class="brand-logo">
                                <a href="#"><img src="<?php echo $this->config->base_url() ?>assets/images/brands/6.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div id="betty-footer2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="betty-logo">
                                <a href="index.html"><img src="<?php echo $this->config->base_url() ?>assets/images/logo.png" alt=""></a>
                                <h2 class="text-center">Betty
                                    <span>Center of Beauty</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <div class="betty-footer">
                                <p>Betty by DuruThemes. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include('includes/footer.php') ?>