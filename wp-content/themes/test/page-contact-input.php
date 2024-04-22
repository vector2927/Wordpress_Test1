<?php
  /*
    Template Name: SMT_test_contact
  */
  get_template_part('header');
?>

    <main class="main main--blog">
      <div class="main-inner">
        <div class="contact-form">
          <?php echo apply_shortcodes( '[contact-form-7 id="df85c6d" title="Contact Input"]' ); ?>
        </div>
      </div>
    </main>

<?php
  get_template_part('footer');
?>