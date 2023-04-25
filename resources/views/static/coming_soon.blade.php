@extends('front_layout.app', ['pageslug' => 'coming_soon'])
@section('content')
<div class="main-content"> 
    <!-- Section: home -->
  <section id="home" class="bg-lightest fullscreen">
    <div class="display-table text-center">
      <div class="display-table-cell">
        <div class="container pt-0 pb-0"><div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h1 class="text-theme-color-2 font-weight-100 font-64">We Are Coming Soon</h1>
              
              
              <div id="countdown17" class="ClassyCountdownDemo"></div>
              
              <!-- jQuery Classy Countdown Scripts and CSS -->
              <link href="{{ asset('asset/js/classycountdown/css/jquery.classycountdown.css') }}" rel="stylesheet" type="text/css">
              <script src="{{ asset('asset/js/classycountdown/js/jquery.knob.js') }}"></script> 
              <script src="{{ asset('asset/js/classycountdown/js/jquery.throttle.js') }}"></script> 
              <script src="{{ asset('asset/js/classycountdown/js/jquery.classycountdown.js') }}"></script> 

              <!-- Classy Countdown Script -->
              <script type="text/javascript">
                $(document).ready(function() {
                  $('#countdown17').ClassyCountdown({
                      theme: "flat-colors-very-wide",
                      end: $.now() + 2592000
                  });
                });
              </script>
              <!-- Mailchimp Subscription Form Validation-->
              <script type="text/javascript">
                $('#mailchimp-subscription-form').ajaxChimp({
                    callback: mailChimpCallBack,
                    url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                });

                function mailChimpCallBack(resp) {
                    // Hide any previous response text
                    var $mailchimpform = $('#mailchimp-subscription-form'),
                        $response = '';
                    $mailchimpform.children(".alert").remove();
                    if (resp.result === 'success') {
                        $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    } else if (resp.result === 'error') {
                        $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    }
                    $mailchimpform.prepend($response);
                }
              </script>

              <p class="font-14">Sorry.... We are improving and fixing problems of our website.<br>We will be back very soon....</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection