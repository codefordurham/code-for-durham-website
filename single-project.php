<?php

  get_header();

  while( have_posts() ) {

    the_post(); ?>
    
    <div class="main-container project">
      <h1><?php the_title(); ?></h1>

      
      <?php 
        $projectStatus = get_field('project_status'); 
          
        if ($projectStatus) { ?>

          <div class="section project-status">

            <h2>Project Status: </h2>

            <div class="project-status-text"><?php echo $projectStatus; ?></div>
            
          </div>

          <?php }
      ?>

      <?php 
        $projectStatus = get_field('project_status'); 
          
        if ($projectStatus) { ?>

          <div class="section github-link">
        
          </div>

        <?php }
      ?>

      <?php 
        $projectDescription = get_field('project_description'); 
        
        if ($projectDescription) { ?>
          <div class="section project-details">

            <h2>Project Details</h2>

            <?php 
              $projectImage = get_the_post_thumbnail();

              if ($projectImage) { ?>
                
                <div class="project-image-container"><?php echo $projectImage; ?></div>
              <?php }
            ?>

            <div><?php echo $projectDescription; ?></div>

          </div>

        <?php }
      ?>
  
      <?php 
        $skillsNeeded = get_field('skills_needed'); 
        
        if ($skillsNeeded) { ?>

          <div class="section skills-needed">

            <h2>Skills Needed</h2>

            <div><?php echo $skillsNeeded; ?></div>

          </div>
          
        <?php }
      ?>

      <?php 
        $contactInfo = get_field('project_leader_contact_information'); 
        
        if ($contactInfo) { ?>

          <div class="section project-leader">
            
            <h2>Project Leader: <span class="project-leader-name"><?php echo get_field('project_leader'); ?></span></h2>

            <div><?php echo $contactInfo; ?></div>

          </div>

        <?php }
      ?>

    </div>

  <?php }

  get_footer();
?>
