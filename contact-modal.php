<div class="contact-modal">
  <div class="modal-content">
    <div class="modal-body">
      <span class="close">&times;</span>
      <div>
        <div class="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="164" title="Contact Form"]'); ?>
        </div>
        <div class="sent-message success">
          <div class="sent-message-header">Thanks for your message!</div>
          <div class="sent-message-text">Your message was successfully sent.</div>
          <img src="<?php echo get_theme_file_uri('/images/check-circle.png'); ?>" alt="">
        </div>
        <div class="sent-message failure">
          <div class="sent-message-header">Oh snap ...</div>
          <div class="sent-message-text">Something went wrong.  Please refresh and try again.</div>
          <img src="<?php echo get_theme_file_uri('/images/error-circle.png'); ?>" alt="">
        </div>
    </div>
    </div>
  </div>
</div>