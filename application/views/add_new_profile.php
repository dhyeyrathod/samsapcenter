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
                    <?php $this->load->view('common/header') ?>
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
                        <?= form_open_multipart('members/new_profile') ?>
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
                                    <input placeholder="" name="image_to_upload[]" class="form-control" type="file" multiple="">
                                 </div>
                              </div>
                              
                              

                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Category </label>
                                    <select class="select-general form-control select2-hidden-accessible" tabindex="-1" name="category_id" aria-hidden="true">
                                        <option>--Select Category--</option>
                                        <?php foreach ($category_key as $category_data) : ?>
                                            <option value="<?= $category_data->id ?>"><?= $category_data->category_name ?></option>
                                        <?php endforeach ; ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Services </label>
                                    <select class="select-general form-control select2-hidden-accessible" tabindex="-1" name="services_id" aria-hidden="true">
                                        <option>--Select Service--</option>
                                        <?php foreach ($services_key as $key => $services_data) : ?>
                                            <option value="<?= $services_data->id ?>"><?= $services_data->services_name ?></option>
                                        <?php endforeach ; ?>
                                    </select>
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
            <?php $this->load->view('common/footer') ?>
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
