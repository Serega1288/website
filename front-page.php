<?php
/*
* Template name: Головна
*/
get_header(); ?>

<div class="header header-main" style="background-image: url('<?php $banner = get_field('banner'); echo $banner['sizes']['catalog-banner']  ?>');">

  <?php get_template_part( 'template-parts/section/content', 'header' ); ?>
  <div class="container">
    <div class="header_content">
      <div class="header_title">
        <div class="h1">
          <span><?php the_field('title'); ?></span>
        </div>
      </div>

      <?php if ( get_field('video') ): ?>
        <div class="header_play">
          <a data-fancybox href="<?php the_field('video'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" alt="">
            <span><?php echo __( 'Watch the video', 'factory' ); ?></span>
          </a>
        </div>
      <?php endif; ?>

    </div>
  </div>

</div>


<div class="section section_categories desctop_categories d-none d-xl-block">
  <div class="category_main-image" <?php $banner = get_field('banner-2'); if ( $banner ) : ?> style="background-image: url(<?php  echo $banner;   ?>)" <?php endif; ?> >
    <div class="row">
      <div class="col-7">
        <?php while( have_rows('group-1') ): the_row(); $img = get_sub_field('img'); ?>
        <div class="desctop_category category_1" data-image="<?php echo $img['sizes']['media-thumbnail']; ?>">
          <a href="<?php $term = get_sub_field('url'); echo get_term_link( $term , 'catalog'); ?>">
            <?php the_sub_field('title'); ?>
          </a>
        </div>
        <?php endwhile; ?>
        <?php while( have_rows('group-2') ): the_row();  $img = get_sub_field('img'); ?>
        <div class="desctop_category category_2" data-image="<?php echo $img['sizes']['media-thumbnail']; ?>">
          <a href="<?php $term = get_sub_field('url'); echo get_term_link( $term , 'catalog'); ?>">
            <?php the_sub_field('title'); ?>
          </a>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="col-5">
        <?php while( have_rows('group-3') ): the_row(); $img = get_sub_field('img'); ?>
        <div class="desctop_category category_3" data-image="<?php echo $img['sizes']['media-thumbnail']; ?>">
          <a href="<?php $term = get_sub_field('url'); echo get_term_link( $term , 'catalog'); ?>">
            <?php the_sub_field('title'); ?>
          </a>
        </div>
        <?php endwhile; ?>
        <?php while( have_rows('group-4') ): the_row(); $img = get_sub_field('img'); ?>
        <div class="desctop_category category_4" data-image="<?php echo $img['sizes']['media-thumbnail']; ?>">
          <a href="<?php $term = get_sub_field('url'); echo get_term_link( $term , 'catalog'); ?>">
            <?php the_sub_field('title'); ?>
          </a>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>

<div class="section section_about">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="section_title">
          <div class="h1"><?php the_field('title-3'); ?></div>
        </div>
        <div class="section_content">
          <div class="h4"><?php the_field('text-3-1'); ?></div>
          <?php the_field('text-3-2'); ?>
          <?php $url=get_field('url-3'); if ( $url ) : ?>
          <div class="btn-wrapper">
            <a href="<?php echo $url; ?>" class="btn btn-primary"><?php echo __( 'To learn more', 'factory' ); ?></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="image">
          <?php $img = get_field('img-3'); ?>
          <img class="d-lg-none" src="<?php echo $img['sizes']['media-thumbnail']; ?>" alt="">
          <img class="d-none d-lg-block" src="<?php echo $img['sizes']['info-3']; ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section section_catalog">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <div class="h1"><?php the_field('title-4'); ?></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="owl-carousel catalog_carousel carousel-nav carousel-nav__align-center">

          <?php
          $args = array(
            'post_type' => 'catalog',
          	'posts_per_page' => get_field('posts_per_page'),
          );
          $query = new WP_Query( $args ); ?>
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="catalog_carousel--item">
            <div class="catalog_carousel--img pt-4">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php $img = get_field('img'); echo $img['sizes']['cat-img']; ?>" alt="">
              </a>
            </div>
            <div class="catalog_carousel--title">
              <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </div>
            <div class="catalog_carousel--btn">
              <a data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>" href="pop-buy" class="btn btn-primary"><?php echo __( 'Make an order', 'factory' ); ?></a>
            </div>
          </div>
          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="section section_repr">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section_title">
          <div class="h2"><?php the_field('title-5'); ?></div>
        </div>
      </div>і
    </div>
    <div class="row repr_wrapper">

      <?php while( have_rows('home-logo') ): the_row();
      $image = get_sub_field('image');
  		$content = get_sub_field('content');
  		$link = get_sub_field('link');
      ?>
      <div class="col-12 col-lg-6">
        <div class="repr">
          <div class="repr_logo">
            <img src="<?php echo $image['sizes']['catalog-thumbnail']; ?>" alt="">
          </div>
          <div class="repr_content">
            <div class="repr_text">
              <p><?php echo $content; ?></p>
              <a target="_blank" href="<?php echo $link; ?>" class="btn btn-secondary">
                <?php echo __( 'Visit website', 'factory' ); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>

    </div>
  </div>
