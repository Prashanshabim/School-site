<?php get_header();?>
<style>
   .content-hide p{
    font-size: 18px !important;
  }
  </style>

<section class="section why-us" data-section="section2">
  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
          <h2 style="color:orange;"><b>Why to choose Shree Saraswati H.S School?</b></h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1' style="font-size:20px !important;"><?php echo get_field('title');?></a></li>
              <li><a href='#tabs-2' style="font-size:20px !important;"><?php echo get_field('title1');?></a></li>
              <li><a href='#tabs-3' style="font-size:20px !important;"><?php echo get_field('title2');?></a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo get_field('image');?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4><?php echo get_field('title');?></h4>
                    <p style="font-size:18px !important;"><?php echo get_field('content');?></p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo get_field('image1');?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4><?php echo get_field('title1');?></h4>
                    <p style="font-size:18px !important;"><?php echo get_field('content1');?></p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo get_field('image2');?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4><?php echo get_field('title2');?></h4>
                    <p style="font-size:18px !important;"><?php echo get_field('content2');?> </p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

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