<?php

  get_header();

  while( have_posts() ) {

    the_post(); ?>

    <main class="getting-started">

      <section class="gs-header" style="background-image: url('<?php echo get_theme_file_uri('images/aleksandar-cvetanovic-1068417-unsplash.jpg'); ?>');">
        <div class="overlay"></div>
        <h1>Getting Started</h1>
      </section>

      <?php $steps = get_field('steps'); ?>
      <section class="steps" id="how-to-help">
        <ul>
          <?php foreach ($steps as $index=>$step) { ?>
            <li class="step">
              <div class="step-header">
                <div class="step-number"><?php echo $index + 1; ?></div>
                <div class="step-title"><?php echo $step["title"]; ?></div>
              </div>
              <div class="step-main">
                <div class="step-blank"></div>
                <div class="step-content">
                  <div class="step-description"><?php echo $step["description"]?></div>
                  <?php if ($step["link"]) { ?>
                    <a class="step-link" href="<?php echo $step["link"]; ?>"><?php echo $step["link_text"]; ?></a>
                  <?php } ?>
                </div>
              </div>
            </li>
          <?php }
          ?>
        </ul>
      </section>

      <?php $faqs = get_field('faqs');
        if ($faqs && sizeof($faqs) > 0) { ?>
          <section class="faq">
            <div class="faq-header" style="background-image: url('<?php echo get_theme_file_uri('images/camylla-battani-784361-unsplash.jpg'); ?>');">
              <div class="overlay"></div>
              <h2>Frequent Questions</h2>
            </div>
            <div class="faq-content">
              <ul>
                <?php foreach ($faqs as $faq) { ?>
                  <li>
                    <div class="question"><?php echo $faq["question"]; ?></div>
                    <div class="answer"><?php echo $faq["answer"]; ?></div>
                  </li>
                <?php }
                ?>
              </ul>
            </div>
          </section>
        <?php }
      ?>

      <section class="gs-contact">
        <p>Still have a question?</p>
        <a style="cursor:pointer" class="contact-link">Contact</a>
      </section>

    </main>

  <?php }

  get_footer();
?>
