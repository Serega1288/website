<?php
/*
* Template name: Тендери
*/


$page = get_field('page-tender', 'option');
$img = get_field('banner', $page->ID );
$logo = get_field('img', $page->ID );
get_header(); ?>


<div class="header header-plan" style="background-image: url('<?php echo $img['sizes']['catalog-banner']; ?>');">
  <?php get_template_part( 'template-parts/section/content', 'header' ); ?>

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


<div class="section section_pd section_plan section_tender">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php get_template_part( 'template-parts/section/content', 'breadcrumbs' ); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-xl-3 col-xxxl-3">
        <?php get_template_part( 'template-parts/sidebar/page', 'left' ); ?>
      </div>
      <div class="col-12 col-xl-9 offset-xxxl-1 col-xxxl-8">
        <div class="h2"><?php the_field('title-1'); ?></div>


        <div class="tender_bl tender_bl--sz">
          <div class="tender_bl--top">
            <div><img src="<?php echo $logo; ?>" alt=""></div>
            <a target="_blank" href="<?php the_field('url'); ?>" class="btn btn_rect btn_rect--brd"><?php echo __( 'Registration', 'factory' ); ?></a>
          </div>
          <!--
          <div class="search_form">
            <div class="input">
              <input type="text" placeholder="Пошук" class="d-xl-none search_form-input">
              <input type="text"  placeholder="Введіть фразу для пошуку" class="d-none d-xl-block search_form-input">
              <button type="submit" class="search_form-button"> </button>
            </div>
          </div>
          <div class="tender_bl--bot">
            <div class="wrap_select">
              <select data-smart-positioning="false" data-placeholder="Виберіть статус"  id="status">
                <option></option>
                <option>Статус 1</option>
                <option>Статус 2</option>
                <option>Статус 3</option>
              </select>
            </div>
            <div class="wrap_select">
              <select data-smart-positioning="false" data-placeholder="Виберіть вид торгів"  id="view">
                <option></option>
                <option>Статус 1</option>
                <option>Статус 2</option>
                <option>Статус 3</option>
              </select>
            </div>
          </div>
          -->

          <?php  $_id = get_field('id-filter'); echo do_shortcode('[searchandfilter id="'. $_id . '"]'); ?>

        </div>
        <div id="main">
          <?php echo do_shortcode('[searchandfilter id="'. $_id . '" show="results"]'); ?>
        </div>


      </div>
    </div>
  </div>
</div>

<?php
get_footer();
