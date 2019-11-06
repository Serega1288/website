<?php
/*
* Template name: відключити лівий сайтбар
*/
get_header(); ?>
<?php $img = get_field('baner-page'); if ( $img ) : ?>
<div class="header header-plan header-mission" style="background-image: url('<?php echo $img; ?>');">
  <?php get_template_part( 'template-parts/section/header/header', 'img' ); ?>
  <div class="container">
    <div class="header_content">
      <div class="header_title">
        <div class="h1">
          <span><?php the_title(); ?></span>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<?php $img = get_field('baner-page'); if ( $img ) : else : ?>
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
<?php endif; ?>

<div class="section section_pd section_history section_contact">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php get_template_part( 'template-parts/section/content', 'breadcrumbs' ); ?>
      </div>
    </div>
    <div class="row not-sidebar">
      <?php get_template_part( 'template-parts/page/page', 'acf' ); ?>
    </div>
  </div>
</div>

<?php
get_footer();
