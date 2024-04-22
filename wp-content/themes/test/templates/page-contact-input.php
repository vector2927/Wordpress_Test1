<?php
/*
Template Name: Test_template_contact_form
*/
get_template_part('parts/header');
?>

<main class="main main--blog">
      <div class="main-inner">
        <div class="contact-form">
          <h1 class="contact-title-main">お問い合せ</h1>
          <?php echo apply_shortcodes( '[contact-form-7 id="df85c6d" title="Contact form 1"]' ); ?>
        </div>

      </div>
    </main>

<?php get_template_part('parts/footer'); ?>