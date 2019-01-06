<section class="contact">
  <div class="follow contact-section">
    <h2>JOIN IN</h2>
    <ul>
      <li><img src="<?php echo get_theme_file_uri('/images/meetup.png'); ?>" alt="meetup logo" style="width:40px;height:40px"><a href="https://www.meetup.com/Triangle-Code-for-America/" target="_blank">/Triangle-Code-for-America</a></li>
      <li><img src="<?php echo get_theme_file_uri('/images/twitter.svg'); ?>" alt="twitter logo"><a href="https://twitter.com/codefordurham" target="_blank">@CodeForDurham</a></li>
      <li><img src="<?php echo get_theme_file_uri('/images/facebook.svg'); ?>" alt="facebook logo"><a href="https://www.facebook.com/codefordurham/" target="_blank">/codefordurham</a></li>
      <li><img src="<?php echo get_theme_file_uri('/images/slack.svg'); ?>" alt="slack logo"><a href="https://open-nc.slack.com/" target="_blank">open-nc.slack.com</a></li>
      <li><img src="<?php echo get_theme_file_uri('/images/github.svg'); ?>" alt="github logo"><a href="https://github.com/codefordurham" target="_blank">/codefordurham</a></li>
    </ul>
  </div>
  <div class="sponsors contact-section">
    <h2>CFD SPONSORS</h2>
    <div class="sponsor-logos">
      <img src="<?php echo get_theme_file_uri('/images/caktus-logo.png'); ?>" alt="">
    </div>
  </div>	
</section>

<footer class="footer">
  <p>Copyright 2018 Code for Durham</p>
  <img class="logo" src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="Code for Durham logo">
</footer>

<?php wp_footer(); ?>

<script>
  const contactModal = document.querySelector('.contact-modal');
  const contactLinks = document.querySelectorAll('.contact-link');
  const contactModalClose = document.querySelector('.contact-modal .close');

  for (let i = 0; i < contactLinks.length; i++) {
    contactLinks[i].addEventListener("click", openContactModal);
  }

  contactModalClose.addEventListener("click", closeContactModal);

  function openContactModal() {
    contactModal.classList.add('open');
  }

  function closeContactModal() {
    contactModal.classList.remove('open');
  }
</script>
</body>
</html>