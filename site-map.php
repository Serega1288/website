<?php
/*
* Template name: карта сайта
*/
get_header(); ?>

  <div class="header header-white">
    <?php get_template_part( 'template-parts/section/header/header', 'white' ); ?>
  </div>

  <div class="center section section_title-sync">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="h3"><?php the_title(); ?></div>
        </div>
      </div>
    </div>
  </div>


<div class="section section_pd section_history section_contact">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php get_template_part( 'template-parts/section/content', 'breadcrumbs' ); ?>
      </div>
    </div>
    <div class="row not-sidebar">
      <div class="col-12">
        <?php
        wp_nav_menu( [
        	'theme_location'  => 'menu-map-site',
        	'menu'            => '',
        	'container'       => 'div',
        	'container_class' => '',
        	'container_id'    => '',
        	'menu_class'      => 'menu',
        	'menu_id'         => '',
        	'echo'            => true,
        	'fallback_cb'     => 'wp_page_menu',
        	'before'          => '',
        	'after'           => '',
        	'link_before'     => '',
        	'link_after'      => '',
        	'items_wrap'      => '<ul id="%1$s" class="%2$s menu-map">%3$s</ul>',
        	'depth'           => 0,
        	'walker'          => '',
        ] ); ?>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
