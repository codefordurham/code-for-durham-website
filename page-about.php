<?php

  get_header();

  while( have_posts() ) {

    the_post(); ?>

    <main class="about">

      <section class="about-cfd" id="what-is-cfd">
        <h2>About Code for Durham</h2>
        <div><?php the_field('about_cfd'); ?></div>
      </section>

      <section class="who-work-with">
        <h2>Who We Work With</h2>
        <div><?php the_field('who_we_work_with'); ?></div>
        <div class="government-types">
          <div class="government-type city">
            <img src="<?php echo get_theme_file_uri('images/city.jpg'); ?>" alt="">
            <div>CITY</div>
          </div>
          <div class="government-type county">
            <img src="<?php echo get_theme_file_uri('images/county.jpg'); ?>" alt="">
            <div>COUNTY</div>
          </div>
          <div class="government-type state">
            <img src="<?php echo get_theme_file_uri('images/state.jpg'); ?>" alt="">
            <div>STATE</div>
          </div>
        </div>
      </section>

      <section class="civic-hacking" id="civic-hacking">
        <h2>What is Civic Hacking</h2>
        <div><?php the_field('civic_hacking'); ?></div>
      </section>

    </main>

  <?php }

  get_footer();
?>
