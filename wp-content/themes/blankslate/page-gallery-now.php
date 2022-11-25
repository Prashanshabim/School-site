<?php get_header(); ?>
<?php if( have_posts() ) : while (have_posts() ) : the_post(); ?>

<section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="color:orange;">Our Gallery</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
        <?php $slider = get_posts(array('post_type' => 'gallery', 'posts_per_page' =>7)); ?>
      <?php $count = 0; ?>
      <?php foreach($slider as $slide): ?>
          <div class="item">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" alt="Course #1">
            <div class="down-content">
              <h4><?php echo $slide->post_title; ?></h4>
              <p style="font-size:16px !important;"><?php echo $slide->post_content; ?></p>
            </div>
          </div>
          <?php $count++; ?>
    <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!--for teachers-->
  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="color:orange;">Our Teachers</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
        <?php $slider = get_posts(array('post_type' => 'teachers', 'posts_per_page' =>5)); ?>
      <?php $count = 0; ?>
      <?php foreach($slider as $slide): ?>
          <div class="item">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" alt="Course #1">
            <div class="down-content">
              <h4><?php echo $slide->post_title; ?></h4>
              <p style="font-size:16px !important;"><?php echo $slide->post_content; ?></p>
            </div>
          </div>
          <?php $count++; ?>
    <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section> 

  <?php endwhile; endif; ?>
<?php get_footer(); ?>