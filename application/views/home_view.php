<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#ffffff">
        <?php $this->load->view('common/css') ?>
    </head>
    <body data-spy="scroll"  data-offset="60">
        <main class=" box-shadow-wide">
            <div class="main-box">
                <section class="font-1 p-0">
                    <div class="container">
                        <?php $this->load->view('common/header') ?>
                        <div class="flexslider flexslider-simple">
                            <div class="fg">
                                <form class="zform mt-3" _lpchecked="1">
                                    <div class="row">
                                        <div class=" col-lg-4"> 
                                            <input class="form-control" type="text" placeholder="City Search" required="">
                                        </div>
                                        <div class=" col-lg-3">
                                            <select class="form-control" >
                                                <option>Services</option>
                                            </select>
                                        </div>
                                        <div class=" col-lg-3">
                                            <select class="form-control">
                                                <option>Area</option>
                                            </select>
                                        </div>
                                        <div class=" col-lg-2"> 
                                            <button class="btn btn-md-lg btn-primary" type="Go" style="width:100%;"> <span class="color-white fw-600">GO</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <ul class="slides">
                                <li data-zanim-timeline="{}" class="" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                    <section class="py-0">
                                        <div class="background-holder" style="background-image:url(<?= base_url('assets') ?>/images/slider-1.jpg);"></div>
                                        <div class="container p-9">
                                        </div>
                                    </section>
                                </li>
                                <li data-zanim-timeline="{}" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
                                    <section class="py-0">
                                        <div class="background-holder" style="background-image:url(<?= base_url('assets') ?>/images/slider-2.jpg);"></div>
                                        <div class="container p-9">
                                        </div>
                                    </section>
                                </li>
                                <li data-zanim-timeline="{}" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                    <section class="py-0">
                                        <div class="background-holder" style="background-image:url(<?= base_url('assets') ?>/images/slider-3.jpg);"></div>
                                        <div class="container p-9">
                                        </div>
                                    </section>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="font-1 py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 mr-0">
                                <div class="vertical-menu">
                                    <h5>Categories</h5>
                                    <hr class="color-9 my-2">
                                    <ul>
                                        <li><a href="beauty-parlours.html"><span class="personal-icon icon1"></span> Beauty Parlours</a></li>
                                        <li><a href="beauty-services.html"><span class="personal-icon icon2"></span> Beauty Services</a></li>
                                        <li><a href="bridal-makeup.html"><span class="personal-icon icon3"></span> Bridal Makeup</a></li>
                                        <li><a href="bridegroom-makeup.html"><span class="personal-icon icon4"></span> Bridegroom Makeup</a></li>
                                        <li><a href="salons.html"><span class="personal-icon icon5"></span> Salons</a></li>
                                        <li><a href="spas.html"><span class="personal-icon icon6"></span> Spas</a></li>
                                    </ul>
                                </div>
                                <div class="vertical-menu">
                                    <h5>Popular Areas</h5>
                                    <hr class="color-9 my-2">
                                    <ul>
                                        <li><a href="all-area.html">All Area</a></li>
                                        <li><a href="gurgaon.html">Gurgaon</a></li>
                                        <li><a href="new-delhi.html">New Delhi</a></li>
                                        <li><a href="rohini.html">Rohini</a></li>
                                        <li><a href="dwarka.html">Dwarka</a></li>
                                        <li><a href="Laxmi-nagar.html">Laxmi Nagar</a></li>
                                        <li><a href="karol-bagh.html">Karol Bagh</a></li>
                                        <li><a href="connaught-place.html">Connaught Place</a></li>
                                        <li><a href="poorvi-pitampura.html">Poorvi Pitampura</a></li>
                                        <li><a href="uttam-nagar.html">Uttam Nagar</a></li>
                                        <li><a href="#">See More <span><i class="fa fa-chevron-right readmore"></i></span></a></li>
                                    </ul>
                                </div>
                                <div class="vertical-menu">
                                    <h5>Also use for:</h5>
                                    <hr class="color-9 my-2">
                                    <ul>
                                        <li><a href="body-massage-centres.html">Body Massage Centres</a></li>
                                        <li><a href="beauty-spas.html"> Beauty Spas</a></li>
                                        <li><a href="beauty-artist.html">Beauty Artist</a></li>
                                        <li><a href="massage-centres-for-men.html">Massage Centres For Men</a></li>
                                        <li><a href="men-salons.html">Men Salons</a></li>
                                        <li><a href="makeup-artist.html">Makeup Artist</a></li>
                                        <li><a href="tattoos-desgin.html">Tattoos Desgin</a></li>
                                        <li><a href="bridal-makeup.html">Bridal Makeup</a></li>
                                        <li><a href="groom-makeup.html">Groom Makeup</a></li>
                                        <li><a href="manicure.html">Manicure</a></li>
                                        <li><a href="padicure.html">Padicure</a></li>
                                        <li><a href="skin-treatment.html">Skin Treatment</a></li>
                                        <li><a href="tattoo-removal-services.html">Tattoo Removal Services</a></li>
                                        <li><a href="#">See More <span><i class="fa fa-chevron-right readmore"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 px-0">
                                <div class="container text-center">
                                    <div class="row mb-6">
                                        <div class="col-lg-12">
                                            <h3 class="fs-2 fs-md-3"> Premium Listing</h3>
                                            <hr class="short" data-zanim="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;width&quot;:0},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;width&quot;:&quot;4.20873rem&quot;},&quot;duration&quot;:0.8}" style="width: 4.20873rem; opacity: 1;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4  mb-3 mt-3 imgp">
                                            <a  class="cuadroa" href="details.html">
                                                <div class="cuadro_intro_hover ">
                                                    <p style="text-align:center;">
                                                        <img src="<?= base_url('assets') ?>/images/Premium-1.jpg" class="img-responsive" alt="">
                                                    </p>
                                                    <div class="caption">
                                                        <div class="blur"></div>
                                                        <div class="caption-text">
                                                            <h3>Swedish Massage Therapy</h3>
                                                            <p><b>You will enjoy different kinds.</b> </p>
                                                            <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 mb-3 mt-3 imgp">
                                            <a  class="cuadroa" href="details.html">
                                                <div class="cuadro_intro_hover ">
                                                    <p style="text-align:center;">
                                                        <img src="<?= base_url('assets') ?>/images/Premium-2.jpg" class="img-responsive" alt="">
                                                    </p>
                                                    <div class="caption">
                                                        <div class="blur"></div>
                                                        <div class="caption-text">
                                                            <h3>Aromatherapy Massage.</h3>
                                                            <p><b>You will enjoy different kinds.</b> </p>
                                                            <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 mb-3 mt-3 imgp">
                                            <a  class="cuadroa" href="details.html">
                                                <div class="cuadro_intro_hover ">
                                                    <p style="text-align:center;">
                                                        <img src="<?= base_url('assets') ?>/images/Premium-3.jpg" class="img-responsive" alt="">
                                                    </p>
                                                    <div class="caption">
                                                        <div class="blur"></div>
                                                        <div class="caption-text">
                                                            <h3>Hot Stone Massage</h3>
                                                            <p><b>You will enjoy different kinds.</b> </p>
                                                            <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 mb-3 mt-3 imgp">
                                            <a  class="cuadroa" href="details.html">
                                                <div class="cuadro_intro_hover ">
                                                    <p style="text-align:center;">
                                                        <img src="<?= base_url('assets') ?>/images/Premium-4.jpg" class="img-responsive" alt="">
                                                    </p>
                                                    <div class="caption">
                                                        <div class="blur"></div>
                                                        <div class="caption-text">
                                                            <h3>Deep Tissue Massage</h3>
                                                            <p><b>You will enjoy different kinds.</b> </p>
                                                            <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4  mb-3 mt-3 imgp">
                                            <div class="cuadro_intro_hover ">
                                                <p style="text-align:center;">
                                                    <img src="<?= base_url('assets') ?>/images/Premium-5.jpg" class="img-responsive" alt="">
                                                </p>
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h3>Shiatsu Massage</h3>
                                                        <p><b>You will enjoy different kinds.</b> </p>
                                                        <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4  mb-3 mt-3 imgp">
                                            <div class="cuadro_intro_hover ">
                                                <p style="text-align:center;">
                                                    <img src="<?= base_url('assets') ?>/images/Premium-6.jpg" class="img-responsive" alt="">
                                                </p>
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h3>Thai Massage</h3>
                                                        <p><b>You will enjoy different kinds.</b> </p>
                                                        <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4  mb-3 mt-3 imgp">
                                            <div class="cuadro_intro_hover ">
                                                <p style="text-align:center;">
                                                    <img src="<?= base_url('assets') ?>/images/Premium-7.jpg" class="img-responsive" alt="">
                                                </p>
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h3>Pregnancy Massage</h3>
                                                        <p><b>You will enjoy different kinds.</b> </p>
                                                        <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4  mb-3 mt-3 imgp">
                                            <div class="cuadro_intro_hover ">
                                                <p style="text-align:center;">
                                                    <img src="<?= base_url('assets') ?>/images/Premium-8.jpg" class="img-responsive" alt="">
                                                </p>
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h3>Reflexology</h3>
                                                        <p><b>You will enjoy different kinds.</b> </p>
                                                        <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4  mb-3 mt-3 imgp">
                                            <div class="cuadro_intro_hover ">
                                                <p style="text-align:center;">
                                                    <img src="<?= base_url('assets') ?>/images/Premium-8.jpg" class="img-responsive" alt="">
                                                </p>
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h3>Reflexology</h3>
                                                        <p><b>You will enjoy different kinds.</b> </p>
                                                        <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container text-center">
                                    <div class="row mb-6">
                                        <div class="col">
                                            <h3 class="fs-2 fs-md-3">Services</h3>
                                            <hr class="short" data-zanim="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;width&quot;:0},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;width&quot;:&quot;4.20873rem&quot;},&quot;duration&quot;:0.8}" style="width: 4.20873rem; opacity: 1;">
                                        </div>
                                    </div>
                                    <div data-dots="true" data-nav="true" data-items='{"0":{"items":2},"600":{"items":2}}' data-autoplay="true" data-margin="30" data-loop="true" class="owl-carousel owl-theme owl-nav-outer  owl-dot-round">
                                        <div class="item"><img src="<?= base_url('assets') ?>/images/services-1.jpg" class="radius-primary"/></div>
                                        <div class="item"><img src="<?= base_url('assets') ?>/images/services-2.jpg" class="radius-primary"/></div>
                                        <div class="item"><img src="<?= base_url('assets') ?>/images/services-3.jpg" class="radius-primary"/></div>
                                        <div class="item"><img src="<?= base_url('assets') ?>/images/services-4.jpg" class="radius-primary"/></div>
                                        <div class="item"><img src="<?= base_url('assets') ?>/images/services-5.jpg" class="radius-primary"/></div>
                                        <div class="item"><img src="<?= base_url('assets') ?>/images/services-6.jpg" class="radius-primary"/></div>
                                        <div class="item"><img src="<?= base_url('assets') ?>/images/services-4.jpg" class="radius-primary"/></div>
                                        <div class="item"><img src="<?= base_url('assets') ?>/images/services-5.jpg" class="radius-primary"/></div>
                                        <div class="item"><img src="<?= base_url('assets') ?>/images/services-6.jpg" class="radius-primary"/></div>
                                    </div>
                                </div>
                                <div class="container text-center mt-5">
                                    <div class="row mb-6">
                                        <div class="col">
                                            <h3 class="fs-2 fs-md-3"> Free Listing</h3>
                                            <hr class="short" data-zanim="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;width&quot;:0},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;width&quot;:&quot;4.20873rem&quot;},&quot;duration&quot;:0.8}" style="width: 4.20873rem; opacity: 1;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4  mb-3 mt-3 imgp">
                                            <div class="cuadro_intro_hover ">
                                                <p style="text-align:center;">
                                                    <img src="<?= base_url('assets') ?>/images/portrait-1.jpg" class="img-responsive" alt="">
                                                </p>
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h3>Swedish Massage Therapy</h3>
                                                        <p><b>You will enjoy different kinds.</b> </p>
                                                        <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3 mt-3 imgp">
                                            <div class="cuadro_intro_hover ">
                                                <p style="text-align:center;">
                                                    <img src="<?= base_url('assets') ?>/images/portrait-3.jpg" class="img-responsive" alt="">
                                                </p>
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h3>Aromatherapy Massage.</h3>
                                                        <p><b>You will enjoy different kinds.</b> </p>
                                                        <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3 mt-3 imgp">
                                            <div class="cuadro_intro_hover ">
                                                <p style="text-align:center;">
                                                    <img src="<?= base_url('assets') ?>/images/portrait-4.jpg" class="img-responsive" alt="">
                                                </p>
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h3>Hot Stone Massage</h3>
                                                        <p><b>You will enjoy different kinds.</b> </p>
                                                        <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3 mt-3 imgp">
                                            <div class="cuadro_intro_hover ">
                                                <p style="text-align:center;">
                                                    <img src="<?= base_url('assets') ?>/images/portrait-5.jpg" class="img-responsive" alt="">
                                                </p>
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h3>Deep Tissue Massage</h3>
                                                        <p><b>You will enjoy different kinds.</b> </p>
                                                        <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3 mt-3 imgp">
                                            <div class="cuadro_intro_hover ">
                                                <p style="text-align:center;">
                                                    <img src="<?= base_url('assets') ?>/images/portrait-5.jpg" class="img-responsive" alt="">
                                                </p>
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h3>Deep Tissue Massage</h3>
                                                        <p><b>You will enjoy different kinds.</b> </p>
                                                        <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3 mt-3 imgp">
                                            <div class="cuadro_intro_hover ">
                                                <p style="text-align:center;">
                                                    <img src="<?= base_url('assets') ?>/images/portrait-5.jpg" class="img-responsive" alt="">
                                                </p>
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h3>Deep Tissue Massage</h3>
                                                        <p><b>You will enjoy different kinds.</b> </p>
                                                        <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage. Packages offered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php $this->load->view('common/footer') ?>
            </div>
        </main>
        <?php $this->load->view('common/js') ?>
    </body>
</html>