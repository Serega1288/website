<?php
if ( is_user_logged_in() ) : header('Location: /'); exit; else : endif;
/*
* Template name: register and enter
*/
get_header(); ?>






<div class="header header-white">
  <?php get_template_part( 'template-parts/section/content', 'header' ); ?>
</div>

<div class="section section_registr">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="flex tab_registr--wrap" id="tab_registr--form">
          <div class="center tab_registr"><?php echo __( 'Entrance', 'factory' ); ?></div>
          <div class="center tab_registr"><?php echo __( 'Registration', 'factory' ); ?></div>
        </div>
      </div>
      <div class="col-12">
        <?php vb_login_form(); ?>
      </div>
      <div class="col-12">
        <?php vb_registration_form(); ?>
      </div>
    </div>
  </div>
</div>



<?php
get_footer();
