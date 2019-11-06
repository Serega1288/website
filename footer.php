

<div class="footer <?php if(is_front_page()) { echo 'footer_light'; } ?>">
  <div class="container">
    <div class="row">
      <div class="col-12 col-xl-2">
        <div class="footer_logo">
          <img src="<?php echo get_field('footer-logo','option'); ?>" alt="">
        </div>
      </div>
      <div class="col-12 offset-xl-1 col-xl-3">
        <div id="acordeon" class="footer_menu acordeon">
          <div class="d-xl-none footer_menu--title acordeon_title">
            <?php echo __( 'Information', 'factory' ); ?>
          </div>
          <!--
          <ul class="d-xl-block footer_menu--list acordeon_list">
            <li class="footer_menu--item acordeon_item"><a href="">О компании</a></li>
            <li class="footer_menu--item acordeon_item"><a href="">Наш бизнес</a></li>
            <li class="footer_menu--item acordeon_item"><a href="">Партнеры</a></li>
            <li class="footer_menu--item acordeon_item"><a href="">Сервис</a></li>
            <li class="footer_menu--item acordeon_item"><a href="">Для поставщиков</a></li>
            <li class="footer_menu--item acordeon_item"><a href="">Инвесторам и партнерам</a></li>
            <li class="footer_menu--item acordeon_item"><a href="">Медиацентр</a></li>
            <li class="footer_menu--item acordeon_item"><a href="">Карта сайта</a></li>
          </ul>-->



          <?php if (function_exists(clean_custom_menus_footer())) clean_custom_menus_footer(); ?>


        </div>
      </div>
      <div class="col-12 col-xl-6">
        <div class="footer_contacts contacts">

          <div class="contacts_item contacts_item--addres">
            <?php the_field('address', 'option'); ?>
          </div>

          <div class="contacts_item contacts_item--mail">
            <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
          </div>

          <?php if( have_rows('box-phone', 'option') ): ?>
          <div class="contacts_item contacts_item--phone">
            <?php while ( have_rows('box-phone', 'option') ) : the_row(); ?>
            <a href="tel:+<?php $phone = get_sub_field('phone'); $phone_format = preg_replace("/[^x\d|*\.]/","",$phone); echo $phone_format; ?>">
              <?php echo $phone; ?>
            </a>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>

          <form class="form form_subscription">
            <div class="wrap_input">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/mail.svg" alt="">
              <input type="email" class="form_mail" placeholder="Почта" required/>
              <button type="submit" value="Подписаться" class="form_submit"><span class="d-none d-xl-block"><?php echo __( 'Subscribe', 'factory' ); ?></span></button>
              <!-- 									<button type="submit" value="Подписаться" class="d-none d-xl-block form_submit">Подписаться</button> -->
            </div>
          </form>
          <div class="form_descr"><?php echo __( 'By clicking the «Subscribe» button, I consent to the processing of my personal data in the prescribed form.', 'factory' ); ?></div>


        </div>
      </div>
    </div>
  </div>
</div>
    <div class="section_copyright">
  <div class="container">
    <div class="section_copyright--wrapper">
      <div class="offset-xxxl-1 section_copyright--info"><?php the_field('copyright', 'option'); ?></div>
      <div class="copy_wrap">

        <?php while ( have_rows('menu', 'option') ) : the_row();
        $link = get_sub_field('url');
        $link_url = $link['url'];
	      $link_title = $link['title'];
        ?>
        <a href="<?php echo $link_url; ?>" class="section_copyright--link"><?php echo $link_title; ?></a>
        <?php endwhile; ?>

        <div class="scroll">
          <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

  </div><!-- .body -->

  <?php wp_footer(); ?>

  <div style="display: none;" id="hidden-content">
  	<?php echo do_shortcode('[contact-form-7 id="678" title="Заявка на замовлення продукції"]'); ?>
  </div>


</body>
</html>
