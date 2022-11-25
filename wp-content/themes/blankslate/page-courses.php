<?php get_header(); 
 if( have_posts() ) : while (have_posts() ) : the_post(); ?>

<section class="section why-us" data-section="section2">
  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
          <h2 style="color:orange;"><b>Our Courses</b></h2>
          </div>
        </div>
        <div class="col-md-12">
          
            <section class='tabs-content'>
            <div class="container">
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo get_field('images4',5);?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4 style="color:orange; font-size:23px;"><u><?php echo get_field('title4',5);?></u></h4>
                    <br>
                    <br>
                    <p style="font-size:19px !important; color:#fff;"><?php echo get_field('content4',5);?></p>
                  </div>
                </div>
              </article>
            </div>
            <br>
            <br>
            <div class="container">
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo get_field('image5',5);?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4 style="color:orange; font-size:23px;"><u><?php echo get_field('title5',5);?></u></h4>
                    <br>
                    <br>
                    <p style="font-size:19px !important; color:#fff;"><?php echo get_field('content5',5);?></p>
                  </div>
                </div>
              </article>
            </div>
            <br>
            <br>
            <div class="container">
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo get_field('image6',5);?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4 style="color:orange; font-size:23px;"><u><?php echo get_field('title6',5);?></u></h4>
                    <br>
                    <br>
                    <p style="font-size:19px !important; color:#fff;"><?php echo get_field('content6',5);?> </p>
                  </div>
                </div>
              </article>
            </div>
            <br>
            <br>
            <div class="container">
              <article id='tabs-4'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo get_field('image7',5);?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4 style="color:orange; font-size:23px;"><u><?php echo get_field('title7',5);?></u></h4>
                    <br>
                    <br>
                    <p style="font-size:19px !important; color:#fff;"><?php echo get_field('content7',5);?> </p>
                  </div>
                </div>
              </article>
            </div>
            </section>
        
        </div>
      </div>
    </div>
  </section>


































<?php endwhile; endif; 
 get_footer(); ?>