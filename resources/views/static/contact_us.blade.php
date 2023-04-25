@extends('front_layout.app', ['pageslug' => 'contact_us'])
@section('content')
<section id="home" class="divider parallax" data-stellar-background-ratio="0.4" data-bg-img="{{ asset('asset/images/kulmiye/pictures/IMG_3476.JPG') }}">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pt-100 pb-100">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="inline-block pb-60 pl-40 pr-40 pt-90">
                  <h1 class="text-uppercase text-white font-raleway font-weight-800 font-78 mb-10 mt-0">Contact <span class="text-theme-colored">US</span></h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: featured project -->
    <section class="divider layer-overlay overlay-white-9" data-bg-img="{{ asset('asset/images/kulmiye/pictures/culture.jpeg') }}">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-7">
            <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Subject <small>*</small></label>
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>
            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
          <div class="col-md-5">
            <h3 class="line-bottom mt-0">Get in touch with us</h3>
            <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
              <li><a href="https://www.facebook.com/pages/category/Non-Governmental-Organization--NGO-/Kulmiye-Aid-Foundation-KAF-449003625852668/" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/kulmiyeaid" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li><a href="mailto:info@kulmiyeaidfoundation.org" data-bg-color="#4C75A3"><i class="fa fa-envelope"></i></a></li>
              <li><a href="https://instagram.com/kulmiyeaid?igshid=124tmamrxzeep" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://youtube.com/channel/UCmgpb3G6Vrq80Y3zGbK9YLQ" data-bg-color="#D71619"><i class="fab fa-youtube"></i></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=252613400009&amp;text=i+am+interested+in+your+causes" data-bg-color="#A4CA39"><i class="fa fa-whatsapp"></i></a></li>
            </ul>

            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Our Office Location</h5>
                <p>Hero Darawish,</p>
                <p>Puntland and South Mudug.</p>
                <p>Galkacyo</p>
                <p>Somalia</p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Contact Number</h5>
                <p><a href="tel:+252 907 612 340">+252 907 612 340</a></p>
                <p><a href="tel:+252 619 39 00 05">+252 619 39 00 05</a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Email Address</h5>
                <p><a href="mailto:supporte@yourdomin.com">info@kulmiyeaidfoundation.org</a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Make a Video Call</h5>
                <p>info@kulmiyeaidfoundation.org</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- divider: Donate Now -->
     <section id="contact" class="divider bg-lighter"> 
@endsection