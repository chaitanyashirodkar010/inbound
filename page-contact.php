<?php get_header(); ?>
  <!-- Banner Section -->
  <section class="ic-contact-bnr-sec ic-sec-pad">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="ic-font-weight-600 ic-color-black mb-2 d-inline-block ic-yellow-seperator">Contact</h1>
          <h5>We help you rank high on google so more customers find your services and help your business grow.</h5>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section -->
  <section>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5 class="ic-font-weight-600 ic-color-black">Email us</h5>
        <div > <a class="ic-color-blue" href="mailto:info@ideacatalyst.net">info@ideacatalyst.net</a> </div>
        <div class="ic-bottom-border pt-4 mr-5"></div>
      </div>
      <div class="col-md-8">
        <div class="ms-spacer-30"></div>
        <form method="POST" class="ic-form-design mt-4 mt-md-auto">
          <div class="form-row">
            <div class="form-group col-12 col-md-6 pr-md-5">
              <input type="text" class="form-control form-control-lg rounded-0" id="name" >
              <label>Name*</label>
            </div>
            <div class="form-group  col-12 col-md-6 pl-md-5">
              <input type="email" class="form-control form-control-lg rounded-0" id="email" >
              <label>Email address*</label>
            </div>
            <div class="form-group  col-12 col-md-6 pr-md-5">
              <input type="text" class="form-control form-control-lg rounded-0" id="organization" >
              <label>Organization*</label>
            </div>
            <div class="form-group  col-12 col-md-6 pl-md-5">
              <input type="text" class="form-control form-control-lg rounded-0" id="role" >
              <label>Role*</label>
            </div>
            <div class="form-group  col-12 col-md-6 pr-md-5">
              <input type="text" class="form-control form-control-lg rounded-0" id="country" >
              <label>Country*</label>
            </div>
            <div class="form-group col-12 mt-5">
              <label>Message*</label>
              <textarea class="form-control form-control-lg rounded-0" id="review" rows="7"></textarea>
            </div>
          </div>
          <div class="mt-4">
            <button type="submit" class="btn ic-primary-btn float-md-right">Get in touch</button>
          </div>
        </form>
        <?php echo do_shortcode('[wpforms id="63" title="false"]');?>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Footer Section -->
<?php get_footer(); ?>