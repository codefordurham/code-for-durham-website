<?php get_header(); ?>

<div class="main-container">

  <?php

    $projects = new WP_Query(array(
      'post_type' => 'project',
    ));

    if ($projects->have_posts()) {

      while ($projects->have_posts()) {
        $projects->the_post(); ?>

      <div class="post-item">

        <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

      </div>

  <?php } 
  
    }
  ?>

</div>

<?php get_footer(); ?>

