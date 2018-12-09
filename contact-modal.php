<?php

  $invalid_name = false;
  $invalid_email = false;
  $invalid_subject = false;
  $invalid_message = false;
  $response = "";
  
  // user posted variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $comments = $_POST['comments'];
  
  // php mailer variables
  $home = new WP_Query(array('pagename' => 'home'));
  while ( $home->have_posts() ) {
    $home->the_post();
    $to = get_field('contact_email');
  }
  $headers = 'From: ' . 'contact@codefordurham.com' . "\r\n";

  if ($_POST['submitted']) {
    // validation
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $invalid_email = true;
    if (empty($name)) $invalid_name = true;
    if (empty($subject)) $invalid_subject = true;
    if (empty($comments)) $invalid_message = true;
  
    $invalid = $invalid_email || $invalid_name || $invalid_subject || $invalid_message;
  
    // send message
    if (!$invalid) {
      $message = "Hello!

      Code for Durham has received an email:

      Name: $name
      E-mail: $email
      Comments:
      $comments";

      $sent = wp_mail($to, $subject, strip_tags($message), $headers);
      if($sent) $response = "success";
      else $response = "error";
    }
  }
?>

<div class="contact-modal">
  <div class="modal-content">
    <div class="modal-body">
      <span class="close">&times;</span>
      <div>
        <?php if (!$response) { ?>
          <form action="<?php the_permalink(); ?>" method="post">
            <label for="name" class="<?php if ($invalid_name) echo 'error'; ?>">
              Name
              <input type="text" name="name" id="name" class="<?php if ($invalid_name) echo 'error'; ?>" value="<?php echo esc_attr($_POST['name']); ?>">
            </label>
            <label for="email" class="<?php if ($invalid_email) echo 'error'; ?>">
              E-mail
              <input type="text" name="email" id="email" class="<?php if ($invalid_email) echo 'error'; ?>" value="<?php echo esc_attr($_POST['email']); ?>">
            </label>
            <label for="subject" class="<?php if ($invalid_subject) echo 'error'; ?>">
              Subject
              <input type="text" name="subject" id="subject" class="<?php if ($invalid_subject) echo 'error'; ?>" value="<?php echo esc_attr($_POST['subject']); ?>">
            </label>
            
            <label for="comments" class="<?php if ($invalid_message) echo 'error'; ?>">
              Your comments
            </label>
            <textarea type="text" name="comments" rows="8" cols="40" id="comments" class="<?php if ($invalid_message) echo 'error'; ?>"><?php echo esc_textarea($_POST['comments']); ?></textarea>
            <input type="hidden" name="submitted" value="1">
            <input type="submit" value="Send Message" class="send-button">
          </form>
        <?php } else if ($response === "success") { ?>
          <div class="sent-message">
            <div class="sent-message-header">Thanks for your message!</div>
            <div class="sent-message-text">Your message was successfully sent.</div>
            <img src="<?php echo get_theme_file_uri('/images/check-circle.png'); ?>" alt="">
          </div>
        <?php } else { ?>
          <div class="sent-message">
            <div class="sent-message-header">Oh snap ...</div>
            <div class="sent-message-text">Something went wrong.  Please refresh and try again.</div>
            <img src="<?php echo get_theme_file_uri('/images/error-circle.png'); ?>" alt="">
          </div>
        <?php } ?>
    </div>
    </div>
  </div>
</div>