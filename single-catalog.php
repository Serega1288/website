<?php
get_header(); the_post(); ?>

<div class="header header-white">
  <?php get_template_part( 'template-parts/section/content', 'header' ); ?>
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

<div class="section section_plan section_sync">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php get_template_part( 'template-parts/section/content', 'breadcrumbs' ); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-xl-6">
        <div class="wrap_slick">

          <?php
          $img = get_field('img');
          $images = get_field('gallery');
          $size1 = 'catalog-thumbnail'; // (thumbnail, medium, large, full or custom size)
          $size2 = 'catalog-medium'; // (thumbnail, medium, large, full or custom size)
          ?>
          <div class="slider slick-vertical">
            <div class="center slick_img">
                <img src="<?php echo $img['sizes'][$size1]; ?>" alt="">
            </div>
            <?php if ( $images ) : foreach( $images as $image ): ?>
                <div class="center slick_img">
                    <img src="<?php echo $image['sizes'][$size1]; ?>" alt="">
                </div>
            <?php endforeach; endif; ?>
          </div>

          <div class="d-none d-xxl-block slider slick-big">
                <div class="center slick_img">
                  <img src="<?php echo $img['sizes'][$size2]; ?>" alt="">
                </div>
                <?php if ( $images ) : foreach( $images as $image ): ?>
                    <div class="center slick_img">
                        <img src="<?php echo $image['sizes'][$size2]; ?>" alt="">
                    </div>
                <?php endforeach; endif; ?>
          </div>

        </div>
      </div>
      <div class="col-12 col-xl-6">
        <div class="text">
          <?php the_content(); ?>
        </div>
        <?php while ( have_rows('block-download') ) : the_row();
        $file = get_sub_field('file');
        $size = $file['filesize'] / 1000000;
        $size = round($size, 3);
        $title = get_sub_field('title');
        ?>
        <div class="download">
          <div class="download_info">
            <a download href="<?php echo $file['url']; ?>" class="img-mob">
              <svg class="inline-svg-icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>\img\icons\download-icons.svg#down-mob"></use>
              </svg>
            </a>
            <div class="download_wrap">
              <a download href="<?php echo $file['url']; ?>" class="download_info--bottom"><?php echo $title; ?></a>
              <div class="download_info--top">
                <span><?php if ( $file['subtype'] == 'vnd.openxmlformats-officedocument.wordprocessingml.document' ) { echo 'docx'; } else { echo $file['subtype']; } ?>, <?php echo $size;  ?> MB</span>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>

        <a data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>" href="pop-buy" class="center btn btn-primary btn-long"><?php echo __( 'To order', 'factory' ); ?></a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="wrap_inset">
          <div class="inset"><?php echo __( 'Description', 'factory' ); ?></div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12">
        <?php get_template_part( 'template-parts/page/section', 'defaut' ); ?>
      </div>
    </div>

  </div>
</div>

<?php
get_footer();
