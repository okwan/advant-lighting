<?php
/* Template Name: Contact Page */
 get_header(); ?>

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

  <div class="container">
    <div class="row">

      <!-- main start -->
      <!-- ================ -->
      <div class="main col-md-12 space-bottom">
        <h2 class="title">Drop Us a Line</h2>
        <div class="row">
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quisquam.</p>
            <div class="alert alert-success hidden" id="MessageSent">
              We have received your message, we will contact you very soon.
            </div>
            <div class="alert alert-danger hidden" id="MessageNotSent">
              Oops! Something went wrong, please verify that you are not a robot or refresh the page and try again.
            </div>
            <div class="contact-form">
              <form id="contact-form-with-recaptcha" class="margin-clear" role="form">
                <div class="form-group has-feedback">
                  <label for="name">Name*</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="">
                  <i class="fa fa-user form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                  <label for="email">Email*</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="">
                  <i class="fa fa-envelope form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                  <label for="subject">Subject*</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                  <i class="fa fa-navicon form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                  <label for="message">Message*</label>
                  <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                  <i class="fa fa-pencil form-control-feedback"></i>
                </div>
                <input type="submit" value="Submit" class="submit-button btn btn-default">
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div id="map-canvas"></div>
          </div>
        </div>
      </div>
      <!-- main end -->
    </div>
  </div>
</section>
<!-- main-container end -->

<!-- section start -->
<!-- ================ -->
<section class="section pv-40 parallax background-img-1 dark-translucent-bg" style="background-position:50% 60%;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="call-to-action text-center">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <h2 class="title">Subscribe to Our Newsletter</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
              <div class="separator"></div>
              <form class="form-inline margin-clear">
                <div class="form-group has-feedback">
                  <label class="sr-only" for="subscribe2">Email address</label>
                  <input type="email" class="form-control" id="subscribe2" placeholder="Enter email" name="subscribe2" required="">
                  <i class="fa fa-envelope form-control-feedback"></i>
                </div>
                <button type="submit" class="btn btn-gray-transparent btn-animated margin-clear">Submit <i class="fa fa-send"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- section end -->

<?php get_footer(); ?>
