<?php /* Template Name: Home */?>
<?php get_header(); ?>
<?php// if( have_posts() ) : while (have_posts() ) : the_post(); ?>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="<?php echo get_template_directory_uri(); ?>/assets/images/background.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Shree Saraswati Higher Secondary School</h6>
              <h2><em>Quality</em> Education</h2>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
<style>
  
  .wpcf7-response-output
  {
    color: red !important;
  }
  
    .content-hide p{
    font-size: 18px !important;
  }
</style>

  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Our Courses</h4>
              </div>
              <div class="content-hide">
                <p >•	Secondary Level <br>
                   •	Higher Secondary Level<br>
                   •	Faculty of Management<br>
                   •	Faculty of Education<br>
                   •	CTEVT Course
                </p>   
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Virtual Class</h4>
              </div>
              <div class="content-hide">
                <p> • Learning through Multimedia  <br>
                    •	Interactive Learning 
                </p>    
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Real Meeting</h4>
              </div>
              <div class="content-hide">
                <!--<p>.Feedback is the breakfast of champions.</p> -->
                <p> • Meeting with Class Representative <br>
                    •	Meeting with Teachers <br>
                    •	 Regular meeting with Parents <br>

                </p>     
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="color:orange;"><b>Why to choose Shree Saraswati H.S School?</b></h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs' >
             
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo get_field('image3',5);?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <p style="font-size:18px !important;"><?php echo get_field('content',5);?><a href="http://localhost/school/about/"> Read more.....</a></p>
                  </div>
                </div>
               </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  

  <section class="section video" data-section="section5">
    <div class="container bg-dark">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span style="font-size:18px !important;">Today a reader, tomorrow a leader</span>
            <h4><em>principal's Voice</em></h4>
            <p style="font-size:18px !important; justify-content: center;">Our school is one of the oldest school of Biratnagar providing education from last 23 years continiously. We not only provide education to the higher secondary level along with various faculties where the education is being provided by fully experienced teachers.We also provide CTEVT courses of technical background under grovernment certification.We  provide education on theoritical, practical and experimental basis.
            <br><br>
            We not only provide education inside the four walls but our curriculum also includes outdoor studies, recreational activites, field visit,tours,seminars and many more.</p>
            <div class="main-button"><a rel="nofollow" href="#" target="_parent">Quality Focused</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Mr.Yogendra B. Karki(principal)</h4>
            </div>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/principle.png"/>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
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
  </section>

  <section class="section why-us" data-section="section2">
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2 style="color:orange;"><b>Our Courses</b></h2>
        </div>
      </div>
      <div class="col-md-12">
        <div id='tabs' >
           
          <section class='tabs-content'>
          <div class="container">
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo get_field('images4',5);?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <p style="font-size:19px !important; color:#fff;"><?php echo get_field('content4',5);?><a href="http://localhost/school/courses/"> Read more........</a></p>
                  </div>
                </div>
              </article>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
  

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="color:orange;">Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">
          <?php 
            echo do_shortcode('[contact-form-7 id="87" title="quote"]');
            ?>
        </div>
        <div class="col-md-6">
          <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.3961423041605!2d87.28416871487256!3d26.44295678333219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef74349b85b5a9%3A0x39d2163b974924ad!2sSaraswati%20Secondary%20School!5e0!3m2!1sen!2snp!4v1661689569783!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="stripe">
      <h4 style="text-decoration: underline;font-size:18px !important; color:orange;">Call Us</h4>
        <br>
        <p style="font-size:18px !important;">Shree Saraswati H.S. School,<br>
          Near Hanuman Mandir,<br>
          Ram Janaki Path, Biratnagar-12<br>
          Phone:<a href="tel:021-23456"> 021-23456</a><br>
          Email:<a href="mailto: shreesaraswati5@gmail.com"> shreesaraswati5@gmail.com</a><br>
        </p>
    </div>
  </section>
<?php// endwhile; endif; ?>
<?php get_footer(); ?>
