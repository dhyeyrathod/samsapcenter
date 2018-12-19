<!DOCTYPE html>
<html lang="en-US" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths chrome blink">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#ffffff">
        <?php $this->load->view('common/css') ?>
    </head>
    <style type="text/css">
        iframe#_hjRemoteVarsFrame {
            display: none !important;
            width: 1px !important;
            height: 1px !important;
            opacity: 0 !important;
            pointer-events: none !important;
        }
    </style>
    <style>
        /*------------- Form ---------------*/
        
        .nb-form {
            position: fixed;
            z-index: 9999;
            width: 300px;
            background: #FFF;
            right: 20px;
            bottom: -351px;
            transition: all .8s cubic-bezier(.22, .67, .43, 1.22) .2s;
            border-radius: 10px 10px 0 0;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
        }
        
        .nb-form:hover {
            bottom: 0px;
        }
        .fa {

    color: inherit !important;
}
        /*-- User Icon --*/
        
        .nb-form .user-icon {
            position: absolute;
            top: -49px;
            right: 12px;
            display: block;
            width: 58px;
            margin: 20px auto 15px;
            border-radius: 100%;
        }
        /*-- Title --*/
        
        .nb-form .title {
            background: #2a3855;
            font-size: 18px !important;
            padding: 15px 18px !important;
            color: #e6ab45 !important;
            border-radius: 10px 10px 0 0;
            text-align: center;
            font-weight: bold;
        }
        /*-- Text --*/
        
        .nb-form p {
            font-size: 13px;
            margin: 0;
            padding: 15px;
            color: #666;
        }
        
        .nb-form p.message {
            margin-left: 7px;
        }
        /*-- Form Elements --*/
        
        .nb-form form {
            padding: 0 15px 15px 15px;
        }
        
        .nb-form input,
        .nb-form textarea {
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 12px;
            width: 254px;
            max-width: 254px;
            margin-bottom: 10px;
            margin-left: 7px;
            padding: 6px;
            border: none;
            border-radius: 4px;
            color: #999;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .nb-form input:focus,
        .nb-form textarea:focus {
            outline: none;
            box-shadow: none;
        }
        
        .nb-form input[type='submit'] {
            display: block;
            width: 120px;
            margin: 0 auto;
            padding: 0 20px;
            height: 40px;
            line-height: 40px;
            border-radius: 20px;
            cursor: pointer;
            transition: all .4s ease;
            color: #2a3855 !important;
            border: none;
        }
        
        .nb-form input[type='submit']:hover {
            box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.07), 0 1px 7px 0 rgba(0, 0, 0, 0.02), 0 3px 1px -1px rgba(0, 0, 0, 0.1);
        }
        
        .nb-form textarea {
            min-height: 110px;
        }
        
        .nb-form::-webkit-input-placeholder {
            color: #ccb0b0;
        }
        
        .nb-form::-moz-placeholder {
            color: #ccb0b0;
        }
        
        .nb-form:-ms-input-placeholder {
            color: #ccb0b0;
        }
        
        .nb-form:-moz-placeholder {
            color: #ccb0b0;
        }
        
        .nb-form input[type='submit'] {
            background: #e6ab45;
        }
        
        @media screen and (max-width: 676px) {
            .nb-form:hover .user-icon {
                display: none;
            }
            .nb-form .message {
                display: none;
            }
            .nb-form form {
                padding-top: 15px;
            }
            .nb-form {
                right: 50%;
                bottom: -320px;
                left: 50%;
                transform: translateX(-50%);
            }
        }
    </style>
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
                            <form action="http://samspacenter.com/search" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class=" col-lg-3 mb-2">
                                        <select id="country_select" name="country" class="form-control">
                                            <option value="0">---Select Country---</option>
                                            <option value="10">Argentina</option>
                                            <option value="14">Austria</option>
                                            <option value="18">Bangladesh</option>
                                            <option value="20">Belarus</option>
                                            <option value="21">Belgium</option>
                                            <option value="26">Bolivia</option>
                                            <option value="30">Brazil</option>
                                            <option value="33">Bulgaria</option>
                                            <option value="36">Cambodia</option>
                                            <option value="38">Canada</option>
                                            <option value="44">China</option>
                                            <option value="47">Colombia</option>
                                            <option value="56">Cyprus</option>
                                            <option value="58">Denmark</option>
                                            <option value="244">England</option>
                                            <option value="68">Estonia</option>
                                            <option value="74">Finland</option>
                                            <option value="75">France</option>
                                            <option value="81">Georgia</option>
                                            <option value="82">Germany</option>
                                            <option value="85">Greece</option>
                                            <option value="98">Hong Kong</option>
                                            <option value="99">Hungary</option>
                                            <option value="101">India</option>
                                            <option value="102">Indonesia</option>
                                            <option value="105">Ireland</option>
                                            <option value="242">Italy</option>
                                            <option value="107">Italy</option>
                                            <option value="109">Japan</option>
                                            <option value="120">Latvia</option>
                                            <option value="126">Lithuania</option>
                                            <option value="127">Luxembourg</option>
                                            <option value="132">Malaysia</option>
                                            <option value="135">Malta</option>
                                            <option value="142">Mexico</option>
                                            <option value="145">Monaco</option>
                                            <option value="247">Netherlands</option>
                                            <option value="243">New Zealand</option>
                                            <option value="160">Nigeria</option>
                                            <option value="164">Norway</option>
                                            <option value="166">Pakistan</option>
                                            <option value="169">Panama</option>
                                            <option value="172">Peru</option>
                                            <option value="246">Philippines</option>
                                            <option value="175">Poland</option>
                                            <option value="176">Portugal</option>
                                            <option value="178">Qatar</option>
                                            <option value="180">Romania</option>
                                            <option value="181">Russia</option>
                                            <option value="252">sam spa r</option>
                                            <option value="251">sdfdsf g df</option>
                                            <option value="193">Serbia</option>
                                            <option value="196">Singapore</option>
                                            <option value="197">Slovakia</option>
                                            <option value="202">South Africa</option>
                                            <option value="245">South Korea</option>
                                            <option value="205">Spain</option>
                                            <option value="206">Sri Lanka</option>
                                            <option value="211">Sweden</option>
                                            <option value="212">Switzerland</option>
                                            <option value="217">Thailand</option>
                                            <option value="223">Turkey</option>
                                            <option value="239">UAE</option>
                                            <option value="227">Uganda</option>
                                            <option value="228">Ukraine</option>
                                            <option value="230">United Kingdom</option>
                                            <option value="231">United States</option>
                                            <option value="238">Vietnam</option>
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
                                            <option value="2">Beauty Services</option>
                                            <option value="3">Bridal Makeup</option>
                                            <option value="4">Bridegroom Makeup</option>
                                            <option value="5">Salons</option>
                                            <option value="6">Spas</option>
                                            <option value="7">Unisex Salons</option>
                                            <option value="8">Beauty Spas</option>
                                            <option value="9">Ayurvedic Body Massage Centres</option>
                                            <option value="10">Body Massage</option>
                                            <option value="11">Gyms</option>
                                            <option value="12">Night Clubs</option>
                                            <option value="13">Thai Spa</option>
                                            <option value="14">Beauty</option>
                                            <option value="15">Health Care</option>
                                            <option value="17">Salon &amp; Day Spa</option>
                                            <option value="18">Dermatologists</option>
                                            <option value="19">East</option>
                                            <option value="20">Mall</option>
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
                                    <div class="background-holder" style="background-image:url(assets/website_theme/images/slider-1.jpg);"></div>
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
                        <?= form_open('members/new_profile') ?>
                        <div class="row">
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Title <span class="required">*</span></label>
                                    <input placeholder="" name="title" class="form-control" type="text">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Contact No<span class="required">*</span></label>
                                    <input placeholder="" name="contact_number" class="form-control" type="text">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Email <span class="required">*</span></label>
                                    <input placeholder="" name="email_id" class="form-control" type="email">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Description <span class="required">*</span></label>
                                    <textarea placeholder="" name="description" class="form-control"  type="text"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Country </label>
                                    <select class="select-general form-control select2-hidden-accessible" tabindex="-1" name="country_id" aria-hidden="true" id="select_country">
                                        <option label="Select Option"></option>
                                        <?php foreach ($country_data as $country_value) : ?>
                                            <option value="<?= $country_value->id ?>"><?= $country_value->country_name ?></option>
                                        <?php endforeach ; ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>City </label>
                                    <select class="select-general form-control select2-hidden-accessible" id="city_drop_select" tabindex="-1" name="city_id" aria-hidden="true">
                                       <option label="Select Option"></option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Area </label>
                                    <select class="select-general form-control select2-hidden-accessible" tabindex="-1" name="area_id" id="area_select" aria-hidden="true">
                                       <option label="Select Option"></option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Address </label>
                                    <textarea placeholder="" name="address" class="form-control" ></textarea>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Pincode </label>
                                    <input type="text" placeholder="" name="pincode" class="form-control" >
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Google Map Url </label>
                                    <input type="text" placeholder="" name="google_map_url" class="form-control" >
                                 </div>
                              </div>
                              

                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Image<span class="required">*</span></label>
                                    <input placeholder="" name="image_name" class="form-control" type="file" multiple="">
                                 </div>
                              </div>
                              
                              

                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Category </label>
                                    <select class="select-general form-control select2-hidden-accessible" tabindex="-1" name="category_name" aria-hidden="true">
                                       <option label="Select Option"></option>
                                       <option value="0">Beauty Parlours</option>
                                       <option value="1">Beauty Services</option>
                                       <option value="2">Bridal Makeup</option>
                                       <option value="3">Bridegroom Makeup</option>
                                       <option value="4">Salons</option>
                                       <option value="5">Spa</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 340px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-djw6-container"><span class="select2-selection__rendered" id="select2-djw6-container"><span class="select2-selection__placeholder">Choose</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Services </label>
                                    <select class="select-general form-control select2-hidden-accessible" tabindex="-1" name="services_name" aria-hidden="true">
                                       <option label="Select Option"></option>
                                       <option value="0">Body Massage Centres</option>
                                       <option value="1">Beauty Spas</option>
                                       <option value="2">Beauty Artist</option>
                                       <option value="3">Massage</option>
                                       <option value="4">Men Salons</option>
                                       <option value="5">Makeup Artist</option>
                                       <option value="6">Tattoos Desgin</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 340px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-hmr0-container"><span class="select2-selection__rendered" id="select2-hmr0-container"><span class="select2-selection__placeholder">Choose</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Payment Type </label>
                                    <select class="select-general form-control select2-hidden-accessible" tabindex="-1" name="payment_type_name" aria-hidden="true">
                                       <option label="Select Option"></option>
                                       <option value="2">FREE</option>
                                       <option value="1">Paid</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                 <button class="btn btn-default pull-right"><i class="fa fa-save"></i> Save Profile </button>
                              </div>
                         
                        </div>
                          <?= form_close() ?>
                     </div>
                  </div>
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
        var base_url = '<?= base_url() ?>';
    </script>
    <?php $this->load->view('common/js') ?>
    <script type="text/javascript">
        $("#select_country").change(function(){
            var country_id = $("#select_country").val();
            var ajax_url = base_url + "members/get_city";
            $.ajax({
                type: "POST",
                url: ajax_url,
                data: {country_id:country_id},
                success: function (response) {
                    if (response.status == "success") {
                        $("#city_drop_select").html('');
                        var html_str = '<option value="">Select Option</option>';
                        for (var i = 0 ; i < response.data.length ; i++ )
                        {
                            html_str += '<option value="'+ response.data[i].id +'">'+ response.data[i].city_name +'</option>';
                        }
                        $("#city_drop_select").html(html_str);
                    } else {
                        alert(response.message);
                    }   
                },
                error : function (response) {
                    debugger ;
                }
            });
        });
        $("#city_drop_select").change(function(){
        var city_id = $("#city_drop_select").val();
        var ajax_url = base_url + "members/get_area";
        $.ajax({
            type: "POST",
            url: ajax_url,
            data: {city_id:city_id},
            success: function (response) {
                if (response.status == "success") {
                    $("#area_select").html('');
                    var html_str = '<option value="">---Select Area---</option>';
                    for (var i = 0 ; i < response.data.length ; i++ )
                    {
                        html_str += '<option value="'+ response.data[i].id +'">'+ response.data[i].area_name +'</option>';
                    }
                    $("#area_select").html(html_str);
                } else {
                    alert(response.message);
                }   
            },
            error : function (response) {
                debugger ;
            }
        });
    });
    </script>
</body>

</html>
