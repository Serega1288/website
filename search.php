<?php
/*
* Template name: search
*/


get_header();

$page_search = get_field('page-search','option');
$img = get_field('page-search');
$form_id = get_field('page-search');
//$form_id = 579;
//echo $form_id;

$args = array('post_type' => 'post');
$args['search_filter_id'] = $form_id;
$query_seacrh = new WP_Query($args);

?>

<?php if ( $img ) : ?>
<div class="header header-plan header-article header-search" style="background-image: url(<?php echo $img['sizes']['catalog-banner']?>);">
<?php else : ?>
<div class="header header-plan header-article header-search" style="background-image: url('/wp-content/themes/factory/img/result-search-bg.jpg');">
<?php endif; ?>
  <?php get_template_part( 'template-parts/section/content', 'header' ); ?>

  <div class="container">
    <div class="header_content">
      <div class="header_title">
        <div class="search_form">
          <?php $form_id=get_field('form_id_search', 'option'); echo do_shortcode('[searchandfilter id="' . $form_id . '"]'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section section_pd section_result-search">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php get_template_part( 'template-parts/section/content', 'breadcrumbs' ); ?>
      </div>
    </div>

    <div id="main" class="row">
      <?php $form_id=get_field('form_id_search', 'option'); echo do_shortcode('[searchandfilter id="' . $form_id . '" show="results"]'); ?>
    </div>
  </div>
</div>


<?php
get_footer();
