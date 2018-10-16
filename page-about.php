<?php

  get_header();

  while( have_posts() ) {

    the_post(); ?>

    <div class="main-container about">
      <h1>About Us</h1>
      
      <div class="page-section">
        <h2>Our Mission</h2>
        <div><?php echo get_field('our_mission'); ?></div>
      </div>

      <div class="page-section" id="what-is-cfa">
        <h2>What is Code For America?</h2>
        <div><?php echo get_field('what_is_cfa'); ?></div>
      </div>

      <div class="page-section" id="what-is-civic-hacking">
        <h2>What is Civic Hacking?</h2>
        <div><?php echo get_field('what_is_civic_hacking'); ?></div>
      </div>

      <div class="page-section">
        <h2>Who Do We Work With?</h2>
        <div><?php echo get_field('who_do_we_work_with'); ?></div>
      </div>

      <div class="page-section" id="how-can-i-help">
        <h2>How Can I Help?</h2>
        <div><?php echo get_field('how_can_i_help'); ?></div>
      </div>

      <div class="page-section">
        <h2>Code of Conduct</h2>
        <div><?php echo get_field('code_of_conduct'); ?></div>
      </div>

      <div class="page-section">
        <h2>FAQ</h2>
        <div><?php echo get_field('faq'); ?></div>
      </div>
    </div>

  <?php }

  get_footer();
?>
