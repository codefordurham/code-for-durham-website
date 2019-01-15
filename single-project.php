<?php

  get_header();

  while( have_posts() ) {

    the_post(); ?>
    
    <main class="project-page">

      <section class="project-header" style="background-image:url(<?php the_post_thumbnail_url('project-banner'); ?>);">
        <div class="overlay"></div>

        <h1><?php the_title(); ?></h1>
        <div class="project-status <?php echo strtolower(get_field('project_status')); ?>">
          <?php echo get_field('project_status'); ?>
        </div>
      </section>

      <?php $github = get_field('github_link');
        if ($github) { ?>
          <section class="project-github">
            <div class="project-github-logo"><img src="<?php echo get_theme_file_uri('images/github_icon/github-icon@3x.png'); ?>" alt="Github logo"></div>
            <div><a href="<?php echo $github; ?>" target="_blank"><?php echo str_replace('https://','',$github); ?></a></div>
          </section>
        <?php }
      ?>

      <?php $objective = get_field('objective');
        if ($objective) { ?>
          <section class="project-objective">
            <h2>Objective</h2>
            <div class="project-content"><?php the_field('objective'); ?></div>
          </section>
        <?php }
      ?>

      <?php $projectDetails = get_field('project_details');
        if ($projectDetails) { ?>
          <section class="project-details">
            <h2>Project Details</h2>
            <div class="project-content"><?php the_field('project_details'); ?></div>
          </section>
        <?php }
      ?>

      <?php $links = get_field('related_links');
        if ($links && sizeof($links) > 0) { ?>
          <section class="project-links">
            <h2>Related Links</h2>
            <ul>
              <?php foreach ($links as $link) { ?>
                <li><a href="<?php echo $link["related_link"]; ?>" target="_blank">
                  <?php if ($link["link_text"]) {
                    echo $link["link_text"];
                  } else {
                    echo $link["related_link"]; }
                  ?>
                </a></li>
              <?php }
              ?>
            </ul>
          </section>
        <?php }
      ?>

      <?php $skills = get_field('skills_needed');
        if ($skills && sizeof($skills) > 0) { ?>
          <section class="project-skills">
            <h2>Your help is needed</h2>
            <p>Are you willing and able to help with any of the following?</p> 
            <p>Come to a meetup or contact the project leader to get started!</p>
            <ul>
              <?php foreach ($skills as $skill) { ?>
                <li><?php echo $skill["skills"]; ?></li>
              <?php }
              ?>
            </ul>
          </section>
        <?php }
      ?>
  
      <?php $contact = get_field('project_leader');
        if ($contact) { ?>
          <section class="project-contact">
            <div class="project-image-container">
              <?php $profilePic = get_field('project_leader_picture');
                if ($profilePic) {
                  $src = $profilePic;
                } else {
                  $src = get_theme_file_uri('images/user/user.png');
                }
              ?>
              <img src="<?php echo $src; ?>" alt="">
            </div>
            <div>
              <div class="contact-name"><?php echo $contact; ?></div>
              <div class="contact-title">Project Leader</div>
            </div>
            <?php $project_leader_email = get_field('project_leader_email');
              if ($project_leader_email) {
                echo '<div class="contact-button"><a href="mailto:' . antispambot($project_leader_email) . '?subject=Code For Durham">Contact</a></div>';
              }
            ?>
          </section>
        <?php }
      ?>

    </main>

  <?php }

  get_footer();
?>
