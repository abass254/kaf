@extends('front_layout.app', ['pageslug' => 'volunteers'])
@section('content')
<section id="home" class="divider layer-overlay overlay-dark-7 parallax fullscreen" data-stellar-background-ratio="0.4" data-bg-img="https://kulmiyeaidfoundation.org/wp-content/uploads/2020/12/blog.jpg">
  <div class="display-table">
    <div class="display-table-cell">
      <div class="container pt-100 pb-100">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="inline-block pb-60 pl-40 pr-40 pt-90">
              <h1 class="text-uppercase text-white font-raleway font-weight-800 font-78 mb-10 mt-0">Be a  <span class="text-theme-colored">Volunteer</span></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="heading-line-bottom mt-0 mb-30">
          <h3 class="heading-title">Job List</h3>
        </div>
        <div class="icon-box mt-80 mb-0 p-0">
          <a href="#" class="icon icon-gray pull-left mb-0 mr-10">
            <i class="pe-7s-users"></i>
          </a>
          <h3 class="icon-box-title pt-15 mt-0 mb-40">Posts</h3>
          <hr>
          <p class="text-gray">Unfortunately, at this time, we don't have any job vacancies. However, we will add you to our talent pool, and notify you in case that we have a job opening for which you would be a good match.</p>
        </div>
        <br>
        <div class="heading-line-bottom mt-0 mb-30">
          <h3 class="heading-title">Talent Pool</h3>
        </div>
        <form>
           <div class="form-group">
              <label for="form_attachment">C/V Upload</label>
              <input id="form_attachment" name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
              <small>Maximum upload file size: 12 MB</small>
            </div>
            <div class="form-group">
              <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="btn btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
            </div>
          </form>
        </div>
      <div class="col-md-4">
        <div class="heading-line-bottom mt-0 mb-30">
          <h3 class="heading-title">Become a Volunteer</h3>
        </div>
        <form id="volunteer_apply_form" name="job_apply_form" action="includes/become-volunteer.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="form_name">Name <small>*</small></label>
                <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
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
                <label for="form_sex">Sex <small>*</small></label>
                <select id="form_sex" name="form_sex" class="form-control required">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="form_branch">Choose Branch <small>*</small></label>
                <select id="form_branch" name="form_branch" class="form-control required">
                  <option value="UK">UK</option>
                  <option value="USA">USA</option>
                  <option value="Australia">Australia</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="form_message">Message <small>*</small></label>
            <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
          </div>
          <div class="form-group">
            <label for="form_attachment">C/V Upload</label>
            <input id="form_attachment" name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
            <small>Maximum upload file size: 12 MB</small>
          </div>
          <div class="form-group">
            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
          </div>
        </form>
        <!-- Job Form Validation-->
        <script type="text/javascript">
          $("#volunteer_apply_form").validate({
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
    </div>
  </div>
</section>
@endsection