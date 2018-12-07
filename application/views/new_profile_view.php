<!DOCTYPE html>
<html lang="en-US" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths chrome blink">

<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#ffffff">
        <?php $this->load->view('common/css') ?>
    </head>
</head>

<body data-spy="scroll" data-offset="60">
    <main class=" box-shadow-wide">
        <div class="main-box">
            <section class="font-1 p-0">
                <div class="container">

                    <div class="znav-white znav-container sticky-top navbar-samspa p-2" id="znav-container">
                        <div style="float:right;"><a href="tel:09702205283"><b> <i class="fa fa-phone"></i> +91 9702205283</b></a></div>
                        <div class="clearfix"></div>
                        <nav class="navbar navbar-expand-lg">

                            <a class="navbar-brand overflow-hidden pr-3 mr-2" href="http://samspacenter.com/"><img src="./index_files/SamSpa.png" alt=""></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

                                <div class="hamburger hamburger--emphatic">

                                    <div class="hamburger-box">

                                        <div class="hamburger-inner"></div>

                                    </div>

                                </div>

                            </button>

                            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                                <ul class="navbar-nav fs-0 fw-700">

                                    <li><a href="http://samspacenter.com/free_listing">Free Listing</a></li>

                                    <li><a href="http://samspacenter.com/advertise.html">Advertise</a></li>

                                    <li class="has-dropdown">

                                        <a href="http://samspacenter.com/home#">Language</a>

                                        <ul class="dropdown fs--1">

                                            <li><a href="http://samspacenter.com/home#">Hindi</a></li>

                                            <li><a href="http://samspacenter.com/home#">English</a></li>

                                        </ul>

                                    </li>

                                    <li><a href="http://samspacenter.com/user_login">Login</a> </li>

                                    <li><a class="d-block" href="http://samspacenter.com/signup">Signup</a></li>

                                </ul>

                            </div>

                        </nav>

                    </div>
                    <div class="flexslider flexslider-simple">
                        <div class="fg">
                            <form action="" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class=" col-lg-3 mb-2">
                                        <select id="country_select" name="country" class="form-control">
                                            <option value="0">---Select Country---</option>
                                            
                                        </select>
                                    </div>
                                    <div class=" col-lg-3 mb-2">
                                        <select id="city_select" disabled="" name="city" class="form-control">
                                            <option value="0">---Select City---</option>
                                        </select>
                                    </div>
                                    <div class=" col-lg-3 mb-2">
                                        <select name="category" class="form-control">
                                            <option value="0">---Select Category---</option>
                                            <option value="1">Beauty Parlours</option>
                                        </select>
                                    </div>
                                    <div class=" col-lg-3">
                                        <button class="btn btn-md-lg btn-primary" type="submit" style="width:100%;"> <span class="color-white fw-600">GO</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <ul class="slides">
                            <li data-zanim-timeline="{}" class="" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                <section class="py-0">
                                    <div class="background-holder" style="background-image:url(http://samspacenter.com/assets/website_theme/images/slider-1.jpg);"></div>
                                    <div class="container p-9"></div>
                                </section>
                            </li>
                            <li data-zanim-timeline="{}" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
                                <section class="py-0">
                                    <div class="background-holder" style="background-image:url(http://samspacenter.com/assets/website_theme/images/slider-2.jpg);"></div>
                                    <div class="container p-9"></div>
                                </section>
                            </li>
                            <li data-zanim-timeline="{}" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
                                <section class="py-0">
                                    <div class="background-holder" style="background-image:url(http://samspacenter.com/assets/website_theme/images/slider-3.jpg);"></div>
                                    <div class="container p-9"></div>
                                </section>
                            </li>
                        </ul>
                        <ol class="flex-control-nav flex-control-paging">
                            <li><a href="http://samspacenter.com/home#" class="">1</a></li>
                            <li><a href="http://samspacenter.com/home#" class="flex-active">2</a></li>
                            <li><a href="http://samspacenter.com/home#" class="">3</a></li>
                        </ol>
                        <ul class="flex-direction-nav">
                            <li class="flex-nav-prev"><a class="flex-prev" href="http://samspacenter.com/home#">Previous</a></li>
                            <li class="flex-nav-next"><a class="flex-next" href="http://samspacenter.com/home#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="dashboard light-blue">
            <div class="container">
               <div class="row">
                  
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="dashboard-main-disc">
                        <div class="heading-inner">
                           <p class="title">Edit Profile</p>
                        </div>
                        <?= form_open('') ?>
                        <div class="row">
                           
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>First Name <span class="required">*</span></label>
                                    <input placeholder="" class="form-control" type="text">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Date Of Birth <span class="required">*</span></label>
                                    <input placeholder="" class="form-control" type="text">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Email <span class="required">*</span></label>
                                    <input placeholder="" class="form-control" type="email">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input placeholder="" class="form-control" type="text">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Country </label>
                                    <select class="select-general form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                       <option label="Select Option"></option>
                                       <option value="0">France</option>
                                       <option value="1">   United States</option>
                                       <option value="2">China</option>
                                       <option value="3">Spain</option>
                                       <option value="4">Spain</option>
                                       <option value="5">Turkey</option>
                                       <option value="6">   United Kingdom</option>
                                       <option value="7">Germany</option>
                                       <option value="8">Malaysia</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 340px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-djw6-container"><span class="select2-selection__rendered" id="select2-djw6-container"><span class="select2-selection__placeholder">Choose</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>City </label>
                                    <select class="select-general form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                       <option label="Select Option"></option>
                                       <option value="0">London</option>
                                       <option value="1">Birmingham</option>
                                       <option value="2">Manchester</option>
                                       <option value="3">Glasgow</option>
                                       <option value="4">Liverpool</option>
                                       <option value="5">Bristol</option>
                                       <option value="6">Edinburgh</option>
                                       <option value="7">Nottingham</option>
                                       <option value="8">Cardiff</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 340px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-hmr0-container"><span class="select2-selection__rendered" id="select2-hmr0-container"><span class="select2-selection__placeholder">Choose</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>You are: <span class="required">*</span></label>
                                    <select class="select-general form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                       <option label="Select Option"></option>
                                       <option value="0">Dealer</option>
                                       <option value="1">   Individual</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 340px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-8qc5-container"><span class="select2-selection__rendered" id="select2-8qc5-container"><span class="select2-selection__placeholder">Choose</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                 </div>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                 <div class="form-group">
                                    <label>Address </label>
                                    <input placeholder="" class="form-control" type="text">
                                 </div>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                 <div class="form-group">
                                    <label>About yourself </label>
                                    <textarea cols="6" rows="8" placeholder="" class="form-control"></textarea>
                                 </div>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                 <button class="btn btn-default pull-right"><i class="fa fa-save"></i> Save Profile </button>
                              </div>
                         
                        </div>
                          </form>
                     </div>
                  </div>
                  <!-- <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                     <div class="profile_main-box profile-box-contact">
                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                            <div class="profile-box-header blue-bg">
                                <div class="col-md-12 col-sm-7 col-xs-12">
                                   <img src="./index_files/profile_img.jpg" alt="" class="profile-img img-responsive">
                                   <h2>Jessica Daisy</h2>
                                   <ul class="contact-details">
                                      <li>
                                         <i class="fa fa-map-marker"></i> UK London
                                      </li>
                                      <li>
                                         <i class="fa fa-envelope"></i> jessica@admin.com
                                      </li>
                                      <li>
                                         <i class="fa fa-phone"></i> (123) 000-9876
                                      </li>
                                   </ul>
                               </div>
                               <div class="col-md-12 col-sm-5 col-xs-12">
                                   <div class="profile-btn">
                                      <a class="btn" href=""> <i class="fa fa-envelope-o"></i> Message </a>
                                      <a href="" class="btn"> <i class="fa fa-user"></i> Follow </a>
                                   </div>
                                   <ul class="social-network social-circle onwhite">
                                      <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                      <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                      <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                      <li><a href="#" class="icoLinkedin" title="Linkedin +"><i class="fa fa-linkedin"></i></a></li>
                                   </ul>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                            <div class="profile-box-footer">
                               <a href="#">
                               <span class="value">783</span>
                               <span class="label">Ads Posted</span>
                               </a>
                               <a href="#">
                               <span class="value">912</span>
                               <span class="label">Followers</span>
                               </a>
                               <a href="#">
                               <span class="value">83</span>
                               <span class="label">Messages</span>
                               </a>
                            </div>
                        </div>
                     </div>
                  </div> -->
               </div>
            </div>
         </section>
            <footer style="background-color: #f6c42d;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="footer-nav">
                                <ul>
                                    <li><a href="http://samspacenter.com/contact.html">Contact Us</a></li>
                                    <li><a href="http://samspacenter.com/blog.html">Blog</a></li>
                                    <li><a href="http://samspacenter.com/faq.html">FAQ</a></li>
                                    <li><a href="http://samspacenter.com/testimonial.html">Testimonial</a></li>
                                    <li><a href="http://samspacenter.com/feedback.html">Feedback</a></li>
                                    <li><a href="http://samspacenter.com/business-badge.html">Business Badge</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/54/Chittoor"><span><i class="fa fa-angle-double-right"></i></span> Chittoor</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/90/Guntur"><span><i class="fa fa-angle-double-right"></i></span> Guntur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/133/Kurnool"><span><i class="fa fa-angle-double-right"></i></span> Kurnool</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/176/Nellore"><span><i class="fa fa-angle-double-right"></i></span> Nellore</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/190/Panjim"><span><i class="fa fa-angle-double-right"></i></span> Panjim</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/243/Sirpur"><span><i class="fa fa-angle-double-right"></i></span> Sirpur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/266/Tirupati"><span><i class="fa fa-angle-double-right"></i></span> Tirupati</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/285/Vijayawada"><span><i class="fa fa-angle-double-right"></i></span> Vijayawada</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/287/Visakhapatnam"><span><i class="fa fa-angle-double-right"></i></span> Visakhapatnam</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/371/Guwahati"><span><i class="fa fa-angle-double-right"></i></span> Guwahati</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/453/Aurangabad"><span><i class="fa fa-angle-double-right"></i></span> Aurangabad</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/465/Bariapur"><span><i class="fa fa-angle-double-right"></i></span> Bariapur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/500/Gazipur"><span><i class="fa fa-angle-double-right"></i></span> Gazipur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/510/Islampur"><span><i class="fa fa-angle-double-right"></i></span> Islampur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/553/Muzaffarpur"><span><i class="fa fa-angle-double-right"></i></span> Muzaffarpur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/563/Patna"><span><i class="fa fa-angle-double-right"></i></span> Patna</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/579/Shahpur"><span><i class="fa fa-angle-double-right"></i></span> Shahpur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/606/Banarsi"><span><i class="fa fa-angle-double-right"></i></span> Banarsi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/706/Delhi"><span><i class="fa fa-angle-double-right"></i></span> Delhi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/707/New-Delhi"><span><i class="fa fa-angle-double-right"></i></span> New Delhi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/733/Goa"><span><i class="fa fa-angle-double-right"></i></span> Goa</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/742/Margao"><span><i class="fa fa-angle-double-right"></i></span> Margao</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/749/Panaji"><span><i class="fa fa-angle-double-right"></i></span> Panaji</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/756/Ponda"><span><i class="fa fa-angle-double-right"></i></span> Ponda</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/783/Ahmedabad"><span><i class="fa fa-angle-double-right"></i></span> Ahmedabad</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/790/Amroli"><span><i class="fa fa-angle-double-right"></i></span> Amroli</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/795/Ankleshwar"><span><i class="fa fa-angle-double-right"></i></span> Ankleshwar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/796/Anklesvar-INA"><span><i class="fa fa-angle-double-right"></i></span> Anklesvar INA</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/824/Bhuj"><span><i class="fa fa-angle-double-right"></i></span> Bhuj</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/872/Dhoraji"><span><i class="fa fa-angle-double-right"></i></span> Dhoraji</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/882/Dwarka"><span><i class="fa fa-angle-double-right"></i></span> Dwarka</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/888/Gandhinagar"><span><i class="fa fa-angle-double-right"></i></span> Gandhinagar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/905/Jamnagar"><span><i class="fa fa-angle-double-right"></i></span> Jamnagar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/912/Junagadh"><span><i class="fa fa-angle-double-right"></i></span> Junagadh</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/931/Keshod"><span><i class="fa fa-angle-double-right"></i></span> Keshod</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/934/Khambhat"><span><i class="fa fa-angle-double-right"></i></span> Khambhat</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/974/Morbi"><span><i class="fa fa-angle-double-right"></i></span> Morbi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/986/Navsari"><span><i class="fa fa-angle-double-right"></i></span> Navsari</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/993/Palanpur"><span><i class="fa fa-angle-double-right"></i></span> Palanpur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1007/Porbandar"><span><i class="fa fa-angle-double-right"></i></span> Porbandar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1011/Rajkot"><span><i class="fa fa-angle-double-right"></i></span> Rajkot</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1041/Surat"><span><i class="fa fa-angle-double-right"></i></span> Surat</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1075/Chandigarh"><span><i class="fa fa-angle-double-right"></i></span> Chandigarh</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1122/Firozpur-Jhirka"><span><i class="fa fa-angle-double-right"></i></span> Firozpur Jhirka</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1126/Gurgaon"><span><i class="fa fa-angle-double-right"></i></span> Gurgaon</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1168/Panipat"><span><i class="fa fa-angle-double-right"></i></span> Panipat</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1236/Kulu"><span><i class="fa fa-angle-double-right"></i></span> Kulu</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1237/Manali"><span><i class="fa fa-angle-double-right"></i></span> Manali</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1248/Palampur"><span><i class="fa fa-angle-double-right"></i></span> Palampur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1262/Shimla"><span><i class="fa fa-angle-double-right"></i></span> Shimla</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1303/Jammu"><span><i class="fa fa-angle-double-right"></i></span> Jammu</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1305/Jammu-Tawi"><span><i class="fa fa-angle-double-right"></i></span> Jammu Tawi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1327/Pattan"><span><i class="fa fa-angle-double-right"></i></span> Pattan</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1425/Jamshedpur"><span><i class="fa fa-angle-double-right"></i></span> Jamshedpur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1492/Ranchi"><span><i class="fa fa-angle-double-right"></i></span> Ranchi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1554/Belluru"><span><i class="fa fa-angle-double-right"></i></span> Belluru</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1558/Bangalore"><span><i class="fa fa-angle-double-right"></i></span> Bangalore</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1725/Mangalore"><span><i class="fa fa-angle-double-right"></i></span> Mangalore</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1750/Mysore"><span><i class="fa fa-angle-double-right"></i></span> Mysore</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/1930/Kochi"><span><i class="fa fa-angle-double-right"></i></span> Kochi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2109/Balaghat"><span><i class="fa fa-angle-double-right"></i></span> Balaghat</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2145/Bhopal"><span><i class="fa fa-angle-double-right"></i></span> Bhopal</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2229/Indore"><span><i class="fa fa-angle-double-right"></i></span> Indore</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2232/Jabalpur"><span><i class="fa fa-angle-double-right"></i></span> Jabalpur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2499/Aurangabad"><span><i class="fa fa-angle-double-right"></i></span> Aurangabad</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2529/Buldhana"><span><i class="fa fa-angle-double-right"></i></span> Buldhana</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2674/Mahabaleshwar"><span><i class="fa fa-angle-double-right"></i></span> Mahabaleshwar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2707/Mumbai"><span><i class="fa fa-angle-double-right"></i></span> Mumbai</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2715/Nagpur"><span><i class="fa fa-angle-double-right"></i></span> Nagpur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2724/Nashik"><span><i class="fa fa-angle-double-right"></i></span> Nashik</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2726/Navi-Mumbai"><span><i class="fa fa-angle-double-right"></i></span> Navi Mumbai</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2763/Pune"><span><i class="fa fa-angle-double-right"></i></span> Pune</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/2995/Bhubaneswar"><span><i class="fa fa-angle-double-right"></i></span> Bhubaneswar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/3124/Pondicherry"><span><i class="fa fa-angle-double-right"></i></span> Pondicherry</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/3197/Hariana"><span><i class="fa fa-angle-double-right"></i></span> Hariana</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/3203/Jalandhar"><span><i class="fa fa-angle-double-right"></i></span> Jalandhar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/3378/Jaipur"><span><i class="fa fa-angle-double-right"></i></span> Jaipur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/3532/Udaipur"><span><i class="fa fa-angle-double-right"></i></span> Udaipur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/3540/Gangtok"><span><i class="fa fa-angle-double-right"></i></span> Gangtok</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/3659/Chennai"><span><i class="fa fa-angle-double-right"></i></span> Chennai</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/3683/Coimbatore"><span><i class="fa fa-angle-double-right"></i></span> Coimbatore</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/3925/Manali"><span><i class="fa fa-angle-double-right"></i></span> Manali</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/4318/Tirukkattuppalli"><span><i class="fa fa-angle-double-right"></i></span> Tirukkattuppalli</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/4460/Hyderabad"><span><i class="fa fa-angle-double-right"></i></span> Hyderabad</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/4536/Agra"><span><i class="fa fa-angle-double-right"></i></span> Agra</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/4546/Allahabad"><span><i class="fa fa-angle-double-right"></i></span> Allahabad</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/4861/Kanpur"><span><i class="fa fa-angle-double-right"></i></span> Kanpur</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/4933/Lucknow"><span><i class="fa fa-angle-double-right"></i></span> Lucknow</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/5022/Noida"><span><i class="fa fa-angle-double-right"></i></span> Noida</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/5211/Varanasi"><span><i class="fa fa-angle-double-right"></i></span> Varanasi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/5304/Srinagar"><span><i class="fa fa-angle-double-right"></i></span> Srinagar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/5335/Aurangabad"><span><i class="fa fa-angle-double-right"></i></span> Aurangabad</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/5443/Darjiling"><span><i class="fa fa-angle-double-right"></i></span> Darjiling</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/5583/Kolkata"><span><i class="fa fa-angle-double-right"></i></span> Kolkata</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="http://samspacenter.com/spacenters/city/5708/Simla"><span><i class="fa fa-angle-double-right"></i></span> Simla</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <section class="fpm">
                <div class="container">
                    <p class="fp">Spa Company is one of the best and leading companies in India known for delivering the quality services. It gives the unique experience to the clients by our special treatment and massage therapies. Spa experts of our company have designed natural treatments where you will come across with different herbal and ancient techniques, which gives the best mode in the field of relaxation. Our Spa experts are trained and professionals who provide customized services according to the customers need. These experts are friendlier in nature and solve the problem of the clients in an effective way.</p>
                </div>
            </section>
            <section class="background-primary text-center py-4">
                <div class="container">
                    <div class="row align-items-center" style="opacity: 0.85;">
                        <div class="col-sm-2 text-sm-left">
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                            <p class="color-warning lh-6 mb-0 fw-600 cp">© Copyright 2018 Sam Spa Center &nbsp;&nbsp;&nbsp;<a class="color-warning" href="http://samspacenter.com/privacy-policy.html">Privacy Policy</a> | <a class="color-warning " href="http://samspacenter.com/terms-of-use.html">Terms of Use</a></p>
                        </div>
                        <div class="col text-sm-right mt-4 mt-sm-0"></div>
                    </div>
                </div>
            </section>
            <div class="rightfixed">
                <a href="http://samspacenter.com/free_listing" class="frilst "></a>
                <a href="http://samspacenter.com/customer-care.html" class="cscare "></a>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        var base_url = 'http://samspacenter.com/';
    </script>
    <?php $this->load->view('common/js') ?>
</body>

</html>