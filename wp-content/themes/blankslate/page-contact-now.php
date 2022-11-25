<?php get_header(); ?>
<style>
  .wpcf7-response-output
  {
    color: red !important;
  }
  </style>
  <?php if( have_posts() ) : while (have_posts() ) : the_post(); ?>
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
          Ramjanaki Path, Biratnagar-9<br>
          Phone:<a href="tel:021-512314"> 021-512314</a><br>
          Email:<a href="mailto: shreesaraswati5@gmail.com"> shreesaraswati5@gmail.com</a><br>
        </p>
    </div>
    </div>

  </section>

  
    <!-- -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>

























<?php /*get_header(); ?>
<?php //get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<?php get_footer(); */ ?>