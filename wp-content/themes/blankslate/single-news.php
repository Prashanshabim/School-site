<?php
get_header();
?>
<style>
      .blog-desc p,.blog-desc h2{
  font-size:21px !important;
}
</style>
<?php
/* Start the Loop */
while (have_posts()) : the_post();
   get_template_part('content', get_post_format());
?>
<div class="container-fluid" style="margin-top:100px !important;">
  <div class="row"> 
    <div class="col-lg-7 blog-post-single">
      <div class="blog-item">
        <div class="image-blog">
          <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>" alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="blog-desc">
        <div class="blog-title">
          <h2><a href="#" title=""><?php the_title(); ?></a></h2>
          <br>
          <?php echo the_date();?>
        </div>

          <p style="" class="jp"><?php the_content(); ?></p>
        </div>                     
      </div>
    </div>
  </div>
  <br><br><br><br>
  
<?php
endwhile; // End of the loop.
get_footer();
?>