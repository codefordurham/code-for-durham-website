<?php get_header(); ?>

<div class="main-container">

  <div class="page-banner durham">

  </div>

  <section class="info">
    <div class="box">
      <div class="meetup">
        <h2>Next Meetup</h2>
      </div>

      <div class="getstarted">
        <h2>Get Started</h2>
        <ul>
          <li><a href="<?php echo site_url('/about#what-is-cfa'); ?>"><img src="question-icon.svg" alt="">What is Code for America?</a></li>
          <li><a href="<?php echo site_url('/about#what-is-civic-hacking'); ?>"><img src="question-icon.svg" alt="">What is Civic Hacking?</a></li>
          <li><a href="<?php echo site_url('/about#how-can-i-help'); ?>"><img src="question-icon.svg" alt="">How can I help?</a></li>
        </ul>
      </div>
	  </div>
	</section>

  <section class="projects">
    <h2>What we are doing</h2>

    <div class="projectlist">

      <?php

        $projects = new WP_Query(array(
          'post_type' => 'project',
        ));

        if ($projects->have_posts()) {

          while ($projects->have_posts()) {
            $projects->the_post(); ?>

          <div class="project">
            <a href="<?php the_permalink(); ?>">

            <h3 class="headline headline--medium headline--post-title">
              <?php the_title(); ?>
            </h3>

            <button class="status <?php echo strtolower(get_field('project_status')); ?>">
              <?php the_field('project_status');?>
            </button>

            </a>
          </div>

        <?php } 

        }
      ?>

      <div class="project submit">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeegSPgMenQpJj07v_zIvI1-F2gn1P1Y8TAeCOv4cS9zabRkw/viewform">
          <h3>Submit Your Own Idea</h3>
        </a>
      </div>

    </div>

  </section>

  <section>
    <h2>Project Spotlight</h2>
    <div></div>
  </section>

  <section class="contact">
    <div class="follow">
      <h2>Join In</h2>
      <ul>
        <li><img src="<?php echo get_theme_file_uri('/images/twitter.svg'); ?>" alt="twitter logo"><a href="https://twitter.com/codefordurham">@CodeForDurham</a></li>
        <li><img src="<?php echo get_theme_file_uri('/images/facebook.svg'); ?>" alt="facebook logo"><a href="https://www.facebook.com/codefordurham/">/codefordurham</a></li>
        <li><img src="<?php echo get_theme_file_uri('/images/slack.svg'); ?>" alt="slack logo"><a href="https://open-nc.slack.com/">open-nc.slack.com</a></li>
      </ul>
    </div>
    <div class="sponsors">
      <h2>Sponsors</h2>
    </div>	
  </section>
</div>

<?php get_footer(); ?>
