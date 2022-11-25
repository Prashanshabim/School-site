<?php
    /*Template Name: Events*/
    get_header();
?>

<section class="section courses " data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="color:orange;">News and Events</h2>
          </div>
       </div>
        <div class="owl-carousel owl-theme">
        <?php $slider = get_posts(array('post_type' => 'news', 'posts_per_page' =>11)); ?>
      <?php $count = 0; ?>
      <?php foreach($slider as $slide): ?>
        <div class="item">
        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" alt="Course #1">
            <div class="down-content">
              
            <h4><a href="<?php echo $slide->guid; ?>" title="<?php echo $slide->post_title; ?>"><?php echo $slide->post_title; ?></a></h4>
            <p><?php echo substr($slide->post_content, 0,20); ?>...</p>
            </div>
          </div>
          
          <?php $count++; ?>
          <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
      </section>
<?php get_footer(); ?>