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
        <?php echo do_shortcode('[wpforms id="63" class="ic-form-design mt-4 mt-md-auto" title="false"]');?>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Footer Section -->
<?php get_footer(); ?>