</div>
  <div class="section section_news">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section_title">
          <div class="h1"><?php the_field('title-6'); ?></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="news_nav-wrapper" id="news_nav-wrapper">
          <ul class="news_nav" id="news_nav">
            <li class="news_nav-item active"><a href=""><?php echo __( 'Events', 'factory' ); ?></a></li>
            <li class="news_nav-item"><a href=""><?php echo __( 'News', 'factory' ); ?></a></li>
            <li class="news_nav-item"><a href=""><?php echo __( 'Video', 'factory' ); ?></a></li>
          </ul>
        </div>
        <div class="tabs">
          <div class="tab active">
            <div class="owl-carousel news_carousel carousel-nav">

              <?php
              $url_event_6 = get_field('url-event-6');
              $args = array(
                'post_type' => 'post',
              	'posts_per_page' => get_field('posts_per-6-1'),
                'cat' => $url_event_6->term_id ,
              );
                $query = new WP_Query( $args ); ?>
              <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="news_carousel-item">
                <div class="news_carousel-date">
                  <div class="day"><?php the_field('date-1'); ?></div>
                  <div class="month"><?php the_field('date-2'); ?></div>
                  <div class="year"><?php the_field('date-3'); ?></div>
                </div>
                <div class="news_carousel-text">
                  <div class="h4">
                    <?php the_title(); ?>
                  </div>
                </div>
                <a href="<?php the_permalink(); ?>" class="btn btn-third"><?php echo __( 'More details', 'factory' ); ?></a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            </div>
          </div>

          <div class="tab">
            <?php
            $url_news_6 = get_field('url-news-6');
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => get_field('posts_per-6-2'),
              'cat' => $url_news_6->term_id ,
            );
              $query = new WP_Query( $args ); ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="news_list-item">
              <a href="<?php the_permalink(); ?>" class="news_list-item--img">
                <?php
                $image = get_field('img');
                $size = 'media-category'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                  echo wp_get_attachment_image( $image, $size );
                } ?>
              </a>
              <div class="news_list-item--date">
                <?php echo get_the_date('j F Y'); ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="news_list-item--title">
                <?php the_title(); ?>
              </a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <div class="btn-wrapper">
              <a href="<?php echo get_term_link( $url_news_6 , 'catalog'); ?>" class="btn btn-primary"><?php echo __( 'All news', 'factory' ); ?></a>
            </div>
          </div>

          <div class="tab">

            <?php
            $url_video_6 = get_field('url-video-6');
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => get_field('posts_per-6-3'),
              'cat' => $url_video_6->term_id ,
            );
              $query = new WP_Query( $args ); ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="news_list-item news_list-item__video">
              <a data-fancybox href="<?php the_field('video'); ?>" class="news_list-item--img">
                <?php
                $image = get_field('img');
                $size = 'media-category'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                  echo wp_get_attachment_image( $image, $size );
                } ?>
              </a>
              <div class="news_list-item--date">
                <?php echo get_the_date('j F Y'); ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="news_list-item--title">
                <?php the_title(); ?>
              </a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>


            <div class="btn-wrapper">
              <a href="<?php echo get_term_link( $url_video_6  , 'catalog'); ?>" class="btn btn-primary"><?php echo __( 'All videos', 'factory' ); ?></a>
            </div>
          </div>
        </div>


      </div>


    </div>
  </div>
</div>
  <div class="section section_trust">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section_title text-center">
            <div class="h1"><?php the_field('title-7'); ?></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="owl-carousel owl_trust carousel-nav carousel-nav__align-center">

            <?php while( have_rows('box-logo') ): the_row(); $img = get_sub_field('img'); ?>
            <div class="owl_trust-item">
              <div class="owl_trust-img">
                <img src="<?php echo $img['sizes']['cat-img']; ?>" alt="">
              </div>
            </div>
          <?php endwhile; ?>

          </div>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
