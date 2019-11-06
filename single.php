<?php
get_header(); ?>
<div class="header header-plan header-sertificat" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/article-bg.jpg');">
  <?php get_template_part( 'template-parts/section/content', 'header' ); ?>
  <div class="container">
    <div class="header_content">
      <div class="header_title">
        <div class="h1"><span><?php the_title();  ?></span></div>
      </div>
    </div>
  </div>
</div>

<div class="section section_pd section_article">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php get_template_part( 'template-parts/section/content', 'breadcrumbs' ); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?php get_template_part( 'template-parts/content/link', 'return' ); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-xl-9 col-xxxl-8">
        <?php if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content/content', 'single' );
          endwhile;
        else :
          get_template_part( 'template-parts/content/content', 'none' );
        endif;
        ?>

        <?php get_template_part( 'template-parts/content/link', 'return' ); ?>
      </div>


      <div class="col-12 col-xl-3 offset-xxxl-1 col-xxxl-3">
        <?php get_template_part( 'template-parts/sidebar/media', 'right' ); ?>
      </div>


    </div>
  </div>
</div>
<?php
get_footer();
