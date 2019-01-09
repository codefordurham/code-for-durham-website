<section class="contact">
  <div class="follow contact-section">
    <h2>JOIN IN</h2>
    <ul>
      <?php 
        $home = new WP_Query(array(
          'pagename' => 'home'
        ));
        if ( $home->have_posts() ) {
          while ( $home->have_posts() ) {
          $home->the_post();
          $contact_links = get_field('contact_links');
          if ($contact_links && sizeof($contact_links) > 0) {
            foreach ($contact_links as $link) {
              $site_and_image = get_site_and_image($link);
              ?>
              <li>
                <?php if ($site_and_image["image"]) { ?>
                  <img src="<?php echo get_theme_file_uri('/images/' . $site_and_image["image"]); ?>" alt="<?php echo $site_and_image["site"]; ?> logo" style="width:30px;height:30px">
                <?php } ?>
                <a href="<?php echo $link["url"]; ?>" target="_blank">
                  <?php if ($link["text"]) {
                    echo $link["text"]; 
                  } else {
                    echo $link["url"];
                  } ?>
                </a>
              </li>
            <?php }
          }
        } 
      } ?>
      <li class="slack-invite"><a href="http://code-for-nc-slack-invitations.herokuapp.com/">&rdsh; Request an invite!</a></li>
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
  <p>Copyright <?php echo date("Y"); ?> Code for Durham</p>
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